<?php
require 'model/xshop.php';
require_once 'model/loai.php';

function listTrangChu()
{
    $sanpham = hienThi();
    include "view/xshop/trangchu.php";
}
function indexSanPham()
{
    $sanpham = hienThi();
    $loai = loai();
    include "view/xshop/sanpham.php";
}
function indexLoc()
{
    $idLoai = $_POST['idLoai'];
    $loc = loc($idLoai);
    $sanpham = $loc;
    $loai = loai();
    
    include "view/xshop/sanpham.php";
}
function ctsp()
{
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $noidung = $_POST['noidung'];
        $idKH = $_POST['idKH'];
        $idSP = $_POST['idSP'];
        themBinhLuan($noidung,$idKH,$idSP);
    }
    $ma = $_GET['ma'];
    $idLoai = $_GET['idLoai'];
    $sanpham = sanPhamLienQuan($idLoai);
    $ctsp = chiTietSanPham($ma);
    $binhluan = binhLuan($ma);
    $userCookie = $_COOKIE['user'];
    $userLogin = unserialize($userCookie);
    $hienthiTK = hienThiTK($userLogin[0]["idKH"]);
    // $hienthiSP = hienThiSP($idSP);
    // addBinhLuan($noidung);
    include "view/xshop/chitietsp.php";
}
function keyWord()
{
    $key = $_POST['kyw'];
    $search = search($key);
    $loai = loai();
    $sanpham = $search;
    include "view/xshop/sanpham.php";
}


