<?php
require_once "db.php";
function gioHang(){
    $sql = "SELECT g.*,tensp,anh,dongia FROM giohang g JOIN hanghoa h ON g.idSP=h.idSP JOIN khachhang k ON g.idKH=k.idKH  ";
    return getData($sql);
}
function addGioHang($idKH,$idSP,$soluong,$tongtien){
    $sql = "INSERT INTO giohang(idKH, idSP,soluong,tongtien) 
    VALUES('$idKH','$idSP','$soluong','$tongtien')";
    return getData($sql);
}
function suaGioHang($soluong,$idSP,$tongtien){
    $sql = "UPDATE giohang SET soluong='$soluong', tongtien='$tongtien' WHERE idSP ='$idSP'";
    return getData($sql);
}
function soLuongGioHang($idSP){
    $sql = "SELECT * FROM giohang WHERE idSP=$idSP ";
    return getData($sql,false);
}
function dongia($idSP){
    $sql = "SELECT dongia FROM hanghoa WHERE idSP=$idSP ";
    return getData($sql,false);
}
function thanhTien(){
    $sql = "SELECT tongtien,soluong FROM giohang";
    return getData($sql);
}
function addChiTietDonHang($thanhtien,$tongsp,$idKH){
    $sql = "INSERT INTO donhang(thanhtien,tongsp,idKH)
    VALUES('$thanhtien','$tongsp','$idKH')";
    return getData($sql);
}
function suaChiTietDonHang($thanhtien,$tongsp,$idKH){
    $sql = "UPDATE donhang SET thanhtien='$thanhtien', tongsp='$tongsp' WHERE idKH ='$idKH'";
    return getData($sql);
}
?>