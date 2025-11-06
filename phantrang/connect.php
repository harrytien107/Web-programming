<?php
// Kết nối database MySQL
$host = 'localhost';
$user = 'root'; // Thay đổi nếu user khác
$pass = '';
$db = 'webtintuc';
$link = mysqli_connect($host, $user, $pass, $db);
if (!$link) {
    die('Không thể kết nối MySQL: ' . mysqli_connect_error());
}
mysqli_set_charset($link, 'utf8');
?>
