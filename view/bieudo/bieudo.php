<?php
$connect = new mysqli('127.0.0.1', 'root', '','duanmau');
$query = "SELECT loai.*,COUNT(hanghoa.idLoai) AS number_loai FROM hanghoa JOIN loai  ON hanghoa.idLoai= loai.idLoai GROUP BY hanghoa.idLoai";
$result = mysqli_query($connect,$query);
$data=[];
while($row = mysqli_fetch_array($result)){
$data[] = $row;

}
// var_dump($data);
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['tenloai', 'number_loai'],
        
     <?php
     foreach($data as $d){
        echo "['".$d['tenloai']. "',".$d['number_loai']."],";
     }
     ?>
        ]);

        var options = {
          title: 'Biểu đồ: ',

          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
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
     
        font-weight: 600;
    }
    .sub-nav{
        padding: 3px;
    }

    .sub-nav:hover {
        background-color: rgb(85, 120, 182);
        display: block;
        width: 100%;
    }
    .sub-nav{
    padding-left: 10%;
    padding-top: 5.2%;
    padding-bottom: 4%;
    text-decoration: none;
    list-style: none;
    
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
        </div>
         <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    </div>
  </body>
</html>