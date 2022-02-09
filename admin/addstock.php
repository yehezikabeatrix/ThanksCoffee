<?php

    include '../db/koneksi.php';

    session_start();

    var_dump($_POST);
    $nama = $_POST['Nama'];
    $kat = $_POST['kategori'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO product (nama, kategori, harga) VALUES ('".$nama."','".$kat."','".$harga."')";
    mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
    header("location:stock.php");

?>