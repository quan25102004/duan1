<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<body>
    <!-- <?php
            if (!isset($_COOKIE['user'])) {
                header('location: ?url=login');
                die;
            }
            ?> -->
    <!-- Header -->
   
    <div class="container" style="display: flex;justify-content: flex-start;align-items: flex-start;">
        <div style="padding-right: 20%;">

            <form action="index.php?url=suataikhoan&idKH=<?=$hienthi['idKH']?>" method='post' enctype="multipart/form-data">
                <input type="hidden" name="idKH" value="<?=$hienthi['idKH'] ?>">
                <div>
                    <p class="input">Tên khách hàng:</p>
                    <input type="text" name="tenKH" value="<?=$hienthi['tenKH'] ?>">
                    <p style="color:red"><?= $error['tenKH'] ?? ''?></p>
                </div>
                <div>
                    <p class="input">Mật Khẩu:</p>
                    <input type="text"  name="matKhau" value="<?=$hienthi['matKhau'] ?>"> 
                    <p style="color:red"><?= $error['matKhau'] ?? ''?></p>
                </div>
                <div>
                    <p class="input">Email:</p>
                    <input type="text" name="email" value="<?=$hienthi['email'] ?>">
                    <p style="color:red"><?= $error['email'] ?? ''?></p>
                </div>
                <div>
                    <p class="input">Địa chỉ:</p>
                    <input type="text" name="diachi" value="<?=$hienthi['diachi']?>">
                    <p style="color:red"><?= $error['diachi'] ?? ''?></p>
                </div>
                <div>
                    <p class="input">Số điện thoại:</p>
                    <input type="text" name="sdt" value="<?=$hienthi['sdt'] ?>">
                    <p style="color:red"><?= $error['sdt'] ?? ''?></p>
                </div><br>
                <button type="submit" style="background-color: red;color: #fff;">Chỉnh
                    sửa</button>
        </div>
        <div>
            <div>
                <p class="input">Avata:</p>
                <input type="hidden" name="avata" value="<?=$hienthi['avata']?>">
                <input type="file" name="avata" value="<?=$hienthi['avata']?>"><img width="100px" src="pulic/img/<?=$hienthi['avata']?>" alt="">
                <p style="color:red"><?= $error['avata'] ?? ''?></p>
            </div>
        </div>
        </form>


    </div>
    

</body>

</html>