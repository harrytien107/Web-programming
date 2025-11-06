<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Phân trang</title>
<style>
    .pnow{font-size: 25px; font-weight: bold; color: red;}
</style>
</head>
<body>
<?php
$sd=5;
include 'connect.php';
// Thực hiện truy vấn lấy tất cả sản phẩm:
$sl="select * from webtm_sanpham";
$kq=mysqli_query($link,$sl);
$sp=mysqli_num_rows($kq);
// Tổng số trang:
$st=ceil($sp/$sd);
// Tính trang hiện hành:
if(isset($_GET['page'])) $page=$_GET['page']; else $page=1;
// Tính vị trí lấy sản phẩm theo page:
$vt=($page-1)*$sd;
// Truy vấn lấy sản phẩm theo vị trí:
$sl2="select * from webtm_sanpham limit $vt,$sd";
$kq2=mysqli_query($link,$sl2);
?>
<table width="500" border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr>
    <th width="65" scope="col">STT</th>
    <th width="254" scope="col">Tên Sản phẩm</th>
    <th width="224" scope="col">Hình</th>
    <th width="147" scope="col">Giá</th>
</tr>
<?php
$i=1;
while($d2=mysqli_fetch_array($kq2)){
?>
<tr>
    <td><?php echo $i++;?></td>
    <td><?php echo $d2['TenSP'];?></td>
    <td><img src="<?php echo $d2['UrlHinh'];?>" width="100"/></td>
    <td><?php echo $d2['Gia'];?></td>
</tr>
<?php }?>
</tbody>
</table>
<p>Trang <?php for($i=1;$i<=$st;$i++){ if($page==$i) echo "<span class='pnow'>$i</span> "; else echo "<a href='?page=$i'>$i</a> "; }?></p>
</body>
</html>
