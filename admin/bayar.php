<?php

    include '../db/koneksi.php';

    session_start();

    var_dump($_POST);
    $id = $_POST["id"];
    $total = $_POST["total"];
    $bayar = $_POST["bayar"];

    $temp = $total-$bayar;
    if($temp>0){
        header('Location:order.php?kurang='.$temp);
    }elseif($temp==0){
        $sql = "UPDATE transaksi SET bayar =".$bayar." , kembalian=".$temp." , status=1 WHERE id_transaksi = ".$id;
        echo $sql;
        mysqli_query($koneksi,$sql);
        header('Location:order.php?status=1');
    }elseif($temp<0){
        $temp = (-1*($temp));
        $sql = "UPDATE transaksi SET bayar =".$bayar." , kembalian=".$temp." , status=1 WHERE id_transaksi = ".$id;
        echo $sql;
        mysqli_query($koneksi,$sql);
        header('Location:order.php?kembali='.$temp);
    }


    //$sql = "INSERT INTO product (nama, kategori, harga) VALUES ('".$nama."','".$kat."','".$harga."')";
    //mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
    

?>