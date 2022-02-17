<?php

function rupiah($val) {
    return number_format($val, 0,',','.');
}

function validate($data){ 
    $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data); 
    return $data; 
}