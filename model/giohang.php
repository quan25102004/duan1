<?php
require_once "db.php";
function gioHang($idKH){
    $sql = "SELECT g.*,tensp,anh,dongia FROM giohang g JOIN hanghoa h ON g.idSP=h.idSP JOIN khachhang k ON g.idKH=k.idKH WHERE g.idKH = $idKH ";
    return getData($sql);
}
function  viewGioHang($idKH){
    $sql = "SELECT * FROM giohang WHERE idKH = $idKH";
    return getData($sql,false);
}
function addGioHang($idKH,$idSP,$soluong,$tongtien){
    $sql = "INSERT INTO giohang(idKH, idSP,soluong,tongtien) 
    VALUES('$idKH','$idSP','$soluong','$tongtien')";
    return getData($sql);
}
function suaGioHang($soluong,$idSP,$tongtien,$idKH){
    $sql = "UPDATE giohang SET soluong='$soluong', tongtien='$tongtien' WHERE idSP ='$idSP' AND idKH ='$idKH'";
    return getData($sql);
}
function soLuongGioHang($idSP,$idKH){
    $sql = "SELECT * FROM giohang WHERE idSP=$idSP AND idKH ='$idKH' ";
    return getData($sql,false);
}
function dongia($idSP){
    $sql = "SELECT dongia FROM hanghoa WHERE idSP=$idSP ";
    return getData($sql,false);
}
function thanhTien($idKH){
    $sql = "SELECT * FROM giohang WHERE idKH ='$idKH' ";
    return getData($sql);
}
function addDonHang($thanhtien,$tongsp,$idKH,$sdt,$diachi,$ghichu){
    $sql = "INSERT INTO donhang(thanhtien,tongsp,idKH,sdt,diachi,ghichu)
    VALUES('$thanhtien','$tongsp','$idKH','$diachi','$sdt','$ghichu')";
    return addCTDH($sql);
}
function viewDonHang($idKH){
    $sql = "SELECT * FROM donhang d JOIN khachhang k ON d.idKH = k.idKH  WHERE d.idKH ='$idKH' ";
    return getData($sql);
}
function viewIDDH($idKH){
    $sql = "SELECT idDH FROM donhang WHERE idKH ='$idKH' ";
    return getData($sql);
}
function addChiTietDonHang($idDH,$idSP,$soluong,$tongtien,$idKH){
    $sql = "INSERT INTO chitietdonhang(idDH,idSP,soluong,tongtien,idKH)
    VALUES('$idDH','$idSP','$soluong','$tongtien','$idKH')";
    return addCTDH($sql);
}
function suaDH($thanhtien,$tongsp,$idKH){
    $sql = "UPDATE donhang SET thanhtien='$thanhtien', tongsp='$tongsp' WHERE idKH ='$idKH'";
    return getData($sql);
}
function deleteGioHang($idSP,$idKH){
    $sql = "DELETE FROM giohang WHERE idSP='$idSP' AND idKH ='$idKH'";
    return SQL($sql);
}
function xoaGioHang_sauAddCTDH(){
    $sql = "DELETE FROM giohang ";
    return SQL($sql);
}
function viewChiTietDonHang($idDH){
    $sql = "SELECT*
    FROM chitietdonhang c inner  JOIN donhang dh ON dh.idDH=c.idDH inner join hanghoa on hanghoa.idSP = c.idSP 
WHERE c.idDH = $idDH ";
    return getData($sql);
}
function suaSL_sanpham($soluong,$idSP){
    $sql = "UPDATE hanghoa SET soluong='$soluong' WHERE idSP ='$idSP'";
    return getData($sql);
}
function viewSL_sanpham($idSP){
    $sql = "SELECT soluong FROM hanghoa WHERE idSP=$idSP ";
    return getData($sql,false);
}
function order($idSP){
    $sql = "SELECT * FROM hanghoa WHERE idSP=$idSP ";
    return getData($sql);
}
function them_DonHang($thanhtien,$tongsp){
    $sql = "INSERT INTO donhang(thanhtien,tongsp)
    VALUES('$thanhtien','$tongsp')";
    return addCTDH($sql);
}

?>