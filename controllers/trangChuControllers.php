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
    $sanpham = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['kyw'])) {
        $key = $_POST['kyw'];
        $sotrang = 0;
        $sanpham = timkiem($key);
    } else {
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        if ($page <= 0) {
            $page = 1;
        }
        $soluongsp = 6; 
        $count = count(sanpham($page,$soluongsp)); 
        $sotrang = ceil($count / $soluongsp);
        $sanpham = phantrang_admin($page, $soluongsp);
    }
   
    $loai = loai();
    include "view/xshop/sanpham.php";
}
function indexLoc()
{
    $idLoai = $_POST['idLoai'];
    $loc = loc($idLoai);
    $sanpham = $loc;
    $loai = loai();
    $sotrang = 0;
    include "view/xshop/sanpham.php";
}
function ctsp()
{
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $noidung = $_POST['noidung'];
        $idKH = $_POST['idKH'];
        $idSP = $_POST['idSP'];
        $ngayBL = date_format(date_create(), "Y-m-d");
        themBinhLuan($noidung,$ngayBL,$idKH,$idSP);
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


