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
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Arial';
        text-decoration: none;
    }

    .admin {
        display: flex;
    }

    .list {
        height: 1000px;
        width: 30%;
        background-color: rgb(40 64 81);
    }

    .db {
        width: 70%;
    }
    
    th {
        width: 150px;
        text-align: center;
    }
    
    td{

        border: 2.5px solid #ccc;
    }
    tr {
        text-align: center;
        border: 1px solid black;

    }

    a {
        color: white;
        text-decoration: none;
    }

    .nav {
        display: block;

        font-weight: 600;
    }

    .sub-nav:hover {
        background-color: rgb(85, 120, 182);
        width: 100%;
        display: block;
    }

    .sub-nav {
        padding-left: 10%;
        padding-top: 4%;
        padding-bottom: 4%;
    }


    .logout {
        font-weight: 700;
        padding-left: 10%;

    }
</style>

<body>
    <?php
    if (!isset($_COOKIE['user'])) {
        header('location: ?url=login');
        die;
    }
    ?>

    <!-- header -->


    <?php require_once 'header.php' ?>



    <div class="db m-auto">
        <p style="font-size: 30px;text-align: center;font-weight: 600;">Đơn hàng</p>
        <p><?= $error ?? "" ?></p>
        <table border="1">
            <tr style="background-color: #e1e1e1;">
                <th>Mã đơn hàng</th>
                <th style="width: 200px;">Tên khách hàng</th>
                <th>Địa chỉ</th>
                <th>Ngày đặt</th>
                <th>Tổng tiền</th>
                <th>Ghi chú</th>
                <th>Trạng thái</th>
                <th></th>

            </tr>
            <?php foreach ($donhang as $dh) : ?>
                <tr>
                    <td><?= $dh['idDH'] ?></td>
                    <td><?= $dh['idKH'] ?></td>

                    <td><?= $dh['diachi'] ?></td>
                    <td><?= $dh['ngaydat'] ?></td>
                    <td><?= $dh['thanhtien'] ?></td>
                    <td><?= $dh['ghichu'] ?></td>
                    <td><?= $dh['tenTT'] ?></td>
                    <td>
                        <div style="background-color: #000; width: 150px;margin: 5px;border-radius: 3px;">

                            <a style=" text-decoration: none;color:#fff" href="?url=viewdonhang&idDH=<?= $dh['idDH'] ?>">Chi tiết đơn hàng</a>
                        </div>
                        
                        <a href="?url=xoadonhang_xshop&idDH=<?=$dh['idDH']?>&idTT=<?=$dh['idTT']?>&huy" name='huydonhang'><input style="padding:2px 5px;background-color: #646a6f;color: #f1f0f0;font-weight: 600;border: #f1f0f0;border-radius: 2px;width: 150px;" type="submit" name="huydonhang" value="Hủy đơn hàng"></a>
                    </td>
                </tr>
            <?php endforeach ?>
          
        </table>
    </div>

    <div class="mt-4">

        <?php require_once 'footer.php' ?>
    </div>
    </div>
</body>

</html>