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
    <h2>Thêm Don Hang</h2>
    <form action="index.php?url=themdonhang" method='post'>
        <div> IDKH
            <select name="idKH" id="">
                <?php foreach ($khachhang as $kh) : ?>
                    <option value="<?= $kh['idKH'] ?>">
                        <?= $kh['tenKH'] ?>
                    </option>
                <?php endforeach ?>
            </select>
            <div>
                <p style="color:red"><?= $error['idKH'] ?? '' ?></p>
                Địa chỉ
                <input type="text" name='diachi'>
            </div>
            <p style="color:red"><?= $error['diachi'] ?? '' ?></p>
            <div> Ngày đặt
                <input type="text" name='ngaydat'>
            </div>
            <p style="color:red"><?= $error['ngaydat'] ?? '' ?></p>
            <div> Tổng tiền
                <input type="text" name='tongtien'>
            </div>
            <p style="color:red"><?= $error['tongtien'] ?? '' ?></p>
            <div>
                Ghi chú
                <input type="text" name='ghichu'>
            </div>
            <p style="color:red"><?= $error['ghichu'] ?? '' ?></p>
            <div> Tên trang thái
                <select name="idTT" id="">
                    <?php foreach ($trangthai as $tt) : ?>
                        <option value="<?= $tt['idTT'] ?>">
                            <?= $tt['tenTT'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <p style="color:red"><?= $error['idTT'] ?? '' ?></p>
                <button type="submit">Thêm</button>
    </form>
</body>

</html>