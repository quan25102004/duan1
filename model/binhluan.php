<?php
require_once 'db.php';
function comment(){
    $sql = "SELECT * FROM binhluan ";
   return getData($sql);
}
function deleteComment($idBL){
    $sql = "DELETE FROM binhluan WHERE idBL='$idBL'";
    return SQL($sql);
}
function timkiem_bl($key)
{
    $sql = "SELECT * FROM binhluan WHERE noidung LIKE '%$key%'";
    return getData($sql);
}
?>