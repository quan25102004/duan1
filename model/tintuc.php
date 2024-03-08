<?php
require_once 'db.php';
function tintuc(){
    $sql = "SELECT t.*,d.ten_danhmuc FROM tintuc t JOIN danhmuc d ON t.id_danhmuc=d.id_danhmuc";
   return getData($sql);
}
function danhmuc(){
    $sql = "SELECT * FROM danhmuc ";
   return getData($sql);
}
function addTinTuc($tieu_de, $noi_dung, $hinh_anh, $id_danhmuc){
    $sql = "INSERT INTO tintuc(noi_dung, hinh_anh, id_danhmuc, tieu_de) 
    VALUES('$noi_dung','$hinh_anh','$id_danhmuc','$tieu_de')";
    return getData($sql);
}
function editTinTuc($id_tintuc,$tieu_de, $noi_dung, $hinh_anh, $id_danhmuc){
    $sql = "UPDATE tintuc SET tieu_de='$tieu_de', noi_dung='$noi_dung',hinh_anh='$hinh_anh',id_danhmuc='$id_danhmuc'
     WHERE id_tintuc ='$id_tintuc'";
    return getData($sql);
}
function indexTinTuc($id_tintuc){
    $sql ="SELECT * FROM tintuc WHERE id_tintuc=$id_tintuc";
    return getData($sql,false);
}
function deleteTinTuc($id_tintuc){
    $sql = "DELETE FROM tintuc WHERE id_tintuc='$id_tintuc'";
    return SQL($sql);
}
?>