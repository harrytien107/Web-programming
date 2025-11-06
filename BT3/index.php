<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 3 - Layout PHP</title>
</head>
<body>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    padding: 50px;
}

.container {
    width: 100%;
    margin: 0 auto;
}

.banner {
    width: 100%;
    height: 150px;
    border: 1px solid blue;
}

.content {
    display: flex;
    width: 100%;
    border-left: 1px solid blue;
    border-right: 1px solid blue;
}

.menu {
    width: 20%;
    border-right: 1px solid blue;
}

.menu ul {
    list-style-type: none;
    padding: 0px;
}

.menu li {
    margin-top: 10px;
    margin-bottom: 10px;

}

.menu li:last-child {
    margin-bottom: 0;
}


.main {
    width: 80%;
    min-height: 400px;
}

.footer {
    width: 100%;
    height: 50px;
    border: 1px solid blue;
}


.maintext {
    font-size: 16px;
    margin-bottom: 60px;
}

.ptext {
    font-size: 16px;
    margin-bottom: 20px;
}


    </style>
    <div class="container">
        <?php include 'banner.php'; ?>
        
        <div class="content">
            <?php include 'menu.php'; ?>
            <?php include 'main.php'; ?>
        </div>
        
        <?php include 'footer.php'; ?>
    </div>
</body>
</html> 