<?php
require_once 'model/loai.php';
function listLoai(){
    $loai=loai();
    include 'view/Loai/loai.php';
}
function addLoai(){
   $error = [];
   if($_SERVER['REQUEST_METHOD']=='POST'){
       $tenloai = $_POST['tenloai'];
       if($tenloai==""){
        $error['tenloai']="*Bạn chưa nhập";
       }else{
           themLoai($tenloai);
           header('location: ?url=loai');
           die;
       }
    
    }
    include 'view/Loai/themloai.php'; 
}
function editLoai(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $idLoai = $_POST['idLoai'];
        $tenloai = $_POST['tenloai'];
        if($tenloai==""){
            $error['tenloai']="*Bạn chưa nhập";
           }else{
               suaLoai($tenloai,$idLoai);
               header('location: ?url=loai');
               die;
           }
    }
    $idLoai = $_GET['idLoai'];
    $loai=hienthiloai($idLoai);
    include 'view/Loai/sualoai.php'; 
}
function deleteLoai(){
    $idLoai =$_GET['idLoai'];
    xoaLoai($idLoai);
    header('location: ?url=loai');
    die;
   }

?>