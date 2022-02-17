<?php

include 'db/koneksi.php';

if(isset($_POST['submit'])){

    function validate($data){ 
        $data = trim($data); 
        $data = stripslashes($data); 
        $data = htmlspecialchars($data); 
        return $data; 
    }

    $nama = validate($_POST["nama_pelanggan"]);
    $tanggal = date("Y-m-d");

    $check_nama = mysqli_query($koneksi, "SELECT * from pelanggan WHERE nama_pelanggan = '$nama' AND tanggal = '$tanggal'");

    $check = $check_nama->fetch_assoc(); 

    if($check) {
        if ($nama == $check["nama_pelanggan"]){
            $nama_error = "Maaf username $nama sudah ada !";
        }
    } else {
        $stmt = mysqli_query($koneksi, "INSERT INTO pelanggan (nama_pelanggan, tanggal) VALUES('$nama', '$tanggal')");
        
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
            <input type="text" name="nama_pelanggan" placeholder="Masukkan username..." required>
            
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