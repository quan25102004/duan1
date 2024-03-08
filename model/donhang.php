<?php
require_once 'db.php';
function donHang(){
    $sql = "SELECT d.*,t.tenTT FROM donhang d JOIN trangthai t ON d.idTT = t.idTT";
    return getData($sql);
}
function donHang_trangThai(){
    $sql = "SELECT * FROM trangthai";
    return getData($sql);
}
function donHang_khachHang(){
    $sql = "SELECT * FROM khachhang ";
    return getData($sql);
}

function themDonHang( $ngaydat, $diachi, $tongtien, $ghichu, $idKH, $idTT){
        $sql = "INSERT INTO donhang(ngaydat, diachi, tongtien, ghichu, idKH, idTT)
        VALUE( '$ngaydat', '$diachi', '$tongtien', '$ghichu', '$idKH', '$idTT')";
        return getData($sql);
    
}
function suaDonHang($idDH,$ngaydat, $diachi, $tongtien, $ghichu, $idKH, $idTT){
    $sql = "UPDATE donhang
    SET  ngaydat='$ngaydat', diachi='$diachi', tongtien='$tongtien', ghichu='$ghichu', idKH='$idKH', idTT='$idTT'
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