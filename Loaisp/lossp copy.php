<?php
// Kết nối database
$conn = mysqli_connect("localhost", "root", "", "webtintuc");
mysqli_set_charset($conn, "utf8");

// Lấy danh sách loại sản phẩm
$sql_loai = "SELECT idLoai, TenLoai FROM webtm_loaisp WHERE AnHien=1 ORDER BY TenLoai";
$rs_loai = mysqli_query($conn, $sql_loai);
$ds_loai = [];
while ($row = mysqli_fetch_assoc($rs_loai)) {
    $ds_loai[] = $row;
}

// Xử lý lọc
$show_table = false;
$data_sp = [];
if (isset($_GET['idLoai']) && $_GET['idLoai'] != "") {
    $idLoai = intval($_GET['idLoai']);
    $show_table = true;
    // Lấy tên loại theo idLoai
    $ten_loai = '';
    foreach ($ds_loai as $loai) {
        if ($loai['idLoai'] == $idLoai) {
            $ten_loai = $loai['TenLoai'];
            break;
        }
    }
    // Lấy tất cả idLoai có cùng TenLoai
    $ds_idLoai = [];
    foreach ($ds_loai as $loai) {
        if ($loai['TenLoai'] == $ten_loai) {
            $ds_idLoai[] = $loai['idLoai'];
        }
    }
    $idLoai_list = implode(',', array_map('intval', $ds_idLoai));
    $sql_sp = "SELECT TenSP, Gia, SoLuongTonKho FROM webtm_sanpham WHERE idLoai IN ($idLoai_list) AND AnHien=1";
    $rs_sp = mysqli_query($conn, $sql_sp);
    while ($row = mysqli_fetch_assoc($rs_sp)) {
        $data_sp[] = $row;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lọc sản phẩm</title>
</head>
<body>
    <form method="get" action="">
        <label for="idLoai">Loại sp:</label>
        <select name="idLoai" id="idLoai">
    <option value="">-- Chọn loại sản phẩm --</option>
    <?php
    $tenLoaiDaCo = [];
    foreach($ds_loai as $loai) {
        if (!in_array($loai['TenLoai'], $tenLoaiDaCo)) {
            $tenLoaiDaCo[] = $loai['TenLoai'];
            // Lấy idLoai đầu tiên của TenLoai này
            $selected = (isset($_GET['idLoai']) && $_GET['idLoai']==$loai['idLoai']) ? 'selected' : '';
            echo '<option value="'.$loai['idLoai'].'" '.$selected.'>'.$loai['TenLoai'].'</option>';
        }
    }
    ?>
        </select>
        <button type="submit">Lọc</button>
    </form>
    <?php if ($show_table) { ?>
    <div style="margin-top:10px">
        <?php if (count($data_sp) > 0) { ?>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>STT</th>
                <th>Tên SP</th>
                <th>Giá</th>
                <th>Số lượng</th>
            </tr>
            <?php foreach ($data_sp as $i => $sp) { ?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo htmlspecialchars($sp['TenSP']); ?></td>
                <td><?php echo number_format($sp['Gia']); ?></td>
                <td><?php echo $sp['SoLuongTonKho']; ?></td>
            </tr>
            <?php } ?>
        </table>
        <?php } else { ?>
            <p>Không có sản phẩm nào thuộc loại này.</p>
        <?php } ?>
    </div>
    <?php } ?>
</body>
</html>
