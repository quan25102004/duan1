<?php
require_once 'db.php';
function loai(){
    $sql ='SELECT * FROM loai';
    return getData($sql);
}
function hienthiloai($idLoai){
    $sql ="SELECT * FROM loai WHERE idLoai=$idLoai";
    return getData($sql,false);
}
function themLoai($tenloai){
  $sql="INSERT INTO loai(tenloai) VALUE ('$tenloai')";
    return getData($sql);
}
function suaLoai($tenloai, $idLoai){
    $sql = "UPDATE loai SET tenloai='$tenloai' WHERE idLoai ='$idLoai'";
    return getData($sql);
}
function xoaLoai($idLoai){
    $sql = "DELETE FROM loai WHERE idLoai='$idLoai'";
    return SQL($sql);
}

function sanpham_loai_delete($idLoai)
{
    $sql = "SELECT * FROM hanghoa where idLoai = $idLoai";
    return getData($sql);
}
?>