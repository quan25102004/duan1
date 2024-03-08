<?php
require_once "model/donhang.php";
function listDonHang()
{
    $donhang = donHang();
    include "view/donhang/donhang.php";
}

function addDonHang()
{
    $error=[];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $ngaydat = $_POST['ngaydat'];
        $diachi = $_POST['diachi'];
        $tongtien = $_POST['tongtien'];
        $ghichu = $_POST['ghichu'];
        $idKH = $_POST['idKH'];
        $idTT = $_POST['idTT'];
        if($ngaydat==""){
            $error['ngaydat']="*Bạn chưa nhập";
        }
        if($diachi==''){
            $error['diachi']="*Bạn chưa chọn file ảnh";
        }
        if($tongtien==''){
            $error['tongtien']="*Bạn chưa nhập";
        }
        if($ghichu==''){
            $error['ghichu']="*Bạn chưa nhập";
        }
        else{
 themDonHang($ngaydat, $diachi, $tongtien, $ghichu, $idKH, $idTT);
        header('location: ?url=donhang');
        die;
        }
       
    }
    $trangthai = donHang_trangThai();
    $khachhang = donHang_khachHang();
    include 'view/donhang/themdh.php';
}
function editDonHang(){
    $error=[];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $idDH= $_POST['idDH'];
        $ngaydat = $_POST['ngaydat'];
        $diachi = $_POST['diachi'];
        $tongtien = $_POST['tongtien'];
        $ghichu = $_POST['ghichu'];
        $idKH = $_POST['idKH'];
        $idTT = $_POST['idTT'];

        if($ngaydat==""){
            $error['ngaydat']="*Bạn chưa nhập";
        }
        if($diachi==''){
            $error['diachi']="*Bạn chưa nhập";
        }
        if($tongtien==''){
            $error['tongtien']="*Bạn chưa nhập";
        }
        if($ghichu==''){
            $error['ghichu']="*Bạn chưa nhập";
        }
        if($idTT==''){
            $error['idTT']="*Bạn chưa nhập";
        }
        if(count($error)==0){
        suaDonHang($idDH, $ngaydat, $diachi, $tongtien, $ghichu, $idKH, $idTT);
        header('location: ?url=donhang');
        die;
        }
    }
    $idDH = $_GET['idDH'];
    $donhang = hienThiEditDonHang($idDH );
    $khachhang = donHang_khachHang();
    $trangthai =donHang_trangThai();
    include 'view/donhang/suadh.php';
}
function deleteDonHang(){
    $idDH =$_GET['idDH'];
    xoaDonHang($idDH);
    header('location: ?url=donhang');
    die;
   }
?>
