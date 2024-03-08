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

    .p {
        padding: 0;
        color: #959595;
    }
    #header{
            height: 46px;
        }
        #nav > li{
            display: block;
        }
        #nav li a{
            padding-left: 5px;
            padding-right: 5px;
        }
        #nav li{
            display: inline-block;
            line-height: 46px;
            position: relative;
        }
        #nav > li:hover > a{
            display: inline-block;
            background-color: #ccc;
        }
        #nav .subnav{
            display: none;
            right: 5px;
            position: absolute;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0);
            padding:0px
            
        }
        #nav li:hover .subnav{
            display: block;
        }
        #nav .subnav li:hover{
            background-color: #ccc;
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
          <a class="nav-link" href="?url=indexSanPham">Sản phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?url=gioithieu">Giới thiệu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-disabled="true" href="?url=lienhe">Liên hệ</a>
        </li>
      </ul>
      <a href style="color: #000000;text-decoration: none; line-height: 46px;">Bạn
        cần
        giúp đỡ gì?</a>
    
      <div id="header">
            <ul id="nav">
                <li><img
                        src="https://i.pinimg.com/736x/c6/e5/65/c6e56503cfdd87da299f72dc416023d4.jpg"alt width="30px" style="border-radius: 50%;"> 
                    <ul class="subnav" style="width: 100px;"> 
                      <li><a href="?url=logout" style="color: #000;text-decoration: none;">Đăng xuất</a></li>
                      <li><a href="?url=user" style="color: #000;text-decoration: none;">Tai Khoan</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
  </div>
    <!-- Body -->
    <div class="container" style="margin-top: 50px;">
        <h2>Kiến thức đồng hồ</h2>
        <hr>
        <div style="display: flex;">
            <div style="width: 45%; margin-right: 10px;">
                <img style="height: 300px;width: 502px;border-radius: 5px;" src="pulic/img/dh1-gioithieu.avif" alt>
                <h5>Thay pin đồng hồ Michael Kors: Giá, địa chỉ, quy trình
                    thay</h5>
                <p class="p">
                    Hiện tại, Đại lý chính hãng Hải Triều đang áp dụng chính
                    sách thay Pin... </p>
            </div>
            <div style="width: 35%;margin-right: 10px;">
                <div>
                    <p class="p">Đồng hồ Quan Store</p>
                    <h6> Pin đồng hồ Citizen Eco-Drive có phải thay không,
                        cách sạc, giá thay</h6>
                </div>
                <div>
                    <p class="p">Đồng hồ Quan Store</p>
                    <h6> Thay pin đồng hồ Tissot 1853 chính hãng: Bảng giá
                        và Quy trình 13 bước tiêu chuẩn quốc tế</h6>
                </div>
                <div>
                    <p class="p">Đồng hồ Quan Store</p>
                    <h6> Bảng giá thay pin đồng hồ Citizen chính hãng, quy
                        trình thay 13 bước tiêu chuẩn quốc tế</h6>
                </div>
                <div>
                    <p class="p">Đồng hồ Quan Store</p>
                    <h6> Tiệm thay pin đồng hồ gần đây uy tín, chính hãng,
                        hậu mãi tốt</h6>
                </div>
            </div>
            <div style="width: 20%;">
                <img style="width: 100%;padding: 5px; border-radius: 15px;" src="pulic/img/dh2-gioithieu.avif" alt> <br>
                <img style="width: 100%;padding: 5px; border-radius: 15px;" src="pulic/img/dh3-gioithieu.avif" alt> <br>
                <img style="width: 100%;padding: 5px; border-radius: 15px;" src="pulic/img/dh4-gioithieu.avif" alt> <br>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 50px;">
        <h2>Kiến thức đồng hồ</h2>
        <hr>
        <div style="display: flex;">
            <div style="width: 45%; margin-right: 10px;">
                <img style="height: 300px;width: 502px;border-radius: 5px;" src="/pulic/img/dh1-gioithieu.avif" alt>
                <h5>Thay pin đồng hồ Michael Kors: Giá, địa chỉ, quy trình
                    thay</h5>
                <p class="p">
                    Hiện tại, Đại lý chính hãng Hải Triều đang áp dụng chính
                    sách thay Pin... </p>
            </div>
            <div style="width: 35%;margin-right: 10px;">
                <div>
                    <p class="p">Đồng hồ Quan Store</p>
                    <h6> Pin đồng hồ Citizen Eco-Drive có phải thay không,
                        cách sạc, giá thay</h6>
                </div>
                <div>
                    <p class="p">Đồng hồ Quan Store</p>
                    <h6> Thay pin đồng hồ Tissot 1853 chính hãng: Bảng giá
                        và Quy trình 13 bước tiêu chuẩn quốc tế</h6>
                </div>
                <div>
                    <p class="p">Đồng hồ Quan Store</p>
                    <h6> Bảng giá thay pin đồng hồ Citizen chính hãng, quy
                        trình thay 13 bước tiêu chuẩn quốc tế</h6>
                </div>
                <div>
                    <p class="p">Đồng hồ Quan Store</p>
                    <h6> Tiệm thay pin đồng hồ gần đây uy tín, chính hãng,
                        hậu mãi tốt</h6>
                </div>
            </div>
            <div style="width: 20%;">
                <img style="width: 100%;padding: 5px; border-radius: 15px;" src="pulic/img/dh2-gioithieu.avif" alt> <br>
                <img style="width: 100%;padding: 5px; border-radius: 15px;" src="pulic/img/dh3-gioithieu.avif" alt> <br>
                <img style="width: 100%;padding: 5px; border-radius: 15px;" src="pulic/img/dh4-gioithieu.avif" alt> <br>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 50px;">
        <h2>Kiến thức đồng hồ</h2>
        <hr>
        <div style="display: flex;">
            <div style="width: 45%; margin-right: 10px;">
                <img style="height: 300px;width: 502px;border-radius: 5px;" src="pulic/img/dh1-gioithieu.avif" alt>
                <h5>Thay pin đồng hồ Michael Kors: Giá, địa chỉ, quy trình
                    thay</h5>
                <p class="p">
                    Hiện tại, Đại lý chính hãng Hải Triều đang áp dụng chính
                    sách thay Pin... </p>
            </div>
            <div style="width: 35%;margin-right: 10px;">
                <div>
                    <p class="p">Đồng hồ Quan Store</p>
                    <h6> Pin đồng hồ Citizen Eco-Drive có phải thay không,
                        cách sạc, giá thay</h6>
                </div>
                <div>
                    <p class="p">Đồng hồ Quan Store</p>
                    <h6> Thay pin đồng hồ Tissot 1853 chính hãng: Bảng giá
                        và Quy trình 13 bước tiêu chuẩn quốc tế</h6>
                </div>
                <div>
                    <p class="p">Đồng hồ Quan Store</p>
                    <h6> Bảng giá thay pin đồng hồ Citizen chính hãng, quy
                        trình thay 13 bước tiêu chuẩn quốc tế</h6>
                </div>
                <div>
                    <p class="p">Đồng hồ Quan Store</p>
                    <h6> Tiệm thay pin đồng hồ gần đây uy tín, chính hãng,
                        hậu mãi tốt</h6>
                </div>
            </div>
            <div style="width: 20%;">
                <img style="width: 100%;padding: 5px; border-radius: 15px;" src="pulic/img/dh2-gioithieu.avif" alt> <br>
                <img style="width: 100%;padding: 5px; border-radius: 15px;" src="pulic/img/dh3-gioithieu.avif" alt> <br>
                <img style="width: 100%;padding: 5px; border-radius: 15px;" src="pulic/img/dh4-gioithieu.avif" alt> <br>
            </div>
        </div>
    </div>
</body>

</html>