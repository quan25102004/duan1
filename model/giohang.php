<?php
require_once "db.php";
function gioHang(){
    $sql = "SELECT g.*,tensp,anh,dongia FROM giohang g JOIN hanghoa h ON g.idSP=h.idSP JOIN khachhang k ON g.idKH=k.idKH ";
    return getData($sql);
}
function addGioHang($idKH,$idSP,$soluong){
    $sql = "INSERT INTO giohang(idKH, idSP,soluong) 
    VALUES('$idKH','$idSP','$soluong')";
    return getData($sql);
}
function soLuongGioHang($idSP){
    $sql = "SELECT * FROM giohang WHERE idSP=$idSP ";
    return getData($sql,false);
}
function suaSoLuong($soluong,$idSP){
    $sql = "UPDATE giohang SET soluong='$soluong' WHERE idSP ='$idSP'";
    return getData($sql);
}
?>