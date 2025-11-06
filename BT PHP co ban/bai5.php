<!DOCTYPE html>
<html>
<head>
    <title>Bài 5 - Table with $a rows</title>
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
    <h2>Table với số dòng tùy chỉnh</h2>
    
    <?php
    $a = 7; // Thay đổi giá trị này để có số dòng khác nhau
    
    echo "<p>Số dòng: $a</p>";
    echo "<table>";
    
    for ($i = 1; $i <= $a; $i++) {
        echo "<tr>";
        echo "<td>Dòng $i</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    ?>
</body>
</html>