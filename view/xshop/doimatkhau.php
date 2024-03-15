
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*{
padding: 0;
margin: 0;
box-sizing: border-box;
}
.header{
    background-color: #ffffff;
    height: 46px;
    border: 1px solid black;
    display: flex;
}
.login{
    border-radius: 5px;
    border: 1px solid black ;
    width: 30%;
    margin-left: 35%;
    margin-top: 3%;
}
.sub-login{
    margin-left: 25% ;
    margin-top: 5%;
    margin-bottom: 5%;
}
</style>
<body>
    <!-- header -->
        <div class="header">
            <img style="height: 30px; padding-left: 15%;margin-top:7px;;" src="img/logo.png" alt="">
                <a href="" style="color: #000000;text-decoration: none;padding-left: 55%; line-height: 46px;">Bạn cần giúp đỡ gì?</a>
        </div>

    <div style="text-align: center; margin-top: 10px;">
        <a style="color: #000; text-decoration: none; font-size: 55px;" href="">Đổi mật khẩu</a>
    </div >
    <div class='login'>
        <div class="sub-login"> 
            <form action="index.php?url=doimatkhau&idKH=<?= $hienthi['idKH'] ?>" method='post'>
            <input style="width: 60%;height: 23px;" type="hidden" name='idKH' value="<?= $hienthi['idKH'] ?>">
            <input style="width: 60%;height: 23px;" type="hidden" name='matKhau' value="<?= $hienthi['matKhau'] ?>">
                <p style="font-size: 23px; margin-bottom: 5px;">Mật khẩu cũ</p>
                <input style="width: 60%;height: 23px;" type="text" name='matKhaucu'>
                <p style="color:red"><?= $error['matKhaucu'] ?? ''?></p>
                <p style="font-size: 23px;margin-bottom: 5px; margin-top: 6px;">Mật khẩu mới</p>
                <input style="width: 60%;height: 23px;" type="password" name='matKhaumoi'>
                <p style="color:red"><?= $error['matKhaumoi'] ?? ''?></p>
                <p style="font-size: 23px;margin-bottom: 5px; margin-top: 6px;">Nhập lại mật khẩu mới</p>
                <input style="width: 60%;height: 23px;" type="password" name='r_matKhaumoi'>
                <p style="color:red"><?= $error['r_matKhaumoi'] ?? ''?></p>
                <p><a style="font-size: 13px; color: #706f6f; margin-top: 5px;text-decoration: none;">Quên mật khẩu</a></p>
                <div>
                    <button style="margin-top: 15px; background-color: red; border: 1px solid #ccc; border-radius: 5px;" name="dangnhap" type="submit"><p style="padding: 5px;font-size: 15px;color: #ffffff;">Đổi mật khẩu</p></button>
                    <a href="?url=indexTrangChu">Trang chủ</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>