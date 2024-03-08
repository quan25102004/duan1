<?php
require_once 'env.php';

function getConnnect(){
    $connect = new PDO(dsn:"mysql:host=" . DBHOST . ";dbname=". DBNAME. ";charset=".DBCHARSET, username: DBUSER, password: DBPASS );
    return $connect;
}

function getData($query, $getAll = true){
    $conn = getConnnect();
    $stmt  =$conn ->prepare(($query));
    $stmt ->execute();
    if($getAll){
        return $stmt->fetchAll();
    }
    return $stmt->fetch();
}

function SQL($query){
    try{
        $conn = getConnnect();
        $stmt  =$conn ->prepare(($query));
        $stmt ->execute();
    }
    catch(PDOException ){
        return false;

    }
    finally{
        unset ($connect);
    }
}
?>