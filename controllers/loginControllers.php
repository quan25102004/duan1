<?php
require_once 'model/xshop.php';

function dangnhap()
{
    $erorr = [];
    $erorr['tenDN'] = "";
    $erorr['matKhau'] = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tenDN = $_POST['tenDN'];
        $matKhau = $_POST['matKhau'];
        $check = login($tenDN, $matKhau);
        if ($tenDN == '') {
            $erorr['tenDN'] = '*Bạn chưa nhập tài khoản';
        } else {
            $erorr['tenDN'] = "";
        }
        if ($matKhau == '') {
            $erorr['matKhau'] = '*Bạn chưa nhập mật khẩu';
        } else {
            $erorr['matKhau'] = "";
        }

        if ($erorr['tenDN'] == "" && $erorr['matKhau'] == "") {
            if ($tenDN == $check[0]["tenDN"] && $matKhau == $check[0]["matKhau"] && $check[0]["role"] == 0) {
                $userSerialized = serialize($check);
                setcookie('user', $userSerialized, time() + (30 * 60), '/');
                header('location: ?url=indexTrangChu');
                die;
            } else if ($tenDN == $check[0]["tenDN"] && $matKhau == $check[0]["matKhau"] && $check[0]["role"] == 1) {
                $userSerialized = serialize($check);
                setcookie('user', $userSerialized, time() + (30 * 60), '/');
                header('location: ?url=/');
                die;
            } else {
                $thongBao = '*Tài khoản hoặc mật khẩu không đúng';
                header("location: ?url=login&&thongBao=$thongBao");
            }
        }
    }
    include "view/xshop/login.php";
}
function thoat()
{
    setcookie('user', "", time() - (30 * 60), '/');
    header('location: ?url=login');
    die;
    include "view/xshop/trangchu.php";
}
function dangKy()
{
    $error = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tenDN = $_POST['tenDN'];
        $matKhau = $_POST['matKhau'];
        $r_matKhau = $_POST['r_matKhau'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $tenKH = $_POST['tenKH'];
        $anh = $_FILES['avata'];
        $avata = themFile($anh['name'], $anh['tmp_name']);
        if ($tenDN == '') {
            $error['tenDN'] = "*Bạn chưa nhập";
        }
        if ($matKhau == '') {
            $error['matKhau'] = "*Bạn chưa nhập";
        }
        if ($r_matKhau != $matKhau) {
            $error['r_matKhau'] = "*Bạn nhap sai";
        }
        if ($sdt == '') {
            $error['sdt'] = "*Bạn chưa nhập";
        }
        if ($email == '') {
            $error['email'] = "*Bạn chưa nhập";
        }
        if ($tenKH == '') {
            $error['tenKH'] = "*Bạn chưa nhập";
        }
        if ($avata == '') {
            $error['avata'] = "*Bạn chưa nhập";
        } else {
            addLogin($tenDN, $matKhau, $avata, $sdt, $email, $tenKH);
            header('location: ?url=login');
        }
    }
    include "view/xshop/dangky.php";
}
function editTK()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $idKH = $_POST['idKH'];
        $tenKH = $_POST['tenKH'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $file = $_FILES['avata'];
        $avata = $_POST['avata'];
        if ($file['size'] > 0) {
            $avata = $file['name'];
            $avata = themFile($file['name'], $file['tmp_name']);
        }
        suaTK($tenKH, $email, $sdt, $avata, $idKH);
    }
    $userCookie = $_COOKIE['user'];
    $userLogin = unserialize($userCookie);
    $hienthi = hienThiTK($userLogin[0]["idKH"]);
    include "view/xshop/user.php";
}
function doiMK()
{
    $error = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $idKH = $_POST['idKH'];
        $matKhau = $_POST['matKhau'];
        $matKhaucu = $_POST['matKhaucu'];
        $matKhaumoi = $_POST['matKhaumoi'];
        $r_matKhaumoi = $_POST['r_matKhaumoi'];
        if ($matKhaucu == '') {
            $error['matKhaucu'] = "*Bạn chưa nhập";
        }
        if ($matKhaumoi == '') {
            $error['matKhaumoi'] = "*Bạn chưa nhập";
        }
        if ($r_matKhaumoi == '') {
            $error['r_matKhaumoi'] = "*Bạn chưa nhập";
        }else{
            if ($matKhaucu == $matKhau) {
                if ($r_matKhaumoi == $matKhaumoi) {
                    editMK($idKH,$matKhaumoi);
                    echo "<script> alert ('Đổi mật khẩu thành công')</script>";
                } else {
                    $error['r_matKhaumoi'] = "*Mat khau khong trung khop";
                }
            }
            if($matKhaucu != $matKhau){
                $error['matKhaucu'] = "*Mat khau cua ban khong dung";
            }
        }
    }
    $userCookie = $_COOKIE['user'];
    $userLogin = unserialize($userCookie);
    $hienthi = hienThiTK($userLogin[0]["idKH"]);
    include "view/xshop/doimatkhau.php";
}
