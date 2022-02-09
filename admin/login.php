<?php

include '../db/koneksi.php';
$pdo = pdo_connect();

if(isset($_POST['submit'])){

    // filter data yang diinputkan
    $username = $_POST["username"];
    // enkripsi password
    $password = md5($_POST["password"]);

    $stmt = $pdo->prepare('SELECT * from user WHERE username = ?');
    $stmt->execute([$username]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user){
        // verifikasi password
        if($password == $user["password"]){
            // buat Session
            session_start();
            $user["time"] = date("d-m-Y h:i:s A");
            $_SESSION["user"] = $user;
            header("location:index.php");
        }
    } else {
        echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
    }
    
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../asset/css/main.css">
    <title>Admin Login</title>
</head>
<body>
    <div class="login"> 
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Hi !</p>
            <div class="input-group">
                <input type='text' placeholder="Username" name='username' required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
    </div>
</body>
</html>

