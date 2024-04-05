<?php
require_once 'db.php';
function sanpham()
{
    $sql = "SELECT h.*,l.tenloai FROM hanghoa h INNER JOIN loai l ON h.idLoai = l.idLoai  ORDER BY dongia ";
    return getData($sql);
}
function phantrang_admin($page, $soluongsp)
{
    $batdau = ($page - 1) * $soluongsp;
    $sql = "SELECT h.*, l.tenloai FROM hanghoa h INNER JOIN loai l ON h.idLoai = l.idLoai  ORDER BY dongia LIMIT $soluongsp OFFSET $batdau";
    return getData($sql);
}
function addSanPham($tensp, $anh, $dongia, $soluong,  $mota, $idLoai)
{
    $sql = "INSERT INTO hanghoa(dongia, soluong, tensp,  idLoai, mota, anh) 
      VALUES('$dongia','$soluong','$tensp','$idLoai','$mota','$anh')";
    return getData($sql);
}
function suaSanPham($tensp, $anh, $dongia, $soluong,  $mota, $idSP, $idLoai)
{
    $sql = "UPDATE hanghoa SET tensp='$tensp', anh='$anh',dongia='$dongia',soluong='$soluong',mota='$mota',idLoai='$idLoai'
       WHERE idSP ='$idSP'";
    return getData($sql);
}
function hienThiSanPham($idSP)
{
    $sql = "SELECT * FROM hanghoa WHERE idSP=$idSP";
    return getData($sql, false);
}
function xoaSanPham($idSP)
{
    $sql = "DELETE FROM hanghoa WHERE idSP='$idSP'";
    return SQL($sql);
}
function timkiem($key)
{
    $sql = "SELECT h.*,l.tenloai FROM hanghoa h INNER JOIN loai l ON h.idLoai = l.idLoai WHERE tenSP LIKE '%$key%'";
    return getData($sql);
}
// function phanTrang_admin($page,$limit) {
//     if($page="" || $page =0) $page=1;
//     $offset = ($page - 1) * $limit;
//   $sql = "SELECT * 
//         FROM hanghoa
//         ORDER BY dongia 
//         LIMIT 6 
//         OFFSET 0";
//     return getData($sql);
// }
