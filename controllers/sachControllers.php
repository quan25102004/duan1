<?php
require_once 'model/sach.php';
// require 'global.php';
function hienthiSach(){
    $sach = sach();
    include "view/sach/sach.php";
}

function themSach(){
    $error=[];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        // $id_tintuc = $_POST['id_tintuc'];
        $tenSach = $_POST['tenSach'];
        $gia = $_POST['gia'];
        $mota = $_POST['mota'];
        $idNXB = $_POST['idNXB'];
        $anh = $_FILES['anh'];
        $img = themFile($anh['name'],$anh['tmp_name']);
        // if($id_tintuc==""){
        //     $error['id_tintuc']="*Bạn chưa nhập";
        // }
        if($img==''){
            $error['anh']="*Bạn chưa chọn file ảnh";
        }
        if($tenSach==''){
            $error['tenSach']="*Bạn chưa nhập";
        }
        if($gia==''){
            $error['gia']="*Bạn chưa nhập";
        }
        if($mota==''){
            $error['mota']="*Bạn chưa nhập";
        }
        else{
            addSach($tenSach, $img, $gia, $mota,$idNXB);
            header('location: ?url=sach');
            die;
        }
}
$NXB = NXB();
include 'view/sach/addnxb.php';
}
function suaSach(){
    $error=[];
    if($_SERVER['REQUEST_METHOD']=='POST'){
       $idSach = $_POST['idSach'];
       $tenSach = $_POST['tenSach'];
        $gia = $_POST['gia'];
        $mota = $_POST['mota'];
        $idNXB = $_POST['idNXB'];
       $file = $_FILES['anh'];
       $anh = $_POST['anh'];
    //    $img = themFile($hinh_anh['name'],$hinh_anh['tmp_name']);
        if($file['size']>0){
            $anh=$file['name'];
            $anh = themFile($file['name'],$file['tmp_name']);
        }
        //   if($id_tintuc==""){
        //     $error['id_tintuc']="*Bạn chưa nhập";
        // }
        if($anh==''){
            $error['anh']="*Bạn chưa chọn file ảnh";
        }
        if($tenSach==''){
            $error['tenSach']="*Bạn chưa nhập";
        }
        if($gia==''){
            $error['gia']="*Bạn chưa nhập";
        }
        if($mota==''){
            $error['mota']="*Bạn chưa nhập";
        }
        if(count($error)==0){
            editSach($idSach,$tenSach, $anh, $gia, $mota,$idNXB);
            header('location: ?url=sach');
            die;
        } 
        
}
$idSach = $_GET['idSach'];
$sach = indexSach($idSach);
$NXB = NXB();
include 'view/sach/editnxb.php';
}
function xoaSach(){
    $idSach =$_GET['idSach'];
    deleteSach($idSach);
    header('location: ?url=sach');
    die;
   }
?>