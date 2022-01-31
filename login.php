<?php

include 'db/koneksi.php';
$pdo = pdo_connect();

if(isset($_POST['submit'])){

    $nama = $_POST["nama_pelanggan"];
    $tanggal = date("Y-m-d");

    $check_nama = $pdo->prepare('SELECT * from pelanggan WHERE nama = ? AND tanggal = ?');
    $check_nama->execute([$nama, $tanggal]);

    $check = $check_nama->fetch(PDO::FETCH_ASSOC);

    if($check) {
        if ($nama == $check["nama"]){
            $nama_error = "Maaf... nama sudah ada";
            /* echo '<script type="text/javascript">alert("Use another name");window.location=\'login.php\';</script>'; */
        }
    } else {
        $stmt = $pdo->prepare('INSERT INTO pelanggan (nama) VALUES(:nama)');
        $stmt->execute(array(':nama' => $nama));
        
        // buat Session
        session_start();
        $_SESSION['pelanggan'] = $nama;
        header("location:index.php");
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hi !</title>
    <link rel="stylesheet" type="text/css" href="asset/css/style_opening.css">
</head>
<body>
    <form action="" method="POST" id="tambahPelanggan"> 

        <div class="tambahPelanggan">
            <input type="text" name="nama_pelanggan" placeholder="Masukkan nama ..." required>
            
            <?php if (isset($nama_error)) : ?>
                <div class="alert">
                    <p> <?php echo $nama_error; ?> <p>
                </div>
            <?php endif ?>

            <button name="submit" class="add-icon"> 
                <img src="asset\icon\plus.png" width="30"/> 
            </button>
        </div>
    </form>
    <div class="little-container">
        <div class="little" style="--i:1;"> <img src="asset/coffee/coffee1.png" width="300"></div>
        <div class="little" style="--i:2;"> <img src="asset/coffee/coffee2.png" width="250"> </div>
        <div class="little" style="--i:3;"> <img src="asset/coffee/coffee3.png" width="110"> </div>
        <div class="little" style="--i:4;"> <img src="asset/coffee/coffee4.png" width="55"> </div>
        <div class="little" style="--i:5;"> <img src="asset/coffee/coffee5.png" width="45"> </div>
        <div class="little" style="--i:6;"> <img src="asset/coffee/coffee6.png" width="25"> </div>
        <div class="little" style="--i:7;"> <img src="asset/coffee/ice1.png" width="110"> </div>
        <div class="little" style="--i:8;"> <img src="asset/coffee/ice2.png" width="110"> </div>
        <div class="little" style="--i:9;"> <img src="asset/coffee/ice3.png" width="90"> </div>
        <div class="little" style="--i:10;"> <img src="asset/coffee/ice4.png" width="125"> </div>
        <div class="little" style="--i:11;"> <img src="asset/coffee/coffee7.png" width="25"> </div>
        <div class="little" style="--i:12;"> <img src="asset/coffee/ice5.png" width="100"> </div>
    </div>
</body>
</html> 

<!--2e4b31----->
<!--cb924c----->