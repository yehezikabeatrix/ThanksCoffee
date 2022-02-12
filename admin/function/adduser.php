<?php

    include '../../db/koneksi.php';
    require_once("../validate.php");

    var_dump($_POST);
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $jabatan = $_POST['jabatan'];

    $foto = $_FILES['avatar']['name'];
    $alamat_foto = "../asset/avatar/".$foto."";

    
    $sql = "INSERT INTO user (username, password, jabatan, avatar) VALUES ('".$username."','".$password."','".$jabatan."','".$alamat_foto."')";
    mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
    header("location:../user.php");

?>