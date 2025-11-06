<!DOCTYPE html>
<html>
<head>
    <title>Bài 9 - Factorial Calculation</title>
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
    <h2>Tính giai thừa</h2>
    
    <?php
    function factorial($n) {
        if ($n <= 1) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }
    
    $n = 5; // Thay đổi giá trị này để tính giai thừa của số khác
    $result = factorial($n);
    
    echo "<div class='result'>";
    echo "$n! = $result";
    echo "</div>";
    
    // Hiển thị công thức tính
    echo "<p>Công thức tính:</p>";
    echo "<p>$n! = ";
    for ($i = $n; $i >= 1; $i--) {
        echo $i;
        if ($i > 1) {
            echo " × ";
        }
    }
    echo " = $result</p>";
    ?>
</body>
</html>