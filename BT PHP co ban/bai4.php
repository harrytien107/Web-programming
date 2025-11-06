<!DOCTYPE html>
<html>
<head>
    <title>Bài 4 - Even Numbers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .number {
            display: inline-block;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h2>Các số chẵn từ 10 đến 100</h2>
    
    <?php
    for ($i = 10; $i <= 100; $i += 2) {
        echo "<div class='number'>$i</div>";
    }
    ?>
</body>
</html>