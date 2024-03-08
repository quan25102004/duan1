<?php
require_once 'db.php';
function sach(){
    $sql = "SELECT s.*,n.tenNXB FROM sach s JOIN nhaxuatban n ON s.idNXB=n.idNXB";
   return getData($sql);
}
function NXB(){
    $sql = "SELECT * FROM nhaxuatban ";
   return getData($sql);
}
function addSach($tenSach, $anh, $gia, $mota,$idNXB){
    $sql = "INSERT INTO sach(tenSach, anh, gia, mota,idNXB) 
    VALUES('$tenSach','$anh','$gia','$mota','$idNXB')";
    return getData($sql);
}
// function editSach($idSach,$tenSach, $anh, $gia, $mota,$idNXB){
//     $sql = "UPDATE sach SET tenSach='$tenSach',anh='$anh', mota='$mota',gia='$gia',idNXB='$idNXB
//     WHERE idSach ='$idSach'";
//     return getData($sql);
// }
function editSach($idSach,$tenSach, $anh, $gia,$mota, $idNXB){
    $sql = "UPDATE sach SET tenSach='$tenSach', anh='$anh',gia='$gia',mota='$mota',idNXB='$idNXB'
     WHERE idSach ='$idSach'";
    return getData($sql);
}
function indexSach($idSach){
    $sql ="SELECT * FROM sach WHERE idSach=$idSach";
    return getData($sql,false);
}
function deleteSach($idSach){
    $sql = "DELETE FROM sach WHERE idSach='$idSach'";
    return SQL($sql);
}
?>