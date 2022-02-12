<?php

    include '../../db/koneksi.php';
    require_once("../validate.php");

    var_dump($_POST);
    $id = $_POST['id'];
    $param = $_POST['param'];

    $sql = "UPDATE product SET stock=".$param." WHERE id_product = '".$id."'";
    mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
    header("location:../stock.php?edit_success");

?>