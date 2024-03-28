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
    <form action="index.php?url=suadonhang&idDH=<?= $donhang['idDH'] ?>" method='post'>
        <input type="hidden" name='idDH' value="<?= $donhang['idDH'] ?>"></div>
        <div> IDKH
            <select name="idKH" id="">
                <?php foreach ($khachhang as $kh) : ?>
                    <option value="<?= $kh['idKH'] ?>" <?= $kh['idKH'] == $donhang['idKH'] ? 'selected' : '' ?>>
                        <?= $kh['tenKH'] ?>
                    </option>
                <?php endforeach ?>
            </select>
            <div> Tổng sản phẩm
                <input type="text" name='tongsp' value="<?= $donhang['tongsp'] ?>">
            </div>
            <p style="color:red"><?= $error['tongsp'] ?? '' ?></p>
            <div>
                Thành tiền
                <input type="text" name='thanhtien' value="<?= $donhang['thanhtien'] ?>">
            </div>
            <p style="color:red"><?= $error['thanhtien'] ?? '' ?></p>
            <button type="submit">Sua</button>
            <a href="?url=/">Trang quan tri</a>
    </form>
</body>

</html>