<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'thankscoffee';

$koneksi = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME) or die("Koneksi gagal");

function pdo_connect(){
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'thankscoffee';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST .
                        ';dbname=' . $DATABASE_NAME,
                        $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        die('Failed to connect database');
    }
}

?>