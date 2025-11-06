<?php
// Kết nối database
$conn = mysqli_connect("localhost", "root", "", "webtintuc");
mysqli_set_charset($conn, "utf8");

// Lấy danh sách loại sản phẩm
$sql_loai = "SELECT idLoai, TenLoai FROM webtm_loaisp WHERE AnHien=1 ORDER BY TenLoai";
$rs_loai = mysqli_query($conn, $sql_loai);
$ds_loai = [];
while ($row = mysqli_fetch_array($rs_loai)) {
    $ds_loai[] = $row;
}

// Xử lý lọc 
$show_table = false;
$data_sp = [];
if (isset($_GET['loaisp']) && $_GET['loaisp'] != "") {
    $idLoai = intval($_GET['loaisp']);
    $show_table = true;
    $sql_sp = "SELECT TenSP, Gia, SoLuongTonKho FROM webtm_sanpham WHERE idLoai=$idLoai AND AnHien=1";
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
    <form method="get" action="" id="form_loc">
        <label for="loaisp">Loại sp:</label>
        <select name="loaisp" id="loaisp" onchange="this.form.submit()">
            <option value="">-- Chọn loại sản phẩm --</option>
            <?php
            $tenLoaiDaCo = [];
            foreach($ds_loai as $loai) {
                if (!in_array($loai['TenLoai'], $tenLoaiDaCo)) {
                    $tenLoaiDaCo[] = $loai['TenLoai'];
                    $selected = (isset($_GET['loaisp']) && $_GET['loaisp']==$loai['idLoai']) ? 'selected' : '';
                    echo '<option value="'.$loai['idLoai'].'" '.$selected.'>'.$loai['TenLoai'].'</option>';
                }
            }
            ?>
        </select>
    </form>
    <?php if ($show_table) { ?>
    <div style="margin-top:10px">
        <?php if (count($data_sp) > 0) { ?>
        <table width="500" border="1" cellpadding="0" cellspacing="0">
            <tr>
                <th width="50">STT</th>
                <th width="200">Tên SP</th>
                <th width="100">Giá</th>
                <th width="100">Số lượng</th>
            </tr>
            <?php foreach ($data_sp as $i => $sp) { ?>
            <tr>
                <td width="50"><?php echo $i+1; ?></td>
                <td width="200"><?php echo htmlspecialchars($sp['TenSP']); ?></td>
                <td width="100"><?php echo number_format($sp['Gia']); ?></td>
                <td width="100"><?php echo $sp['SoLuongTonKho']; ?></td>
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
