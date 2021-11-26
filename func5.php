<?php
//Reference
function inc($i){
    echo $i = $i + 1;//$i++
}
$i = 10;
// inc($i);

function add(&$str){
    $str = $str." Call by Rederence";
    echo $str;
}
$str = "This is";
add($str);