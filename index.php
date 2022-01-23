<?php  include "db/functions.php";?>
<?php require_once("validate.php"); ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ThanksCoffee Website</title>
    <link rel="stylesheet" type="text/css" href="asset\css\style_main.css">
</head>
<body>
    <div id="header-a">
        <header>
            <a href="#" class="logo"> 
                <img src="asset/logo.png" height="90" width="70">
            </a>

            <ul>
                <li> <a href="#promo">Promo</a></li>
                <li> <a href="#">Product</a></li>
                <li> <a href="#">Testimoni</a></li>
                <li> <a href="#" class="active"><b>Buy Now</b></a></li>
            </ul>
        </header>
    </div>
    <section>
        <img src="asset\mainpage\background.png" id="background">
        <img src="asset\mainpage\lengkungan.png" id="lengkungan">
        <img src="asset\mainpage\daun_belakang_kanan.png" id="daun_belakang_kanan">
        <img src="asset\mainpage\daun_belakang_kiri.png" id="daun_belakang_kiri">
        <img src="asset\mainpage\latar_bawah.png" id="latar_bawah">
        <img src="asset\mainpage\podium.png" id="podium">
        <img src="asset\mainpage\kopikanan.png" id="kopikanan">
        <img src="asset\mainpage\kopitengah.png" id="kopitengah">
        <img src="asset\mainpage\kopikiri.png" id="kopikiri">
        <img src="asset\mainpage\coffe_beans.png" id="coffee_beans">
        <img src="asset\mainpage\Spoon.png" id="spoon">
        <img src="asset\mainpage\wooden_bowl.png" id="bowl">

        <img src="asset\mainpage\bayang.png" id="bayang">
        <img src="asset\mainpage\daun_kanan.png" id="daun_kanan">
        <img src="asset\mainpage\daun_kiri.png" id="daun_kiri">
        
        <a href="#" id="btn-buy_now"><b>Buy Now</b></a>
        <a href="#" id="btn-look_around">Look Around
            <img src="asset\icon\arrow-down-outline.png"/>
        </a>

    </section>
    
    <section2 class="banner-container" id="promo">

        <div class="banner">
            <img src="images/banner-1.jpg" alt="">
            <div class="content">
                <h3>special offer</h3>
                <p>upto 45% off</p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <div class="banner">
            <img src="images/banner-2.jpg" alt="">
            <div class="content">
                <h3>limited offer</h3>
                <p>upto 50% off</p>
                <a href="#" class="btn">check out</a>
            </div>
        </div>

        <a class="active" href="logout.php">Logout</a>
    </section2>

    <script>
        let lengkungan = document.getElementById('lengkungan')
        let daun_belakang_kanan = document.getElementById('daun_belakang_kanan')
        let daun_belakang_kiri = document.getElementById('daun_belakang_kiri')
        let podium = document.getElementById('podium')
        let kopikanan = document.getElementById('kopikanan')
        let kopitengah = document.getElementById('kopitengah')
        let kopikiri = document.getElementById('kopikiri')
        let coffee_beans = document.getElementById('coffee_beans')
        let spoon = document.getElementById('spoon')
        let bowl = document.getElementById('bowl')
        let latar_bawah = document.getElementById('latar_bawah')
        let header = document.querySelector('header');

        window.addEventListener('scroll', function(){
            let value = window.scrollY;
            lengkungan.style.top = value * 0.5 + 'px';
            daun_belakang_kanan.style.top = value * 0.1 + 'px';
            daun_belakang_kiri.style.top = value * 0.1 + 'px';
            podium.style.top = value * 0 + 'px';
            kopikanan.style.top = value * 0 + 'px';
            kopikiri.style.top = value * 0 + 'px';
            kopitengah.style.top = value * 0 + 'px';
            coffee_beans.style.top = value * 0 + 'px';
            latar_bawah.style.top = value * 0 + 'px';
            header.style.top = value * 0.5 + 'px';
            daun_kanan.style.marginRight = value * -5 + 'px';
            daun_kanan.style.marginTop = value * 1 + 'px';
            daun_kiri.style.marginRight = value * 5 + 'px';
            daun_kiri.style.marginTop = value * 1 + 'px';
        })

    </script>
</body>
</html>

