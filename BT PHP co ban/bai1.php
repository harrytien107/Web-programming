<!DOCTYPE html>
<html>
<head>
    <title>Bài 1 - Table with PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }
        table {
            width: 500px;
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
    echo "<table>";
    
    // First row with colored cells
    echo "<tr>";
    echo "<td style='background-color: red;'>Hàng 1 Ô 1</td>";
    echo "<td style='background-color: yellow;'>Hàng 1 Ô 2</td>";
    echo "<td style='background-color: blue; color: white;'>Hàng 1 Ô 3</td>";
    echo "</tr>";
    
    // Rows 2-5
    for ($i = 2; $i <= 5; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 3; $j++) {
            echo "<td>Hàng $i Ô $j</td>";
        }
        echo "</tr>";
    }
    
    echo "</table>";
    ?>
</body>
</html>