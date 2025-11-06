<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'webtintuc');
$conn->set_charset('utf8');
if ($conn->connect_error) {
    die('Kết nối thất bại: ' . $conn->connect_error);
}

// Query all singers
$sql_singers = "SELECT * FROM webnhac_casi ORDER BY HoTenCS ASC";
$result_singers = $conn->query($sql_singers);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách Ca sĩ và Bài hát</title>
    <style>
        .container {
            border: 1px solid #2980b9;
            padding: 16px;
            margin: 16px 0 16px 16px;
            width: 420px;
            font-family: Arial, sans-serif;
        }
        ul { margin: 0 0 0 18px; }
        li { margin-bottom: 6px; }
    </style>
</head>
<body>
<div class="container">
    <ul>
    <?php while ($singer = $result_singers->fetch_assoc()): ?>
        <li><strong><?= htmlspecialchars($singer['HoTenCS']) ?></strong>
            <ul>
                <?php
                $idCS = (int)$singer['idCS'];
                $sql_songs = "SELECT * FROM webnhac_baihat WHERE idCS = $idCS ORDER BY TenBH ASC";
                $result_songs = $conn->query($sql_songs);
                if ($result_songs->num_rows > 0):
                    while ($song = $result_songs->fetch_assoc()): ?>
                        <li><a href="#" style="color:#2366b1;text-decoration:underline;"><?= htmlspecialchars($song['TenBH']) ?></a></li>
                    <?php endwhile;
                else: ?>
                    <li>Chưa có bài hát</li>
                <?php endif; ?>
            </ul>
        </li>
    <?php endwhile; ?>
    </ul>
</div>
</body>
</html>
<?php $conn->close(); ?>
