
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
    }

    .admin {
        display: flex;
    }

    .list {
        height: 700px;
        width: 30%;
        background-color: rgb(59, 155, 228);
    }

    .db {
        width: 70%;

    }

    th {
        width: 150px;
        text-align: center;
    }

    td,tr {
        text-align: center;
        border: 1px solid black;
        
    }

    a {
        color: white;
        text-decoration: none;
    }
    .nav {
        display: block;
        text-align: center;
        font-weight: 600;
    }

    .sub-nav:hover {
        background-color: rgb(85, 120, 182);
        width: 100%;
        display: block;
    }
</style>

<body>
<?php
   if(!isset($_COOKIE['user'])){
    header('location: ?url=login');
    die;
}
  ?>
    <div class="admin">
        <!-- header -->
        <div class="list">
            <a href="?url=logout"> <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 5px;" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                </svg>Đăng xuất</a>
            <div>
                <ul class="nav">
                    <div class="sub-nav"> <a href="?url=loai">
                            <li>Loại hàng</li>
                        </a></div>
                    <div class="sub-nav"><a href="?url=sanpham">
                            <li>Sản Phẩm</li>
                        </a></div>
                    <div class="sub-nav">
                        <a href="?url=donhang">
                            <li>Đơn hàng</li>
                        </a>
                    </div>
                    <div class="sub-nav">
                        <a href="?url=taikhoan">
                            <li>Tai khoan</li>
                        </a>
                    </div>
                    <div class="sub-nav">
                        <a href="?url=binhluan">
                            <li>Binh luan</li>
                        </a>
                    </div>
                    <div class="sub-nav">
                        <a href="?url=tintuc">
                            <li>Tin tuc</li>
                        </a>
                    </div>
                    <div class="sub-nav">
                        <a href="?url=bieudo">
                            <li>Bieu do</li>
                        </a>
                    </div>


                </ul>


            </div>
        </div>
        <div class="db">
            <table border="1">
                <tr style="background-color: antiquewhite;">

                    <th>idBL</th>
                    <th>Noi dung</th>
                    <th>Ngay binh luan</th>
                    <th>idKH</th>
                    <th>idSP</th>
                    
                </tr>
                <?php foreach ($binhluan as $b) : ?>
                    <tr>

                        <td><?= $b['idBL'] ?></td>
                        <td><?= $b['noidung'] ?></td>
                        <td><?= $b['ngayBL'] ?></td>
                        <td><?= $b['idKH'] ?></td>
                        <td><?= $b['idSP'] ?></td>
                        <td>
                            <a onclick="return confirm('ban muon xoa chu')"  href="?url=xoabinhluan&idBL=<?=$b['idBL']?>"><svg style="color: rgb(244, 8, 8);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                </svg></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>

        </div>
    </div>
</body>

</html>