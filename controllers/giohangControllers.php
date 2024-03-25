<?php
require_once "model/giohang.php";

function showGioHang(){
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['addcart'])&&($_POST['addcart'])){
        $idKH= $_POST['idKH'];
        $idSP= $_POST['idSP'];
        $soluong= $_POST['soluong'];
        $sl = soLuongGioHang($idSP);
        if($sl == 0){
            $soluong=  $soluong;
            addGioHang($idKH,$idSP,$soluong);
        }else{
            $soluong=$soluong + $sl['soluong']; 
            suaSoLuong($soluong,$idSP);
        }
        
    }

    }
    // $ma = $_GET['ma'];

    $giohang = gioHang();
    // $soluong = soLuongGioHang($ma);
    include "view/xshop/giohang.php";
}

?>