
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
        <a style="color: #000; text-decoration: none; font-size: 55px;" href="">Đăng nhập</a>
    </div >
    <div class='login'>
        <div class="sub-login"> 
            <form action="index.php?url=login" method='post'>
                <p style="font-size: 23px; margin-bottom: 5px;">Tên đăng nhập</p>
                <input style="width: 60%;height: 23px;" type="text" name='tenDN'>
                <p style="color:red"><?php echo $erorr["tenDN"]?$erorr["tenDN"]:""?></p>
                <p style="font-size: 23px;margin-bottom: 5px; margin-top: 6px;">Mật khẩu</p>
                <input style="width: 60%;height: 23px;" type="password" name='matKhau'>
                <p style="color:red"><?php echo $erorr["matKhau"]?$erorr["matKhau"]:""?></p>
                <p style="color:red"><?= $_GET['thongBao'] ?? ''?></p>
                <p><a href="?url=doimatkhau" style="font-size: 13px; color: #706f6f; margin-top: 5px;text-decoration: none;">Quên mật khẩu</a></p>
                <div>
                    <button style="margin-top: 15px; background-color: red; border: 1px solid #ccc; border-radius: 5px;" name="dangnhap" type="submit"><p style="padding: 5px;font-size: 15px;color: #ffffff;">Đăng nhập</p></button>
                    <a href="?url=dangky" style="text-decoration: none; color: rgb(0, 0, 0);margin-left: 5px;" href="">Đăng ký</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>