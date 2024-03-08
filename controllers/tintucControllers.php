<?php
require_once 'model/tintuc.php';
// require 'global.php';
function hienthitintuc(){
    $tintuc = tintuc();
    include "view/tintuc/tintuc.php";
}

function themTinTuc(){
    $error=[];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        // $id_tintuc = $_POST['id_tintuc'];
        $tieu_de = $_POST['tieu_de'];
        $noi_dung = $_POST['noi_dung'];
        $id_danhmuc = $_POST['id_danhmuc'];
        $hinh_anh = $_FILES['hinh_anh'];
        $img = themFile($hinh_anh['name'],$hinh_anh['tmp_name']);
        // if($id_tintuc==""){
        //     $error['id_tintuc']="*Bạn chưa nhập";
        // }
        if($img==''){
            $error['hinh_anh']="*Bạn chưa chọn file ảnh";
        }
        if($tieu_de==''){
            $error['tieu_de']="*Bạn chưa nhập";
        }
        if($noi_dung==''){
            $error['noi_dung']="*Bạn chưa nhập";
        }
        else{
            addTinTuc($tieu_de, $noi_dung, $img, $id_danhmuc);
            header('location: ?url=tintuc');
            die;
        }
}
$danhmuc = danhmuc();
include 'view/tintuc/addtintuc.php';
}
function suaTinTuc(){
    $error=[];
    if($_SERVER['REQUEST_METHOD']=='POST'){
       $id_tintuc = $_POST['id_tintuc'];
       $tieu_de = $_POST['tieu_de'];
       $noi_dung = $_POST['noi_dung'];
       $id_danhmuc = $_POST['id_danhmuc'];
       $file = $_FILES['hinh_anh'];
       $hinh_anh = $_POST['hinh_anh'];
    //    $img = themFile($hinh_anh['name'],$hinh_anh['tmp_name']);
        if($file['size']>0){
            $hinh_anh=$file['name'];
            $hinh_anh = themFile($file['name'],$file['tmp_name']);
        }
        //   if($id_tintuc==""){
        //     $error['id_tintuc']="*Bạn chưa nhập";
        // }
        if($hinh_anh==''){
            $error['hinh_anh']="*Bạn chưa chọn file ảnh";
        }
        if($tieu_de==''){
            $error['tieu_de']="*Bạn chưa nhập";
        }
        if($noi_dung==''){
            $error['noi_dung']="*Bạn chưa nhập";
        }
        if(count($error)==0){
            editTinTuc($id_tintuc,$tieu_de, $noi_dung, $hinh_anh, $id_danhmuc);
            header('location: ?url=tintuc');
            die;
        } 
        
}
$id_tintuc = $_GET['id_tintuc'];
$tintuc = indexTinTuc($id_tintuc);
$danhmuc = danhmuc();
include 'view/tintuc/suatintuc.php';
}
function xoaTinTuc(){
    $id_tintuc =$_GET['id_tintuc'];
    deleteTinTuc($id_tintuc);
    header('location: ?url=tintuc');
    die;
   }
?>