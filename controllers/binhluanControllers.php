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
?>