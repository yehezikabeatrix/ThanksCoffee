<?php

    include '../../db/koneksi.php';
    require_once("../validate.php");

    var_dump($_POST);
    $id = $_POST['id_product'];

    $sql = "DELETE FROM product WHERE id_product = '".$id."'";
    mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
    header("location:../stock.php?delete_success");

?>