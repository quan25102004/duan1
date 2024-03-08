
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <?php
    if (!isset($_COOKIE['user'])) {
        header('location: ?url=login');
        die;
    }
    ?>
    <h2>Sửa Loại</h2>
    <form action="index.php?url=sualoai&idLoai=<?=$loai['idLoai']?>" method='post'>
        <input type="hidden" name='idLoai' value="<?=$loai['idLoai']?>" ><br>
        Tên Loại
        <input type="text" name='tenloai' value="<?=$loai['tenloai']?>"><br>
        <p style="color:red"><?= $error['tenloai'] ?? ''?></p>
        <button type="submit" >Sửa</button>
        <a href="loai.php">Quan tri</a>
    </form>
</body>
</html>