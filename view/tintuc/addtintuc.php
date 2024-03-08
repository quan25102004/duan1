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
    <h2>Them tintuc</h2>
    <form action="index.php?url=themtintuc" method='post' enctype='multipart/form-data'>
     
        <div>  Tieu de
        <input type="text" name='tieu_de'></div>
        <p style="color:red"><?= $error['tieu_de'] ?? ''?></p>
        <div>  Noi dung
        <input type="text" name='noi_dung'></div>
        <p style="color:red"><?= $error['noi_dung'] ?? ''?></p>
        <div>Hinh anh
        <input type="file" name='hinh_anh'></div>
        <p style="color:red"><?= $error['hinh_anh'] ?? ''?></p>
        <div>  Tên danh muc
        <select id="" name='id_danhmuc'>
            <option value="" selected disabled></option>
            <?php foreach($danhmuc as $d):?>
            <option value="<?=$d['id_danhmuc']?>">
             <?=$d['ten_danhmuc']?>
            </option>
            <?php endforeach?>
        </select></div>
        <button type="submit" name='add'>Thêm</button>
        <a href="?url=/">Trang quan tri</a>
    </form>
</body>
</html>