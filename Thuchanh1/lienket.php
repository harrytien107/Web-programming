<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liên kết website</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }
        .lienket-box {
            width: 250px;
            border: 1px solid #4682B4;
            padding: 0;
        }
        .lienket-box ul {
            list-style-type: disc;
            margin: 10px 20px 10px 40px;
            padding: 0;
        }
        .lienket-box li {
            /* margin-bottom: 8px; */
        }
        .lienket-box a {
            color: #0066CC;
        }
    </style>
</head>
<body>
    <div class="lienket-box">
        <ul>
            <?php

            $con = @mysqli_connect("localhost","root","")or die("Lỗi kết nối");
            $db = mysqli_select_db($con,"webtintuc")or die("Lỗi kết nối cơ sở dữ liệu");
            
            mysqli_set_charset($con, "utf8");
            
            $query = "SELECT * FROM lienket ORDER BY ThuTu";
            $result = mysqli_query($con, $query);
            
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<li><a href="' . $row["Url"] . '" target="_blank">' . $row["Ten"] . '</a></li>';
                }
            } else {
                echo "Không có dữ liệu liên kết";
            }
            
            mysqli_close($con);
            ?>
        </ul>
    </div>
</body>
</html>
