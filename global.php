<?php
const IMG= 'pulic/img/';

function themFile($name, $tmp_name){
    move_uploaded_file($tmp_name,IMG.$name);
    return $name;
}
?>
