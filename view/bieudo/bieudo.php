<?php
$connect = new mysqli('127.0.0.1', 'root', '', 'duanmau');
$query = "SELECT hanghoa.*,hanghoa.tensp,SUM(chitietdonhang.soluong) AS number_sp FROM 
chitietdonhang JOIN hanghoa  
ON hanghoa.idSP= chitietdonhang.idSP 
join donhang on donhang.idDH = chitietdonhang.idDH
-- join trangthai on donhang.idTT = trangthai.idTT
where donhang.idTT = 2
GROUP BY chitietdonhang.idSP";
$result = mysqli_query($connect, $query);
$data = [];
while ($row = mysqli_fetch_array($result)) {
    $data[] = $row;
}
// var_dump($data);
?>
<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['tensp', 'number_sp'],

                <?php
                foreach ($data as $d) {
                    echo "['" . $d['tensp'] . "'," . $d['number_sp'] . "],";
                }
                ?>
            ]);

            var options = {
                title: 'Sản phẩm bán chạy nhất: ',

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

    .sub-nav {
        padding: 3px;
    }

    .sub-nav:hover {
        background-color: rgb(85, 120, 182);
        display: block;
        width: 100%;
    }

    .sub-nav {
        padding-left: 10%;
        padding-top: 5.2%;
        padding-bottom: 4%;
        text-decoration: none;
        list-style: none;

    }

    .logout {
        font-weight: 700;
        padding-left: 10%;
        padding-top: 5px;

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
            <hr>
            <div style="margin-top: 20px;">
                <a class="logout" href="?url=logout"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                    </svg> Đăng xuất</a>

            </div>



        </div>
        <div>
            
            Thống kê doanh số <span id="text-date"></span>
            <div id="myfirstchart" style="height: 250px;"></div>
            <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
        <script>
            $(document).ready(function(){
                thongke();
           var char= new Morris.Area({
                // ID of the element in which to draw the chart.
                element: 'myfirstchart',
                // Chart data records -- each entry in this array corresponds to a point on
                // the chart.
                data: [
                    {year: 2024-5-4, order: 3,sales: 200000},
                    {year: 2024-5-7, order: 4,sales: 700000},
                    {year: 2024-5-8, order: 1,sales: 300000},
                    {year: 2024-5-9, order: 7,sales: 370000},
                ],
                // The name of the data record attribute that contains x-values.
                xkey: 'year',
                // A list of names of data record attributes that contain y-values.
                ykeys: ['order','sales','quatity'],
                // Labels for the ykeys -- will be displayed when you hover over the
                // chart.
                labels: ['Đơn hàng','Doanh thu','Số lượng']
            });
            function thongke(){
                $.ajax({
                    url:'model/thongke.php',
                    method: "POST",
                    dataType:"JSON",

                    success:function(data){
                        char.setData(data);
                    $('#text-date').text(text);
                    }
                });
            }
        });
        </script>
        </div>
       
    </div>
</body>

</html>