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
    }
    
    .a {
        width: 1320px;
    }
    
    .container {
        align-items: center;
        justify-content: space-between;
    }
    
    .header {
        display: flex;
    }
    
    .main-header {
        background-image: linear-gradient(#f6f6f6, rgb(156, 156, 156), #484848);
    }
    
    .nav-link {
        color: rgb(255, 255, 255);
        font-weight: bold;
    }
    
    .nav-link:hover {
        color: rgb(0, 0, 0);
    }
    
    #header {
        height: 46px;
    }
    
    #nav>li {
        display: block;
    }
    
    #nav li a {
        padding-left: 5px;
        padding-right: 5px;
    }
    
    #nav li {
        display: inline-block;
        line-height: 46px;
        position: relative;
        width: 100%;
    }
    
    #nav>li:hover>a {
        display: inline-block;
        background-color: #ccc;
    }
    
    #nav .subnav {
        display: none;
        position: absolute;
        right: 5px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0);
        padding: 0px
    }
    
    #nav li:hover .subnav {
        display: block;
    }
    
    #nav .subnav li:hover {
        background-color: #ccc;
    }
    /* body */
    
    .name_pro {
        width: 30%;
    }
    
    .price {
        width: 30%;
    }
    
    .number {
        width: 30%;
    }
    
    .sum {
        width: 30%;
    }
    /* footer */
    
    .footer {
        color: black;
    }
    
    .icon {
        border: 1px solid black;
        margin-right: 20px;
        padding: 5px;
        border-radius: 50%;
        color: #fff;
        background-color: rgb(211, 31, 31);
    }
    
    .img-footer {
        width: 30px;
        height: 30px;
        margin-left: 10px;
    }
    
    h3 {
        height: 100px;
    }
</style>

<body>
    <!-- <?php
  if (!isset($_COOKIE['user'])) {
    header('location: ?url=login');
    die;
  }
  ?> -->
    <!-- Header -->
    <div class="main-header">
        <div class="container header">
            <div class="header-logo">
                <a href="?url=indexTrangChu"><img style="height: 30px;" src="pulic/img/logo.png" href="?url=indexTrangChu" alt></a>

            </div>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="?url=indexTrangChu">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?url=indexSanPham">Sản
                            phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?url=gioithieu">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true" href="?url=lienhe">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true" href="?url=giohang">Giỏ hàng</a>
                </li>
            </ul>
            <a href style="color: #000000;text-decoration: none; line-height: 46px;">Bạn
                    cần
                    giúp đỡ gì?</a>

            <div id="header">
                <ul id="nav">
                    <li><img src="https://i.pinimg.com/736x/c6/e5/65/c6e56503cfdd87da299f72dc416023d4.jpg" alt width="30px" style="border-radius: 50%;">
                        <ul class="subnav" style="width: 100px;">
                            <li><a href="?url=logout" style="color: #000;text-decoration: none;">Đăng
                                        xuất</a></li>
                            <li><a href="?url=user" style="color: #000;text-decoration: none;">Tai
                                        Khoan</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- BODY -->
    <div class="container" style="display: flex; align-items: unset;">
        <div class="body1" style="width: 70%; margin-right: 20px;margin-top: 0%;">
            <strong style="font-size: 30px;">Giỏ hàng của bạn</strong>
            <div style="display: flex;padding-top: 30px;">
                <p class="name_pro">Tên sản phẩm</p>
                <p class="price">Giá tiền</p>
                <p class="number">Số lượng</p>
                <p class="sum">Tổng tiền</p>
            </div>
            <hr>
            <div style="display: flex;">

                <div class="name_pro">
                    <img src="/pulic/img/dh1.jpg" alt width="100px">
                    <p>Đông Hồ cao cấp</p>
                </div>
                <p class="price">100.000</p>
                <p class="number">1</p>
                <p class="sum">100.000</p>
                <input type="checkbox">
            </div>

            <hr>
            <div style="display: flex;">
                <div class="name_pro">
                    <img src="/pulic/img/dh1.jpg" alt width="100px">
                    <p>Đông Hồ cao cấp</p>
                </div>
                <p class="price">100.000</p>
                <p class="number">1</p>
                <p class="sum">100.000</p>
                <input type="checkbox">
            </div>
            <hr>
            <div style="display: flex;">
                <div class="name_pro">
                    <img src="/pulic/img/dh1.jpg" alt width="100px">
                    <p>Đông Hồ cao cấp</p>
                </div>
                <p class="price">100.000</p>
                <p class="number">1</p>
                <p class="sum">100.000</p>
                <input type="checkbox">
            </div>

            <hr>
            <div style="display: flex;">
                <div class="name_pro">
                    <img src="/pulic/img/dh1.jpg" alt width="100px">
                    <p>Đông Hồ cao cấp</p>
                </div>
                <p class="price">100.000</p>
                <p class="number">1</p>
                <p class="sum">100.000</p>
                <input type="checkbox">
            </div>
        </div>
        <div class="body2" style="width: 35%;margin-top: 5%;margin-bottom: 5%;">
            <div style="padding: 30px; background-color: #f1f0f0;">
                <strong style="font-size: 20px;">Tổng tiền giỏ hàng</strong>
                <div style="margin-top: 10px;">
                    <div style="display: flex;justify-content: space-between;">
                        <p>Tổng sản phẩm</p>
                        <p>1</p>
                    </div>
                    <div style="display: flex;justify-content: space-between;">
                        <p>Tổng tiền hàng</p>
                        <p>100.000</p>
                    </div>
                    <div style="display: flex;justify-content: space-between;">
                        <p>Thành tiền</p>
                        <p>100.000</p>
                    </div>

                </div>

            </div>
            <div style="width: 100%;background-color: rgb(0, 0, 0);text-align: center;">
            <a href="?url=thanhtoan" style="text-decoration: none;"><p style="color: white;font-weight: 500; font-size: 20px; padding-top: 10px;padding-bottom: 10px;">Đặt mua
                </p></a>
                
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="container">
        <div class=" d-flex footer w-100  ">
            <div style="margin-left: 30px; width: 245px; margin-right: 100px;">
                <img src="pulic/img/logo.png" style="width: 150px; height: 50px;margin-bottom: 58px">
                <p class="card-text">Công ty Cổ phần Dự Kim với số đăng ký kinh doanh: 0105777650</p>
                <p class="card-text">Địa chỉ đăng ký: Tổ dxân phố Tháp, P.Đại Mỗ, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam</p>
                <p class="card-text">Số điện thoại: 0243 205 2222/ 090 589 8683
                </p>
                <img class='img-footer' src="https://tse2.mm.bing.net/th?id=OIP.cOz92GK9w_2_VxUIWBL0ngHaHa&pid=Api&P=0&h=220" alt>
                <img class='img-footer' src="https://tse2.mm.bing.net/th?id=OIP.4AecT4P_DW-rKATZAZmd1wHaGC&pid=Api&P=0&h=220" alt>
                <img class='img-footer' src="https://psfonttk.com/wp-content/uploads/2020/09/Instagram-Logo-PNG.png" alt>
                <img class='img-footer' src="https://tse1.mm.bing.net/th?id=OIP.wkwaDUBXO3d4rtwTwMEVhwHaGF&pid=Api&P=0&h=220" alt>
            </div>
            <div class="card-body me-5">
                <h3>Giới thiệu</h3>
                <p class="card-text">Về IVY moda</p>
                <p class="card-text">Tuyển dụng</p>
                <p class="card-text">Hệ thống cửa hàng</p>
            </div>
            <div class="card-body me-5">
                <h3>Dịch vụ khách hàng</h3>
                <p class="card-text">Dịch vụ điều khoản</p>
                <p class="card-text">Hướng dẫn mua hàng</p>
                <p class="card-text">Chính sách thanh toán</p>
                <p class="card-text">Chính sách đối trả</p>
                <p class="card-text">Chính sách bảo hành</p>
                <p class="card-text">Chính sách vận chuyển</p>
                <p class="card-text">Hệ thống cửa hàng</p>
                <p class="card-text">Q&A</p>
            </div>
            <div class="card-body me-5">
                <h3>Liên hệ</h3>
                <p class="card-text">Hotline</p>
                <p class="card-text">Email</p>
                <p class="card-text">Live chat</p>
                <p class="card-text">Messenger</p>
                <p class="card-text">Facebook</p>
                <p class="card-text">Liên hệ</p>
            </div>
            <div class="card-body ">
                <h3>Download App</h3>
                <img src="https://pubcdn.ivymoda.com/ivy2/images/appstore.png" alt>
                <div class="pt-3">

                    <img src="	https://pubcdn.ivymoda.com/ivy2/images/googleplay.png" alt>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
//ewewwe
