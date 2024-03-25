<?php
require_once "controllers/ProductControllers.php";
require_once "controllers/LoaiControllers.php";
require_once "controllers/donHangControllers.php";
require_once "controllers/trangChuControllers.php";
require_once "controllers/loginControllers.php";
require_once "controllers/userControllers.php";
require_once "controllers/binhluanControllers.php";
require_once "controllers/giohangControllers.php";
require_once "global.php";
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case "/":
        listLoai();
        deleteLoai();
        break;
    case "sanpham":
        listProduct();
        break;
    case "loai":
        listLoai();
        break;
    case "donhang":
        listDonHang();
        break;
    case "themloai":
        addLoai();
        break;
    case "themsanpham":
        addPro();
        break;
    case "themdonhang":
        addDonHang();
        break;
    case "sualoai":
        editLoai();
        break;
    case "suasanpham":
        editPro();
        break;
    case "suadonhang":
        editDonHang();
        break;
    case "xoaloai":
        deleteLoai();
        break;
    case "xoasanpham":
        deleteSanPham();
        break;
    case "xoadonhang":
        deleteDonHang();
        break;
    case "indexTrangChu":
        listTrangChu();
        break;
    case "indexSanPham":
        indexSanPham();
        break;
    case "login":
        dangnhap();
        break;
    case "dangky":
        dangKy();
        break;
    case "doimatkhau":
        doiMK();
        break;
    case "logout":
        thoat();
        break;
    case "indexLoc":
        indexLoc();
        break;
    case "ctsp":
        ctsp();
        // them_bl();
        break;
        // case "thembinhluan":
        //     // ctsp();
        //     them_bl();
        //     break;
    case "key":
        keyWord();
        break;
    case "lienhe":
        include 'view/xshop/lienhe.php';
        break;
    case "gioithieu":
        include 'view/xshop/gioithieu.php';
        break;
    case "bieudo":
        include 'view/bieudo/bieudo.php';
        break;
    case "user":
        editTK();
        break;
    case "taikhoan":
        taiKhoan();
        break;
    case "xoataikhoan":
        deleteTaiKhoan();
        break;
    case "binhluan":
        hienThiBinhLuan();
        break;
    case "xoabinhluan":
        xoaBinhLuan();
        break;
    case "suataikhoan":
        suaUser();
        break;
    case "camon":
        include_once "view/xshop/camon.php";
        break;
    case "thanhtoan":
        include_once "view/xshop/thanhtoan.php";
        break;
    case "giohang":
        showGioHang();
        break;
}
