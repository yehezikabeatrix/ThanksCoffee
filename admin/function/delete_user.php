<?php

    include '../../db/koneksi.php';
    require_once("../validate.php");

    var_dump($_POST);
    $id = $_POST['username'];
    $sql = "DELETE FROM user WHERE username = '$id'";
    mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));

    header("location:../user.php?delete_success");

?>