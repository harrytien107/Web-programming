<!DOCTYPE html>
<html>
<head>
    <title>Bài 7 - Table with $dong rows and $cot columns</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 500px;
        }
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Table với số dòng và cột tùy chỉnh</h2>
    
    <?php
    $dong = 5; // Số dòng
    $cot = 4;  // Số cột
    
    echo "<p>Số dòng: $dong, Số cột: $cot</p>";
    echo "<table>";
    
    for ($i = 1; $i <= $dong; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $cot; $j++) {
            echo "<td>Dòng $i, Cột $j</td>";
        }
        echo "</tr>";
    }
    
    echo "</table>";
    ?>
</body>
</html>