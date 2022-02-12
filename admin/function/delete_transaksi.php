<?php

    include '../../db/koneksi.php';
    require_once("../validate.php");

    var_dump($_POST);
    $id = $_POST['id_transaksi'];
    $sql = "UPDATE transaksi SET status = 2 WHERE id_transaksi = '".$id."'";
    mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));

    $id_p = $_POST['id_pelanggan'];
    $sql = "UPDATE cart SET status = 0 WHERE kode_pelanggan = '".$id_p."'";
    mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));

    header("location:../order.php?delete_success");

?>