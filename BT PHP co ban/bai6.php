<!DOCTYPE html>
<html>
<head>
    <title>Bài 6 - Table with Alternating Colors</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 300px;
        }
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Table với màu nền xen kẽ</h2>
    
    <?php
    $a = 10; // Thay đổi giá trị này để có số dòng khác nhau
    
    echo "<p>Số dòng: $a</p>";
    echo "<table>";
    
    for ($i = 1; $i <= $a; $i++) {
        if ($i % 2 == 0) {
            // Dòng chẵn - nền vàng
            echo "<tr style='background-color: yellow;'>";
        } else {
            // Dòng lẻ - nền đỏ
            echo "<tr style='background-color: red;'>";
        }
        echo "<td>Dòng $i</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    ?>
</body>
</html>