<?php
require_once "model/donhang.php";
function listDonHang()
{
    $donhang = donHang();
    include "view/donhang/donhang.php";
}
function editDonHang(){
    $error=[];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $idDH= $_POST['idDH'];
      
        $tongsp = $_POST['tongsp'];
        $thanhtien = $_POST['thanhtien'];
        $diachi = $_POST['diachi'];
        $idKH = $_POST['idKH'];
   

        if($tongsp==""){
            $error['tongsp']="*Bạn chưa nhập";
        }
        if($diachi==""){
            $error['diachi']="*Bạn chưa nhập";
        }
        if($thanhtien==''){
            $error['thanhtien']="*Bạn chưa nhập";
        }
        if($idKH==''){
            $error['idKH']="*Bạn chưa nhập";
        }
        if(count($error)==0){
        suaDonHang($idDH,$tongsp,$thanhtien, $idKH);
        header('location: ?url=donhang');
        die;
        }
    }
    $idDH = $_GET['idDH'];
    $donhang = hienThiEditDonHang($idDH );
    $khachhang = donHang_khachHang();
    include 'view/donhang/suadh.php';
}
function deleteDonHang(){
    $idDH =$_GET['idDH'];
    xoaDonHang($idDH);
    header('location: ?url=donhang');
    die;
   }
?>
