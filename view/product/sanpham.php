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

    .mota {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
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

    td,
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
    <div class="admin">
        <!-- header -->
        <div class="list">

            <div>
                <ul class="nav">
                    <div class="sub-nav" style="font-size: 25px;font-style:italic;color:#fff"> 
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                                </svg> DATABASE</li>
                        </div>

                    <div class="sub-nav"> <a href="?url=loai">
                            <li>Quản lý Loại hàng</li>
                        </a></div>
                    <div class="sub-nav"><a href="?url=sanpham">
                            <li>Quản lý Sản Phẩm</li>
                        </a></div>
                    <div class="sub-nav">
                        <a href="?url=donhang">
                            <li>Quản lý Đơn hàng</li>
                        </a>
                    </div>
                    <div class="sub-nav">
                        <a href="?url=taikhoan">
                            <li>Quản lý tài khoản</li>
                        </a>
                    </div>
                    <div class="sub-nav">
                        <a href="?url=binhluan">
                            <li>Quản lý bình luận</li>
                        </a>
                    </div>
                    <div class="sub-nav">
                        <a href="?url=bieudo">
                            <li>Thống kê biểu đồ</li>
                        </a>
                    </div>


                </ul>


            </div>
            <div style="width: 100%;height: 1px;background-color: #fff;"></div>

            <div style="margin-top: 20px;">
    <a class="logout" href="?url=logout"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
        </svg> Đăng xuất</a>

</div>


        </div>
        <div class="db">
    
            <table border="1">
                <tr style="background-color: #e1e1e1;">
                    <div class="m-2">
                        <form action="" method="POST">
                            <input type="text" name="kyw" id="kyw" placeholder="Tìm kiếm" style="padding-left: 5px;">
                        </form>
                    </div> 
                    <th>idHH</th>
                    <th>Tên HH</th>
                    <th>IMG</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Mô tả</th>
                    <th>idLoai</th>

                    <th><a href="?url=themsanpham" style="color:black">Thêm </a></th>


                </tr>
                <?php foreach ($sanpham as $sp) : ?>
                    <tr>
                        <td><?= $sp['idSP'] ?></td>
                        <td><?= $sp['tensp'] ?></td>
                        <td><img src="pulic/img/<?= $sp['anh'] ?>" alt="" width="100px"></td>
                        <td><?= $sp['soluong'] ?></td>
                        <td><?= $sp['dongia'] ?></td>
                   
                        <td>
                            <p class="mota"><?= $sp['mota'] ?></p>
                        </td>
                        <td><?= $sp['tenloai'] ?></td>
                        <td>
                            
                            <a href="?url=suasanpham&idSP=<?= $sp['idSP'] ?>"> <svg xmlns="http://www.w3.org/2000/svg" style="color: green;" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                            </svg></a>
                            <a onclick="confirm('ban muon xoa chu')" href="?url=xoasanpham&idSP=<?= $sp['idSP'] ?>"><svg style="color: rgb(244, 8, 8);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                </svg></a>
                        </td>
                    </tr>
                <?php endforeach ?>
                <a href=""></a>
            </table>
            
            <div style="margin-top: 15px;">
                          <?php
    for ($i = 1; $i <= $sotrang; $i++) {
    echo "<a style='color: black;padding:5px 10px;border: 1px solid #ccc;margin: 10px;'' href='?url=sanpham&page=$i'>$i</a>";
    }
    ?>  
            </div>
        </div>

        </div>
</body>

</html>