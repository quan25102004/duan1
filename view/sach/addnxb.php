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
    <form action="index.php?url=themsach" method='post' enctype='multipart/form-data'>
     
        <div>  Ten Sach
        <input type="text" name='tenSach'></div>
        <p style="color:red"><?= $error['tenSach'] ?? ''?></p>
        <div>  Gia
        <input type="text" name='gia'></div>
        <p style="color:red"><?= $error['gia'] ?? ''?></p>
        <div>Anh
        <input type="file" name='anh'></div>
        <p style="color:red"><?= $error['anh'] ?? ''?></p>
        <div> Mo ta
        <input type="text" name='mota'></div>
        <p style="color:red"><?= $error['mota'] ?? ''?></p>
        <div>  Tên NXB
        <select id="" name='idNXB'>
            <?php foreach($NXB as $n):?>
            <option value="<?=$n['idNXB']?>">
             <?=$n['tenNXB']?>
            </option>
            <?php endforeach?>
        </select></div>
        <button type="submit" name='add'>Thêm</button>
        <a href="?url=/">Trang quan tri</a>
    </form>
</body>
</html>