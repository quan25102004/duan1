<?php
require_once 'db.php';
function hienThiUser(){
    $sql = "SELECT * FROM khachhang ";
   return getData($sql);
}
function xoaUser($idKH){
    $sql = "DELETE FROM khachhang WHERE idKH='$idKH'";
    return SQL($sql);
}
function User($idKH){
    $sql = "SELECT * FROM khachhang WHERE idKH = '$idKH'";
    return getData($sql,false);
 }
 function editUser($tenKH,$email,$sdt,$avata,$idKH){
    $sql = "UPDATE khachhang SET tenKH='$tenKH', email='$email',sdt='$sdt',avata='$avata'
    WHERE idKH ='$idKH'";
    return getData($sql);
 }
?>