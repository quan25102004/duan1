<?php
require_once 'db.php';
function hienThi()
{
   $sql = "SELECT * FROM hanghoa h";
   return getData($sql);
}
function login($tenDN,$matKhau){
   $sql = "SELECT * FROM khachhang WHERE tenDN = '".$tenDN."' AND matKhau = '".$matKhau."'  ";
   return getData($sql);
}
function addLogin($tenDN,$matKhau,$avata,$sdt,$email,$tenKH){
   $sql = "INSERT INTO khachhang(tenKH, email, sdt,avata, tenDN, matKhau) 
   VALUES('$tenKH','$email','$sdt','$avata','$tenDN','$matKhau')";
   return getData($sql);
}
function editMK($idKH,$matKhaumoi){
   $sql = "UPDATE khachhang SET matKhau='$matKhaumoi' WHERE idKH ='$idKH'";
  return getData($sql);
}
// function addBL($idKH)
// {
//     $sql = "SELECT * From khachhang WHERE idKH = $idKH";
//     return getData($sql);
// }
function hienThiTK($idKH){
   $sql = "SELECT * FROM khachhang WHERE idKH = '$idKH'";
   return getData($sql,false);
}
function hienThiSP($idSP){
   $sql = "SELECT * FROM hanghoa WHERE idSP = '$idSP'";
   return getData($sql,false);
}
function suaTK($tenKH,$email,$sdt,$avata,$idKH){
   $sql = "UPDATE khachhang SET tenKH='$tenKH', email='$email',sdt='$sdt',avata='$avata'
   WHERE idKH ='$idKH'";
   return getData($sql);
}
function loc($idLoai){
   $sql = "SELECT * FROM hanghoa h JOIN loai l ON h.idLoai= l.idLoai WHERE l.idLoai = $idLoai";
   return getData($sql);
}
function chiTietSanPham($ma){
   $sql = "SELECT * FROM hanghoa WHERE idSP = $ma ";
   return getData($sql,false);
}

function sanPhamLienQuan($idLoai){
   $sql = "SELECT * FROM hanghoa WHERE idLoai = $idLoai ";
   return getData($sql);
}
function search($key){
   $sql = "SELECT * FROM hanghoa WHERE tenSP LIKE '%$key%'";
   return getData($sql);
}
function binhLuan($ma){
   $sql = "SELECT b.*,k.avata,k.tenKH,h.tensp FROM binhluan b JOIN hanghoa h ON b.idSP = h.idSP JOIN khachhang k ON b.idKH = k.idKH WHERE h.idSP = $ma";
   return getData($sql);
}
function themBinhLuan($noidung,$ngayBL,$idKH,$idSP){
   $sql = "INSERT INTO binhluan(noidung,ngayBL,idKH,idSP) 
   VALUES('$noidung','$ngayBL','$idKH','$idSP')";
   return getData($sql);
}
function phantrang_view($page, $soluongsp)
{
    $batdau = ($page - 1) * $soluongsp;
    $sql = "SELECT h.* FROM hanghoa h LIMIT $soluongsp OFFSET $batdau";
    return getData($sql);
}
?>