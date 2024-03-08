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
    <form action="index.php?url=suatintuc&id_tintuc=<?=$tintuc['id_tintuc']?>" method='post' enctype='multipart/form-data'>
    <input type="hidden" name='id_tintuc' value="<?=$tintuc['id_tintuc']?>"></div>
    <div>  Tieu de
        <input type="text" name='tieu_de' value="<?=$tintuc['tieu_de']?>"></div>
        <p style="color:red"><?= $error['tieu_de'] ?? ''?></p>
        <div>  Noi dung
        <input type="text" name='noi_dung' value="<?=$tintuc['noi_dung']?>"></div>
        <p style="color:red"><?= $error['noi_dung'] ?? ''?></p>
        <div>Hinh anh
        <input type="hidden" name='hinh_anh' value="<?=$tintuc['hinh_anh']?>"></div>
        <input type="file" name='hinh_anh' value=""><img src="pulic/img/<?=$tintuc['hinh_anh']?>" alt="" width="100px"></div>
        <p style="color:red"><?= $error['hinh_anh'] ?? ''?></p>
        <div>  Tên danh muc
        <select id="" name='id_danhmuc'>
            <?php foreach($danhmuc as $d):?>
            <option value="<?=$d['id_danhmuc']?>" <?=$d['id_danhmuc']== $tintuc['id_danhmuc']?'selected':''?>>
             <?=$d['ten_danhmuc']?>
            </option>
            <?php endforeach?>
        </select></div>
        <button type="submit" name='add'>Thêm</button>
        <a href="?url=/">Trang quan tri</a>
    </form>
</body>
</html>