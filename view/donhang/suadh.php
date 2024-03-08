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
    <h2>Sua đơn hàng</h2>
    <form action="index.php?url=suadonhang&idDH=<?=$donhang['idDH']?>" method='post'>
    <input type="hidden" name='idDH' value="<?=$donhang['idDH']?>"></div>
        <div>  IDKH
          <select name="idKH" id="">
            <?php foreach($khachhang as $kh):?>
            <option value="<?=$kh['idKH']?>">
                <?=$kh['tenKH']?>
            </option>
            <?php endforeach?>
        </select>
        <div>  Địa chỉ
        <input type="text" name='diachi' value="<?=$donhang['diachi']?>"></div>
        <p style="color:red"><?= $error['diachi'] ?? '' ?></p>
        <div>   Ngày đặt
        <input type="text" name='ngaydat' value="<?=$donhang['ngaydat']?>"></div>
        <p style="color:red"><?= $error['ngaydat'] ?? '' ?></p>
        <div>  Tổng tiền
        <input type="text" name='tongtien' value="<?=$donhang['tongtien']?>"></div>
        <p style="color:red"><?= $error['tongtien'] ?? '' ?></p>
        <div>
        Ghi chú
        <input type="text" name='ghichu' value="<?=$donhang['ghichu']?>"></div>
        <p style="color:red"><?= $error['ghichu'] ?? '' ?></p>
        <div>  Tên Trạng Thái
        <select id="" name='idTT'>
            <?php foreach($trangthai as $tt):?>
            <option value="<?=$tt['idTT']?>" <?=$tt['idTT']== $donhang['idTT']?'selected':''?> >
             <?=$tt['tenTT']?>
            </option>
            <?php endforeach?>
        </select></div>
        <button type="submit">Sua</button>
        <a href="?url=/">Trang quan tri</a>
    </form>
</body>
</html>