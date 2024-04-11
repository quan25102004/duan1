<?php
require_once "model/giohang.php";
require_once "model/donhang.php";
function showGioHang()
{
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['addcart']) && ($_POST['addcart'])) {
            $idKH = $_POST['idKH'];
            $idSP = $_POST['idSP'];
            $soluong = $_POST['soluong'];
            $sl = soLuongGioHang($idSP, $idKH);
            $dongia = dongia($idSP);

            if ($sl == 0) {
                $soluong =  (int)$soluong;
                $tongtien = (int)$soluong * (float)$dongia[0];
                addGioHang($idKH, $idSP, $soluong, $tongtien);
            } else {
                $soluong = (int)$soluong + (float)$sl['soluong'];
                $tongtien = (int)$soluong * (float)$dongia[0];

                suaGioHang($soluong, $idSP, $tongtien, $idKH);
                // var_dump($dongia);
                // var_dump($soluong);
            }
            $thanhtien = 0;
        $tongsp = 0;
        $tong = 0;
        $userCookie = $_COOKIE['user'];
        $userLogin = unserialize($userCookie);
        $giohang = gioHang($userLogin[0]["idKH"]);
        foreach ($giohang as $hang) {
            $tong += (int)$hang;
            $tongsp += (int)$hang["soluong"];
            $thanhtien += (float)$hang["tongtien"];
        }
    }
    
} else {
        $thanhtien = 0;
        $tongsp = 0;
        $tong = 0;
        $userCookie = $_COOKIE['user'];
        $userLogin = unserialize($userCookie);
        $giohang = gioHang($userLogin[0]["idKH"]);
        foreach ($giohang as $hang) {
            $tong += (int)$hang;
            $tongsp += (int)$hang["soluong"];
            $thanhtien += (float)$hang["tongtien"];
        }
    }
    $userCookie = $_COOKIE['user'];
    $userLogin = unserialize($userCookie);
    $giohang = gioHang($userLogin[0]["idKH"]);
    $gh = viewGioHang($userLogin[0]["idKH"]);
    include "view/xshop/giohang.php";
}
function xoaGioHang()
{
    $idKH = $_GET['idKH'];
    $idSP = $_GET['idSP'];
    deleteGioHang($idSP, $idKH);
    header('location: ?url=giohang');
    die;
}
function updateDonHang()
{
    $error=[];
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $idKH = $_POST['idKH'];
        $sdt = $_POST['sdt'];
        $diachi = $_POST['diachi'];
        $ghichu = $_POST['ghichu'];
        $ngaydat = date_format(date_create(), "Y-m-d");
        $thanhtien = 0;
        $tongsp = 0;
        $userCookie = $_COOKIE['user'];
        $userLogin = unserialize($userCookie);
        $tt = thanhTien($userLogin[0]["idKH"]);
        foreach ($tt as $tien) {
            $tongsp += (int)$tien["soluong"];
            $thanhtien += (float)$tien["tongtien"];
        }
        $idDH=addDonHang($thanhtien,$tongsp,$idKH,$sdt,$diachi,$ghichu,$ngaydat);
        foreach ($tt as $tien) {
            $idSP = $tien['idSP'];
            $soluong = (int)$tien['soluong'];
            $tongtien = (float)$tien['tongtien'];
            addChiTietDonHang($idDH,$idSP,$soluong,$tongtien,$idKH);
        }
        foreach ($tt as $tien) {
            $idSP = $tien['idSP'];
            $sl=viewSL_sanpham($idSP);
            $soluong = $sl['soluong']-(int)$tien['soluong'];
            suaSL_sanpham($soluong,$idSP);
        }
        
    }
    xoaGioHang_sauAddCTDH();
    include "view/xshop/thanhtoanatmmomo.php";

}
function chiTietDonHang(){
    $idDH = $_GET['idDH'];
    $userCookie = $_COOKIE['user'];
    $userLogin = unserialize($userCookie);
    $donhang = viewDonHang($idDH);
    $chitietdonhang = viewChiTietDonHang($idDH);
    
    include "view/xshop/donhang.php";
}
function thanhToan_GioHang(){
    $thanhtien = 0;
    $tongsp = 0;
    $tong = 0;
    $userCookie = $_COOKIE['user'];
    $userLogin = unserialize($userCookie);
    $giohang = gioHang($userLogin[0]["idKH"]);
    foreach ($giohang as $hang) {
        $tongsp += (int)$hang["soluong"];
        $thanhtien += (float)$hang["tongtien"];
    }
    // var_dump($giohang);
    // var_dump($thanhtien);
    include "view/xshop/thanhtoan.php";
}
function xoasDonHang_xshop(){
    
   $error="";
    $idDH =$_GET['idDH'];
    $idTT =$_GET['idTT'];
    if(isset($_GET['huy']) && $idTT == 0){
        deletechitietdonhang($idDH);
        deleteDonHang_xshop($idDH);
        header('location: ?url=table_donhang');
        die;
    }else{
        $error="<p style='color:#fff; background-color: rgb(219 71 71);padding: 5px 20px;margin-top:10px;'>* Bạn không thể hủy đơn này</p>";
        $donhang = donHang();
        include_once "view/xshop/table_donhang.php";
    }
    
   }
function tang_giam_sl(){
        if(isset($_GET['idGH']) && ($_GET['idGH']>0)){
            $idGH = $_GET['idGH'];
            if(isset($_GET['idSP']) && $_GET['idSP'] != ""){
                $idSP = $_GET['idSP'];
                $idKH = $_GET['idKH'];
                $dongia = dongia($idSP);
                $soluong = $_GET['soluong'];
                if($soluong == 1){
                    $soluong =1;
                    if(isset($_GET['tang'])){
                        $soluong = $soluong +1;
                    }
                }else{
                    if(isset($_GET['tang'])){
                        $soluong = $soluong +1;
                    }
                    if(isset($_GET['giam'])){
                        $soluong = $soluong - 1;
                    }
                }
                $tongtien = (int)$soluong * (float)$dongia[0];
                suaGioHang($soluong, $idSP, $tongtien, $idKH);
            }
        } 
        header('location: ?url=giohang');
    die;
   }
   function thanhtoanmomo(){
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['momo']) && ($_POST['momo'])) {
            $diachi = $_POST['diachi'];
            $sdt = $_POST['sdt'];
            $ghichu = $_POST['ghichu'];
        }
    }
    $thanhtien = 0;
    $tongsp = 0;
    $tong = 0;
    $userCookie = $_COOKIE['user'];
    $userLogin = unserialize($userCookie);
    $giohang = gioHang($userLogin[0]["idKH"]);
    foreach ($giohang as $hang) {
        $tongsp += (int)$hang["soluong"];
        $thanhtien += (float)$hang["tongtien"];
    }
    // var_dump($giohang);
    // var_dump($thanhtien);
    include "view/xshop/thanhtoanatmmomo.php";
   }