<?php
require_once 'db.php';
function sanpham(){
    $sql = "SELECT h.*,l.tenloai FROM hanghoa h INNER JOIN loai l ON h.idLoai = l.idLoai";
    return getData($sql);
}
function addSanPham($tensp, $anh, $dongia, $soluong, $giamgia,$mota,$idLoai){
      $sql = "INSERT INTO hanghoa(dongia, soluong, tensp, giamgia, idLoai, mota, anh) 
      VALUES('$dongia','$soluong','$tensp','$giamgia','$idLoai','$mota','$anh')";
      return getData($sql);
}
function suaSanPham($tensp, $anh, $dongia, $soluong, $giamgia,$mota,$idSP){
      $sql = "UPDATE hanghoa SET tensp='$tensp', anh='$anh',dongia='$dongia',soluong='$soluong',giamgia='$giamgia',mota='$mota'
       WHERE idSP ='$idSP'";
      return getData($sql);
}
function hienThiSanPham($idSP){
      $sql ="SELECT * FROM hanghoa WHERE idSP=$idSP";
      return getData($sql,false);
  }
  function xoaSanPham($idSP){
      $sql = "DELETE FROM hanghoa WHERE idSP='$idSP'";
      return SQL($sql);
  }
?>