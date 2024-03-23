<?php
require_once "db.php";
function gioHang($addcart){
    $sql = "SELECT * FROM hanghoa WHERE idSP =$addcart ";
    return getData($sql,false);
}
function addGioHang($idKH,$idSP){
    $sql = "INSERT INTO giohang(idKH, idSP) 
    VALUES('$idKH','$idSP')";
    return getData($sql);
}
 
?>