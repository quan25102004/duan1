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

            <form action="index.php?url=suasanpham&idSP=<?= $sanpham['idSP'] ?>" method='post' enctype='multipart/form-data'>
                <input type="hidden" name='idSP' value="<?= $sanpham['idSP'] ?>">

                <h2>Sửa sản phẩm</h2>
                <div> Tên sản Phẩm
                    <input type="text" name='tensp' value="<?= $sanpham['tensp'] ?>">
                </div>
                <p style="color:red"><?= $error['tensp'] ?? '' ?></p>
                <div> IMG
                    <input type="hidden" name='anh' value="<?= $sanpham['anh'] ?>">
                    <input type="file" name='anh' value="<?= $sanpham['anh'] ?>"> <img src="pulic/img/<?= $sanpham['anh'] ?>" width="100px" alt="">
                </div>
                <p style="color:red"><?= $error['anh'] ?? '' ?></p>
                <div> Đơn giá
                    <input type="text" name='dongia' value="<?= $sanpham['dongia'] ?>">
                </div>
                <p style="color:red"><?= $error['dongia'] ?? '' ?></p>
                <div>Số lượng
                    <input type="text" name='soluong' value="<?= $sanpham['soluong'] ?>">
                </div>
                <p style="color:red"><?= $error['soluong'] ?? '' ?></p>
                <div>
                    Mô tả
                    <input type="text" name='mota' value="<?= $sanpham['mota'] ?>">
                </div>
                <p style="color:red"><?= $error['mota'] ?? '' ?></p>
                <div> Tên loại
                    <select id="" name='idLoai'>
                        <?php foreach ($loai as $l) : ?>
                            <option value="<?= $l['idLoai'] ?>" <?= $l['idLoai'] == $sanpham['idLoai'] ? 'selected' : '' ?>>
                                <?= $l['tenloai'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <button type="submit" style="background-color: #ccc; color: #000;padding:0 5px;margin:20px 5px">Sua</button>

            </form>
        </div>
    </div>
  


</body>

</html>