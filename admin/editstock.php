<?php

    include '../db/koneksi.php';

    session_start();

    var_dump($_POST);
    $id = $_POST['id'];
    $param = $_POST['param'];

    $sql = "UPDATE product SET stock=".$param." WHERE id_product = '".$id."'";
    mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
    header("location:stock.php?edit=1");

?>