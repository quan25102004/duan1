<?php
require_once 'db.php';
function donHang(){
    $sql = "SELECT d.*,k.tenKH,t.tenTT FROM donhang d JOIN khachhang k ON d.idKH = k.idKH JOIN trangthai t ON t.idTT= d.idTT";
    return getData($sql);
}

function donHang_khachHang(){
    $sql = "SELECT * FROM khachhang ";
    return getData($sql);
}
function trangThai(){
    $sql = "SELECT * FROM trangthai ";
    return getData($sql);
}
function themDonHang($tongsp, $thanhtien, $idKH, $idDH){
        $sql = "INSERT INTO donhang(tongsp, thanhtien, idKH, idDH)
        VALUE('$tongsp', '$thanhtien', '$idKH', '$idDH')";
        return getData($sql);
    
}
function suaDonHang($idDH, $tongsp, $thanhtien, $idKH,$idTT,$diachi,$sdt){
    $sql = "UPDATE donhang
    SET  tongsp='$tongsp', thanhtien='$thanhtien', idKH='$idKH', diachi='$diachi', sdt='$sdt',idTT='$idTT'
    WHERE idDH='$idDH'";
    return getData($sql);
}
function hienThiDonHang(){
    $sql = "SELECT * FROM donhang ";
    return getData($sql,false);
}
function hienThiEditDonHang($idDH ){
    $sql = "SELECT * FROM donhang WHERE idDH =$idDH ";
    return getData($sql,false);
}
function xoaDonHang($idDH){
    $sql = "DELETE FROM donhang WHERE idDH='$idDH'";
    return SQL($sql);
}

?>