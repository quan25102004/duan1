<?php
require_once 'connection.php';
setcookie('username','',time()-60*60);
header('location: ?url');
die;
?>