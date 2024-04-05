<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<style>
  body {
    background-color: #f5f5f5;
  }

  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  .header {
    align-items: center;
    justify-content: space-between;
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

  .prd {
    display: flex;
    justify-content: space-evenly;
    align-items: initial;
  }

  .sub-prd {
    margin-left: 10%;
  }

  .deal {
    border: 1px solid black;
    background-color: #c40d2e;
    color: #f6f6f6;
    margin-top: 10px;
    width: 100%;
    padding: 15px;
    text-align: center;
    font-size: 20px;
    border-radius: 5px;
  }

  .add {
    border: 1px solid black;
    background-color: #ccc;
    text-decoration: none;
    color: #f6f6f6;
    margin: 0;
    width: 100%;
    padding: 15px;
    text-align: center;
    font-size: 20px;
    border-radius: 5px;
  }

  a {
    text-decoration: none;
  }

  .deal:hover {
    background-color: #83081e;
  }

  .add:hover {
    background-color: #6d6a6a;
  }

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

  .price {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
</style>

<body>
  <?php
  if (!isset($_COOKIE['user'])) {
    header('location: ?url=login');
    die;
  }
  ?>
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
              <li><a href="?url=logout" style="color: #000;text-decoration: none;">Đăng xuất</a></li>
              <li><a href="?url=user" style="color: #000;text-decoration: none;">Tai Khoan</a></li>
              <li><a href="?url=viewdonhang" style="color: #000;text-decoration: none;">Đơn hàng</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div style="margin-bottom:50px;margin-top:30px;">
      <strong style="font-size:35px;">Chi tiết sản phẩm</strong>
      <hr>
    </div>
    <div class="prd" style="background-color: #fff;padding:100px;border-radius:5px;">
      <div class="img-prd">
        <img name='anh' src="pulic/img/<?= $ctsp['anh'] ?>" alt="" style="width: 500px;height: 400px;border-radius:5px;">
      </div>
      <form action="?url=giohang" method='post'>
        <div class="sub-prd">
          <p style="font-size: 40px;font-weight: 600;font-family: 'Roboto', sans-serif;" name='tensp'><?= $ctsp['tensp'] ?></p>
          <strong style="    font-weight: 500;color: #f24261;font-size: 27px;" name='dongia'><?= number_format($ctsp['dongia'], 0, ',', '.') . "VNĐ" ?></strong> <br> <br>
          <p style="color:#828181">Số lượng: <?=$ctsp['soluong']?></p>
          <input class="number" style="width: 50px;" type="number" name="soluong" value="1" min='1' max='<?=$ctsp['soluong']?>'>
          <p style="color: #9d9d9d;margin-top: 19px;">Mô tả</p>
          <p style="color: #9d9d9d;margin-top: 19px;font-family: 'Roboto', sans-serif;" name='mota'><?= $ctsp['mota'] ?></p>
          <input type="hidden" name="idKH" value="<?= $userLogin[0]["idKH"] ?>">
          <input type="hidden" name="idSP" value="<?= $ma ?>">
          <button type="submit" name='addcart' class="add" value="Thêm giỏ hàng">Thêm giỏ hàng</button>
          <!-- <a href="?url=muangay&idSP=<?=$ma?>&idKH=<?=$userLogin[0]["idKH"] ?>"><button type="button" name='order'  class="deal" value="Thêm giỏ hàng">Mua ngay</button></a> -->
      </form>
      <!-- <p>Mua ngay</p> -->

    </div>

  </div>


  <div style="width: 100%; margin-top: 20px;background-color: #fff;padding:10px;border-radius:5px;">
    <p style="font-size: 20px;">ĐÁNH GIÁ SẢN PHẨM</p>

    <div>
      <?php foreach ($binhluan as $b) : ?>

        <div>
          <div style="display: flex;">
            <div style="align-items: center;display: flex;">
              <img src="pulic/img/<?= $b['avata'] ?>" width="40px" height="40px" alt="" style="border-radius: 50%;align-items: center ;">
            </div>
            <div style="color: #828181;padding-left: 10px;">
              <p style="margin:0;color:black;font-weight:450"><?= $b['tenKH'] ?></p>
              <a><?= $b['ngayBL'] ?> |</a> <a><?= $b['tensp'] ?></a>
            </div>
          </div>
          <p style="color: #000;margin-top:16px;width:35%"><?= $b['noidung'] ?></p>
        </div>
        <hr>
      <?php endforeach ?>
    </div>
    <form action="" method="post">
      <input type="hidden" name="idKH" value="<?= $userLogin[0]["idKH"] ?>">
      <input type="hidden" name="idSP" value="<?= $ma ?>">
      <input type="text" name="noidung" style="width: 50%;padding:3px;height:32px;" placeholder="Hãy điền bình luận vào đây">
      <button type='submit' style="width: 10%;padding:2px; margin-top:5px;">Gửi bình luận</button>
    </form>
  </div>
  <p style="font-size: 20px;margin:10px;">SẢN PHẨM LIÊN QUAN</p>
  <div style="width: 100%; margin-top: 20px;padding:10px;border-radius:5px;display:flex">
    <?php foreach ($sanpham as $s) : ?>
      <div style="margin: 7px;background-color: #fff;width:150px">
        <img src="pulic/img/<?= $s['anh'] ?>" alt="" width="150px" height="150px">
        <a class="xemchitiet" href="?url=ctsp&ma=<?= $s['idSP']?>&idLoai=<?=$s['idLoai']?>" style="text-decoration: none; color: #474747;">
          <p style="padding:5px;margin:0;"><?= $s['tensp'] ?></p>
        </a>
          <div style="display:flex">
            <p style="padding:0px 5px;color:#f24261;font-weight:600;"><?= number_format($s['dongia'], 0, ',', '.') ?>VNĐ </p>
            <p class="price" style="color:#afaaaa;padding-left:15px">Đã bán 3</p>
          </div>
  
        </div>
      <?php endforeach ?>
    </div>
  </div> <br>
  <hr>
  <div class="container">
    <div class=" d-flex footer w-100 ">
      <div style="width: 245px; margin-right: 100px;">
        <img src="pulic/img/logo.png" style="width: 150px; height: 50px;margin-bottom: 58px">
        <p class="card-text">Công ty Cổ phần Dự Kim với số đăng ký kinh doanh: 0105777650</p>
        <p class="card-text">Địa chỉ đăng ký: Tổ dxân phố Tháp, P.Đại Mỗ, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam</p>
        <p class="card-text">Số điện thoại: 0243 205 2222/ 090 589 8683</p>
        <img class='img-footer' src="https://tse2.mm.bing.net/th?id=OIP.cOz92GK9w_2_VxUIWBL0ngHaHa&pid=Api&P=0&h=220" alt="">
        <img class='img-footer' src="https://tse2.mm.bing.net/th?id=OIP.4AecT4P_DW-rKATZAZmd1wHaGC&pid=Api&P=0&h=220" alt="">
        <img class='img-footer' src="https://psfonttk.com/wp-content/uploads/2020/09/Instagram-Logo-PNG.png" alt="">
        <img class='img-footer' src="https://tse1.mm.bing.net/th?id=OIP.wkwaDUBXO3d4rtwTwMEVhwHaGF&pid=Api&P=0&h=220" alt="">
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
        <img src="https://pubcdn.ivymoda.com/ivy2/images/appstore.png" alt="">
        <div class="pt-3">

          <img src="	https://pubcdn.ivymoda.com/ivy2/images/googleplay.png" alt="">
        </div>
      </div>
    </div>
  </div>
</body>

</html>