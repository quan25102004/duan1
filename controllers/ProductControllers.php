<?php
require 'model/Product.php';
require_once 'model/loai.php';
// require 'global.php';
function listProduct(){
    $sanpham = sanpham();
    include "view/product/sanpham.php";
}

function addPro(){
    $error=[];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $tensp = $_POST['tensp'];
        $dongia = $_POST['dongia'];
        $soluong = $_POST['soluong'];
        $giamgia = $_POST['giamgia'];
        $mota = $_POST['mota'];
        $idLoai = $_POST['idLoai'];
        $anh = $_FILES['anh'];
        $img = themFile($anh['name'],$anh['tmp_name']);
        if($tensp==""){
            $error['tensp']="*Bạn chưa nhập";
        }
        if($img==''){
            $error['anh']="*Bạn chưa chọn file ảnh";
        }
        if($dongia==''){
            $error['dongia']="*Bạn chưa nhập";
        }
        if($soluong==''){
            $error['soluong']="*Bạn chưa nhập";
        }
         if($giamgia==''){
            $error['giamgia']="*Bạn chưa nhập";
        }
        if($mota==''){
            $error['mota']="*Bạn chưa nhập";
        }
        else{
            addSanPham($tensp, $img, $dongia, $soluong, $giamgia,$mota,$idLoai);
            header('location: ?url=sanpham');
            die;
        }
}
$loai = loai();
include 'view/product/addsp.php';
}
function editPro(){
    $error=[];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $idSP = $_POST['idSP'];
        $tensp = $_POST['tensp'];
        $file = $_FILES['anh'];
        $anh = $_POST['anh'];
        $dongia = $_POST['dongia'];
        $soluong = $_POST['soluong'];
        $giamgia = $_POST['giamgia'];
        $mota = $_POST['mota'];
        if($file['size']>0){
            $anh=$file['name'];
            $anh = themFile($file['name'],$file['tmp_name']);
        }
        if($tensp==""){
            $error['tensp']="*Bạn chưa nhập";
        }
        if($anh==''){
            $error['anh']="*Bạn chưa chọn file ảnh";
        }
        if($dongia==''){
            $error['dongia']="*Bạn chưa nhập";
        }
        if($soluong==''){
            $error['soluong']="*Bạn chưa nhập";
        }
         if($giamgia==''){
            $error['giamgia']="*Bạn chưa nhập";
        }
        if($mota==''){
            $error['mota']="*Bạn chưa nhập";
        }
       if(count($error)==0){

           suaSanPham($tensp, $anh, $dongia, $soluong, $giamgia,$mota,$idSP);
           header('location: ?url=sanpham');
        }
      
        
        
}
$idSP = $_GET['idSP'];
$sanpham = hienThiSanPham($idSP);
$loai = loai();
include 'view/product/editsp.php';
}
function deleteSanPham(){
    $idSP =$_GET['idSP'];
    xoaSanPham($idSP);
    header('location: ?url=sanpham');
    die;
   }
?>