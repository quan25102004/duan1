<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<style>
    /* .addsp{
    display: flex5

    justify-content:space-between;
} */
</style>

<body>
    <?php
    if (!isset($_COOKIE['user'])) {
        header('location: ?url=login');
        die;
    }
    ?>
    <div>
        <?php require_once "headerAdmin.php" ?>
        <div>
             <h2 style="margin:10px 5px">Thêm sản phẩm:  </h2> <br>
    <form action="index.php?url=themsanpham" method='post' enctype='multipart/form-data'>
        <div style="margin-left: 10px;">
            <div> Tên sản Phẩm:
                <input type="text" name='tensp'>
                <p style="color:red"><?= $error['tensp'] ?? '' ?></p>
            </div>
            <div> IMG:
                <input type="file" name='anh'>
            </div>
            <p style="color:red"><?= $error['anh'] ?? '' ?></p>
            <div> Đơn giá:
                <input type="text" name='dongia'>
                <p style="color:red"><?= $error['dongia'] ?? '' ?></p>
            </div>
            <div>Số lượng:
                <input type="number" name='soluong' min='1' value="1">
                <p style="color:red"><?= $error['soluong'] ?? '' ?></p>
            </div>

            <div>
                Mô tả:
                <input type="text" name='mota'>
                <p style="color:red"><?= $error['mota'] ?? '' ?></p>
            </div>
            <div> Tên loại:
                <select id="" name='idLoai'>
                    <?php foreach ($loai as $l) : ?>
                        <option value="<?= $l['idLoai'] ?>">
                            <?= $l['tenloai'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <button type="submit" name='add' style="background-color: #ccc; color: #000;padding:0 5px;margin:20px 5px">Thêm</button>
        </div>

    </form>
    </div>
     
        </div>
  

</body>

</html>