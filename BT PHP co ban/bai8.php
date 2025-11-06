<!DOCTYPE html>
<html>
<head>
    <title>Bài 8 - Numbers Divisible by 13</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Đếm số chia hết cho 13</h2>
    
    <?php
    $count = 0;
    $numbers = [];
    
    for ($i = 2839; $i <= 7827; $i++) {
        if ($i % 13 == 0) {
            $count++;
            $numbers[] = $i;
        }
    }
    
    echo "<div class='result'>";
    echo "Từ 2839 đến 7827 có $count số chia hết cho 13.";
    echo "</div>";
    
    // Hiển thị danh sách các số (tùy chọn)
    echo "<details>";
    echo "<summary>Xem danh sách các số</summary>";
    echo "<div style='max-height: 300px; overflow-y: auto;'>";
    foreach ($numbers as $num) {
        echo "$num, ";
    }
    echo "</div>";
    echo "</details>";
    ?>
</body>
</html>