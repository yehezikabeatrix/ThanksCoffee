<?php

    include '../../db/koneksi.php';
    require_once("../validate.php");

    var_dump($_POST);
    $nama = $_POST['Nama'];
    $kat = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];

    $foto = $_FILES['foto']['name'];
    $alamat_foto = "../asset/product/".$foto."";

    

    $sql = "INSERT INTO product (nama, kategori, harga, gambar, stock) VALUES ('".$nama."','".$kat."','".$harga."','".$alamat_foto."','".$stock."')";
    mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
    header("location:../stock.php");

?>