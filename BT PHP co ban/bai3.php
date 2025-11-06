<!DOCTYPE html>
<html>
<head>
    <title>Bài 3 - Conditional Statements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
    </style>
</head>
<body>
    <h2>Kiểm tra điểm</h2>
    
    <?php
    $diem = 8;
    
    echo "Điểm của bạn: $diem <br><br>";
    
    if ($diem < 5) {
        echo "Xém đậu";
    } elseif ($diem >= 5 && $diem <= 8) {
        echo "Đậu rồi";
    } else {
        echo "Bé học giỏi quá nha!";
    }
    ?>
</body>
</html>