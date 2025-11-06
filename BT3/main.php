<div class="main">
    <?php
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        
        switch($page) {
            case 'tintuc':
                include 'tintuc.php';
                break;
            case 'xahoi':
                include 'xahoi.php';
                break;
            case 'giaitri':
                include 'giaitri.php';
                break;
            default:
                echo "<p class='maintext'>Đây là trang main</p>";
                echo "<p class='ptext'>Mặc định sẽ hiển thị nội dung của trang main.php.</p>";
                echo "<p class='ptext'>Khi người dùng click vào mục nào (ở menu bên trái) thì nội dung tương ứng (nội dung của trang tương ứng) sẽ hiện ra.</p>";
        }
    } else {
        echo "<p class='maintext'>Đây là trang main</p>";
        echo "<p class='ptext'>Mặc định sẽ hiển thị nội dung của trang main.php.</p>";
        echo "<p class='ptext'>Khi người dùng click vào mục nào (ở menu bên trái) thì nội dung tương ứng (nội dung của trang tương ứng) sẽ hiện ra.</p>";
    }
    ?>
</div> 