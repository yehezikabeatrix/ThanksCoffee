<?php
    session_start();
    if(!isset($_SESSION['pelanggan'])) header("location:login.php");