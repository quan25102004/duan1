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
    <h2>Them san pham</h2>
    <form action="index.php?url=themsanpham" method='post' enctype='multipart/form-data'>
        <div>  Tên sản Phẩm
        <input type="text" name='tensp'></div>
        <p style="color:red"><?= $error['tensp'] ?? ''?></p>
        <div>  IMG
        <input type="file" name='anh'></div>
        <p style="color:red"><?= $error['anh'] ?? ''?></p>
        <div>  Đơn giá
        <input type="text" name='dongia'></div>
        <p style="color:red"><?= $error['dongia'] ?? ''?></p>
        <div>Số lượng
        <input type="text" name='soluong'></div>
        <p style="color:red"><?= $error['soluong'] ?? ''?></p>
        <div>  giảm giá
        <input type="text" name='giamgia'></div>
        <p style="color:red"><?= $error['giamgia'] ?? ''?></p>
        <div>
        Mô tả
        <input type="text" name='mota'></div>
        <p style="color:red"><?= $error['mota'] ?? ''?></p>
        <div>  Tên loại
        <select id="" name='idLoai'>
            <?php foreach($loai as $l):?>
            <option value="<?=$l['idLoai']?>">
             <?=$l['tenloai']?>
            </option>
            <?php endforeach?>
        </select></div>
        <button type="submit" name='add'>Thêm</button>
        <a href="?url=/">Trang quan tri</a>
    </form>
</body>
</html>