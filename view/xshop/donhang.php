<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    text-decoration: none;
  }

  .body1 {
    margin: auto;
  }

  .name_pro {
    width: 30%;
    text-align: center;
    font-weight: 600;
  }

  .price {
    width: 30%;
    text-align: center;
    font-weight: 600;
  }

  .number {
    width: 30%;
    text-align: center;
    font-weight: 600;
  }

  .sum {
    width: 30%;
    text-align: center;
    font-weight: 600;
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
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<body>
  <?php require_once "header.php"?>
  <div>
    <div class="container">
      <div class="body1" style="width: 70%;">
        <strong style="font-size: 20px;">Đơn hàng của bạn</strong>
        <div style="display: flex;padding-top: 30px;">
          <p class="name_pro">Tên sản phẩm</p>
          <p class="price">Giá tiền</p>
          <p class="number">Số lượng</p>
          <p class="sum">Tổng tiền</p>
        </div>
        <hr>

        <?php foreach($donhang as $d):?>

          
        <?php 
          $chitietdonhang = viewChiTietDonHang($d["idDH"]);

          // print_r($chitietdonhang);
          foreach($chitietdonhang as $c): ?>
            <div style="display: flex;">
            <div class="name_pro">
            <!-- <input type="hidden" name='idKH' value="<?= $g['idKH'] ?>"> -->
            <img style="box-shadow: 0 0 10px rgba(0, 0, 0);margin-bottom:10px;border-radius:10px;"
              src="pulic/img/<?= $c['anh'] ?>" alt width="100px">
            <p name='tensp' style="color: #8e8d8d;"><?= $c['tensp']?></p>
          </div>
          <p class="price"><?= $c['dongia']?></p>
          <p class="number"><?= $c['soluong']?></p>
          <p class="sum"><?= $c['tongtien']?></p>
        </div>
        <hr>
        <?php endforeach ?>
  
        <hr>
        <!-- thongtin -->
        <div style="display: flex;justify-content: space-between;">
          <div class="block1">
            <div style="display: flex;">
              <p style="color: #8e8d8d;font-weight: bold;">Trạng thái đơn hàng: </p><p style="color: red;font-weight: bold;padding-left: 5px;">Đang xử lý</p>
            </div>
            <p style="color: #8e8d8d;font-weight: bold;">Thông tin giao hàng</p>
            <ul>
              <form action="?url=editdiachi" method='post'>
              <li style="font-weight: bold;">Tên người nhận: <i style="color: #8e8d8d;font-weight: 500;"><?=$d['tenKH']?></i></li>
              <li style="font-weight: bold;" >Số điện thoại: <i style="color: #8e8d8d;font-weight: 500;"><?=$d['sdt']?></i></li>
              <li style="font-weight: bold;">Địa chỉ: <i style="color: #8e8d8d;font-weight: 500;"><?=$d['diachi']?></i></li>
            </ul>
              <div class="delete_DH"style="margin-top: 50px;">
                <input  style="padding:2px 5px;background-color: #646a6f;color: #f1f0f0;font-weight: 600;border: #f1f0f0;border-radius: 2px;" type="submit" value="Thay đổi địa chỉ">
              </div>
          </form>
         
              </div>
              <div class="block2" style="width: 45%;margin-top: 5%;margin-bottom: 5%;">
            <div style="padding: 30px; background-color: #f1f0f0;">
                <strong style="font-size: 20px;">Tổng tiền giỏ hàng</strong>
                <div style="margin-top: 10px;"> 
                    <div style="display: flex;justify-content: space-between;">
                        <p>Tổng sản phẩm</p>
                        <p style="color: #f24261;font-weight: bold;"><?= number_format($d['tongsp'], 0, ',', '.') ?></p>
                        
                    </div>
                    <div style="display: flex;justify-content: space-between;">
                        <p>Tổng tiền hàng</p>
                        <p style="color: #f24261;font-weight: bold;"><?= number_format($d['thanhtien'], 0, ',', '.') ?></p>
                    </div>
                    <div style="display: flex;justify-content: space-between;">
                        <p>Thành tiền</p>
                        <p style="color: #f24261;font-weight: bold;"><?= number_format($d['thanhtien'], 0, ',', '.') ?> VNĐ</p>
                    </div>
                </div>

              </div>
            </div>
          </div>
          <?php endforeach?>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- footer -->
  <div style="background-color: #f1f0f0;">
    <div class="container">
      <div class=" d-flex footer w-100 pt-4 ">
        <div style="margin-left: 30px; width: 245px; margin-right: 100px;">
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
  </div>


</body>

</html>