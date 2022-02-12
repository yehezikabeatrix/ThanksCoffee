<?php 
 
session_start();
unset($_SESSION["pelanggan"]);
 
echo '<script type="text/javascript">alert("Logout Berhasil");window.location=\'index.php\';</script>';
 
?>