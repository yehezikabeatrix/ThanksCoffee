<?php

function pdo_connect(){
    $DATABAE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'thankscoffee';
    try {
        return new PDO('mysql:host=' . $DATABAE_HOST .
                        ';dbname=' . $DATABASE_NAME,
                        $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        die('Failed to connect database');
    }
}

?>