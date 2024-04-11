<?php
require_once 'db.php';
function hienThiUser(){
    $sql = "SELECT * FROM khachhang";
   return getData($sql);
}
function hienThiTenDN(){
    $sql = "SELECT tenDN FROM khachhang";
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
 function themUser($tenKH,$email,$sdt,$avata,$tenDN,$matKhau,$diachi){
    $sql = "INSERT INTO khachhang(tenKH, email,sdt, avata,tenDN,matKhau, diachi) 
      VALUES('$tenKH','$email','$sdt','$avata','$tenDN','$matKhau','$diachi')";
    return getData($sql);
}

 function editUser($tenKH,$email,$diachi,$sdt,$avata,$idKH,$tenDN,$matKhau){
    $sql = "UPDATE khachhang SET tenKH='$tenKH', email='$email',diachi='$diachi',sdt='$sdt',avata='$avata',tenDN='$tenDN',matKhau='$matKhau'
    WHERE idKH ='$idKH'";
    return getData($sql);
 }
?>