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
    <h2>Sua san pham</h2>
    <form action="index.php?url=suasach&idSach=<?=$sach['idSach']?>" method='post' enctype='multipart/form-data'>
    <input type="hidden" name='idSach' value="<?=$sach['idSach']?>"></div>
    <div>  Ten Sach
        <input type="text" name='tenSach' value="<?=$sach['tenSach']?>"></div>
        <p style="color:red"><?= $error['tenSach'] ?? ''?></p>
        <div>  Gia
        <input type="text" name='gia' value="<?=$sach['gia']?>"></div>
        <p style="color:red"><?= $error['gia'] ?? ''?></p>
        <div>Hinh anh
        <input type="hidden" name='anh' value="<?=$sach['anh']?>"></div>
        <input type="file" name='anh' value=""><img src="pulic/img/<?=$sach['anh']?>" alt="" width="100px"></div>
        <p style="color:red"><?= $error['anh'] ?? ''?></p>
        <div>  Mo Ta
        <input type="text" name='mota' value="<?=$sach['mota']?>"></div>
        <p style="color:red"><?= $error['mota'] ?? ''?></p>
        <div>  Tên NXB
        <select id="" name='idNXB'>
            <?php foreach($NXB as $n):?>
            <option value="<?=$n['idNXB']?>" <?=$n['idNXB']== $sach['idNXB']?'selected':''?>>
             <?=$n['tenNXB']?>
            </option>
            <?php endforeach?>
        </select></div>
        <button type="submit" name='add'>Sua</button>
        <a href="?url=/">Trang quan tri</a>
    </form>
</body>
</html>