<?php
require_once "model/giohang.php";

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
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $idKH = $_POST['idKH'];
        $sdt = $_POST['sdt'];
        $diachi = $_POST['diachi'];
        $ghichu = $_POST['ghichu'];
        $thanhtien = 0;
        $tongsp = 0;
        $userCookie = $_COOKIE['user'];
        $userLogin = unserialize($userCookie);
        $tt = thanhTien($userLogin[0]["idKH"]);
        foreach ($tt as $tien) {
            $tongsp += (int)$tien["soluong"];
            $thanhtien += (float)$tien["tongtien"];
        }
        
        $idDH=addDonHang($thanhtien,$tongsp,$idKH,$sdt,$diachi,$ghichu);
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
    header('location: ?url=camon');
    die;

}
function chiTietDonHang(){
    $userCookie = $_COOKIE['user'];
    $userLogin = unserialize($userCookie);
    $donhang = viewDonHang($userLogin[0]["idKH"]);
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