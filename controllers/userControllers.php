<?php 
require_once 'model/user.php';  
require_once 'model/user.php';  
require_once 'model/binhluan.php'; 
function taiKhoan(){
    $hienThiUser = hienThiUser();
    include 'view/user/user.php';
}
function deleteTaiKhoan(){
    $idKH =$_GET['idKH'];
    $binhluan = comment();
    if($binhluan['noidung']==''){
        xoaUser($idKH);
        header('location: ?url=taikhoan');
        die;

    }else{
        echo "<script> alert('Hello! I am an alert box!!');</script>";
    }
   }
   function suaUser()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $idKH = $_POST['idKH'];
        $tenKH = $_POST['tenKH'];
        $matKhau = $_POST['matKhau'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $file = $_FILES['avata'];
        $avata = $_POST['avata'];
        if ($file['size'] > 0) {
            $avata = $file['name'];
            $avata = themFile($file['name'], $file['tmp_name']);
        }
        if ($tenKH == '') {
            $error['tenKH'] = "*Bạn chưa nhập";
        }
        if ($email == '') {
            $error['email'] = "*Bạn chưa nhập";
        }
        if ($diachi == '') {
            $error['diachi'] = "*Bạn chưa nhập";
        }
        if ($sdt == '') {
            $error['sdt'] = "*Bạn chưa nhập";
        }
        if ($avata == '') {
            $error['avata'] = "*Bạn chưa nhập";
        }
        if ($matKhau == '') {
            $error['matKhau'] = "*Bạn chưa nhập";
        }else{
            editUser($tenKH, $email,$diachi, $sdt, $avata, $idKH);
            header('location: ?url=taikhoan');
            die;
        }
        
    }
    $idKH = $_GET['idKH'];
    $hienthi = User($idKH);
    // var_dump($hienthi);
    include "view/user/suaUser.php";
}
?>