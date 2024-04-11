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
    <div>
        <?php require_once "headerAdmin.php" ?>
        <div style="margin:5px 10px">
            <h3>Sửa đơn hàng</h3>
            <div style="margin-left: 10px;">
                <form action="index.php?url=suadonhang&idDH=<?= $donhang['idDH'] ?>" method='post'>
                    <input type="hidden" name='idDH' value="<?= $donhang['idDH'] ?>">
            </div>
            <div>
                <div style="margin-bottom: 20px;">
                    IDKH
                <select name="idKH" id="">
                    <?php foreach ($khachhang as $kh) : ?>
                        <option value="<?= $kh['idKH'] ?>" <?= $kh['idKH'] == $donhang['idKH'] ? 'selected' : '' ?>>
                            <?= $kh['tenKH'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
                </div> 
                <div> Địa chỉ
                    <input type="text" name='diachi' value="<?= $donhang['diachi'] ?>">
                    <p style="color:red"><?= $error['diachi'] ?? '' ?></p>
                </div>
                <div> Số điện thoại
                    <input type="text" name='sdt' value="<?= $donhang['sdt'] ?>">
                    <p style="color:red"><?= $error['sdt'] ?? '' ?></p>
                </div>
                <div style="margin-bottom: 20px;">
                    Thành tiền
                    <input type="text" name='thanhtien' value="<?= $donhang['thanhtien'] ?>">
                    <p style="color:red"><?= $error['thanhtien'] ?? '' ?></p>
                </div>
                <div> Tổng sản phẩm
                    <input type="text" name='tongsp' value="<?= $donhang['tongsp'] ?>">
                </div>
                <p style="color:red"><?= $error['tongsp'] ?? '' ?></p>
                <div> Tên Trạng Thái
                    <select id="" name='idTT'>
                        <?php foreach ($trangthai as $tt) : ?>
                            <option value="<?= $tt['idTT'] ?>" <?= $tt['idTT'] == $donhang['idTT'] ? 'selected' : '' ?>>
                                <?= $tt['tenTT'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <p style="color:red"><?= $error['idTT'] ?? '' ?></p>
                <button type="submit" style="background-color: #ccc; color: #000;padding:0 5px;margin:20px 5px">Sua</button>
                </form>
            </div>

        </div>
    </div>

</body>

</html>