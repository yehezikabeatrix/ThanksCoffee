<?php

include '../db/koneksi.php';
$pdo = pdo_connect();

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $username = $_POST["username"];
    // enkripsi password
    $password = md5($_POST["password"]);
    $jabatan = $_POST["jabatan"];

    $stmt = $pdo->prepare('INSERT INTO user VALUE(?, ?, ?)');
    $stmt->execute([$username, $password, $jabatan]);
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../asset/css/main.css">
    <title>REGISTER</title>
</head>
<body>
    <div class="login" > 
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type='text' placeholder="Username" name='username' required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <input type="jabatan" placeholder="Jabatan" name="jabatan" required>
            </div>
            <div class="input-group">
                <button name="register" class="btn">Register</button>
            </div>
        </form>
    </div>
    </div>
</body>
</html>