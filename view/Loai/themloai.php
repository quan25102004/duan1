
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (!isset($_COOKIE['user'])) {
        header('location: ?url=login');
        die;
    }
    ?>
    <h2>Thêm Loại</h2>
    <form action="index.php?url=themloai" method='post'>
        Tên Loại
        <input type="text" name='tenloai'>
        <p style="color:red"><?= $error['tenloai'] ?? ''?></p>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>