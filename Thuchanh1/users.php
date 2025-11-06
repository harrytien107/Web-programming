<?php
    $con = @mysqli_connect("localhost","root","")or die("Lỗi kết nối");
    $db = mysqli_select_db($con,"webtintuc")or die("Lỗi kết nối cơ sở dữ liệu");

    $query = "SELECT * FROM user";
    $result = mysqli_query($con,$query);

    if (!$result) {
        die("Lỗi truy vấn: " . mysqli_error($con));
    }

    echo "
    <table border='1' width='100%' style='border-collapse: collapse;'>
        <tr>
            <th>STT</th>
            <th>Họ tên</th>
            <th>Username</th>
            <th>Email</th>
        </tr>
        <tbody>
            ";
                $i = 0;
                while($row = $result->fetch_assoc()){
                    $i++;
                    echo "<tr>";
                    echo "<td>".$i."</td>";
                    echo "<td>".$row['HoTen']."</td>";
                    echo "<td>".$row['Username']."</td>";
                    echo "<td>".$row['Email']."</td>";
                    echo "</tr>";
                }
        echo "</tbody>
    </table>";