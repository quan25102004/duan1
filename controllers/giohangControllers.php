<?php
require_once "model/giohang.php";

function showGioHang(){
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['addcart'])&&($_POST['addcart'])){
        $idKH= $_POST['idKH'];
        $idSP= $_POST['idSP'];
        $sp=addGioHang($idKH,$idSP);
    }
    }
    $addcart = $_GET['addcart'];
    $giohang = gioHang($addcart);
    include "view/xshop/giohang.php";
}

   
?>