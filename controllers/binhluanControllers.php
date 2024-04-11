<?php
require_once 'model/binhluan.php';

function hienThiBinhLuan(){
    $binhluan = comment();
    include 'view/binhluan/binhluan.php';
}
function xoaBinhLuan(){
    $idBL =$_GET['idBL'];
    deleteComment($idBL);
    header('location: ?url=binhluan');
    die;
   }
   function timKiem_bl_admin()
{
    $key = $_POST['kyw'];
    $search = timkiem_bl($key);
    $binhluan = $search;
    include 'view/binhluan/binhluan.php';
}
?>