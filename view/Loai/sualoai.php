
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
    <?php require_once "headerAdmin.php" ?>
    <div>
         <h2 style="margin:10px 5px">Sửa Loại: </h2>
    <div style="margin-left: 10px;">
         <form action="index.php?url=sualoai&idLoai=<?=$loai['idLoai']?>" method='post'>
        <input type="hidden" name='idLoai' value="<?=$loai['idLoai']?>" ><br>
        Tên Loại
        <input type="text" name='tenloai' value="<?=$loai['tenloai']?>"><br>
        <p style="color:red"><?= $error['tenloai'] ?? ''?></p>
        <button type="submit" style="background-color: #ccc; color: #000;padding:0 5px;margin:20px 5px" >Sửa</button>
    </form>
    </div>
    </div>
   
   
</body>
</html>