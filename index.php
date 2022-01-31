<?php  include "db/koneksi.php";?>
<?php require_once("validate.php"); ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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
                <li> <a href="#product">Product</a></li>
                <li> <a href="#testimonial">Testimoni</a></li>
                <li> <a href="cart/index.php" class="active"><b>Buy Now</b></a></li>
            </ul>
        </header>
    </div>
    <section id="home">
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
        
        <a href="cart/index.php" id="btn-buy_now"><b>Buy Now</b></a>
        <a href="#promo" id="btn-look_around">Look Around
            <img src="asset\icon\arrow-down-outline.png"/>
        </a>
    </section>
    

    <section class="banner-container" id="promo">
        <div class="banner">
            <img src="asset\mainpage\banner-promo1.png" alt="">
            <div class="content">
                <p> Promo Code : </p>
                <a class="coupon" style= "background: #20c5ef; color: #ffff;">THANKSGRAB</a>
            </div>
        </div>

        <div class="banner">
            <img src="asset\mainpage\banner-promo2.png" alt="">
            <div class="content">
                <p> Promo Code : </p>
                <a class="coupon" style= "background: #2e4b31; color: #cb924c;">VIBESWITHME</a></a>
            </div>
        </div>

        <div class="banner">
            <img src="asset\mainpage\banner-promo3.png" alt="">
            <div class="content">
                <p> Promo Code : </p>
                <a class="coupon" style= "background: #ffc000; color: #ffff;">THANKSOVO</a>
            </div>
        </div>

        <div class="banner">
            <img src="asset\mainpage\banner-promo4.png" alt="">
            <div class="content">
                <p style="color: #0e100e;"> Promo Code : </p>
                <a class="coupon" style= "background: #fc4a03; color: #ffff;">SHOPEEDAY</a>
            </div>
        </div>
    </section>

    <section id="product">
        <div class="tittle-text">
            <h2>Our Lovely Coffee</h2>
        </div>
        <div class="product-box">
            <div class="detail-product">
                <h1>Plantation</h1>
                <div class="product-desc">
                    <div class="product-icon">
                        <img src="asset\icon\plantation.png"/>
                    </div>
                    <div class="product-text">
                        <p> Terletak di lereng gunung Argopuro dengan ketinggian di 600m - 900m, 
                            membuat perkebunan ini salah satu penghasil biji kopi terbaik Jawa Timur
                        </p>
                    </div>
                </div>
                <h1>Coffee Beans</h1>
                <div class="product-desc">
                    <div class="product-icon">
                        <img src="asset\icon\coffee-beans.png"/>
                    </div>
                    <div class="product-text">
                        <p> 
                        Kami menyediakan 9 Origin terbaik dari seluruh penjuru Nusantara Indonesia.
                        Diantaranya adalah Java Mocha, Mount Arjuno, Flores Bajawa, Bali Kintamani, Toraja Kalosi, 
                        Java Malabar, Sumatra Gayo, Sumatra Linthong,
                        </p>
                    </div>
                </div>
                <h1>Roasting Process</h1>
                <div class="product-desc">
                    <div class="product-icon">
                        <img src="asset\icon\roast.png"/>
                    </div>
                    <div class="product-text">
                        <p> Proses roasting dilakukan dengan keahlian dan pengontrolan kualitas yang tinggi, 
                            menggunakan mesin roasting terbaik dari Jerman untuk dapat menghasilkan biji kopi 
                            yang konsisten, dengan rasa maupun aroma yang diinginkan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="detail-product-img">
                <img src="asset\mainpage\product-1.png"/>
            </div>
        </div>
    </section>

    <section id="product-slider">
        <div class="bg"></div>
        <img src="asset\mainpage\texture.png" id="texture">
        <div class="product-content">
            <div class="kategori" >
                <h1 id="kategoriName">Coffee</h1>
            </div>
            <div class="kategori-text" id="kategori-text">
                <p>Tersedia berbagai macam olahan kopi. Baik Ekspresso Based ataupun Manual Brew. Kamu bisa pilih sesuai mood kamu. Baik panas atau dingin. Bebas..</p>
            </div>
            <div class="detail-text">
                <div>
                    <h4 style="font-weight: 100">Total Menu : <span id="total-menu" style="opacity: 0.6; font-weight: 600">12 menu</span></h4>
                </div>
                <div>
                    <h4 style="font-weight: 100">Recommended : <span id="best-menu" style="opacity: 0.6; font-weight: 600">Cappucino, Mochacino, Ice Coffee Matcha</span></h4>
                </div>
            </div>
        </div>
        <div class="product-content-img">
            <img src="asset\mainpage\slide-coffee.png" class="kategori-coffee">
        </div>
        <!-- SLIDER LINKS -->
        <div>
            <ul class="thumb">
                <li><p onclick="imgSlider('asset/mainpage/slide-coffee.png');
                       changeColor('#2e4b31');
                       opsiKategori('Coffee');
                       opsiKategoriText('Tersedia berbagai macam olahan kopi. Baik Ekspresso Based ataupun Manual Brew. Kamu bisa pilih sesuai mood kamu. Baik panas atau dingin. Bebas..');
                       opsiTotalMenu('10 menu');
                       opsiBestMenu('Cappucino, Mochacino, Ice Coffee Matcha')">
                       Coffee </p>
                </li>
                <li><p onclick="imgSlider('asset/mainpage/slide-coffee2.png');
                       changeColor('#ffff'); 
                       opsiKategori('Non _Coffee');
                       opsiKategoriText('Selain kopi, kami juga menyediakan varian Milk Based dan Tea Based. Dijamin lambung aman tongkrongan tetap jalan. Saya sarankan pesan yang banyak. Too good...');
                       opsiTotalMenu('9 menu');
                       opsiBestMenu('Fruits Milkshake, Ice Tea 3000')">
                       Non Coffee </p>
                </li>
                <li><p onclick="imgSlider('asset/mainpage/slide-coffee3.png');
                       changeColor('#2e4b31'); 
                       opsiKategori('Snack');
                       opsiKategoriText('Jangan khawatir kalau lapar. Snack kami juga dimasak tidak kalah hebat dengan kopinya. Belum lapar? Snack tipi-tipis juga enak. Minyakk slurr...');
                       opsiTotalMenu('7 menu');
                       opsiBestMenu('Snack Platter, Burger, Nasi padang')">
                       Snack </p>
                </li>
                <li><p onclick="imgSlider('asset/mainpage/slide-coffee4.png');
                       changeColor('#ffff');
                       opsiKategori('Beans');
                       opsiKategoriText('Ya karena kami tempat jual dan seduh kopi, tentu saja kami jual Beans nya. Beans kami dari seluruh pelosok negeri. Dari yang asem sampe yang manis kaya kamu');
                       opsiTotalMenu('9 item');
                       opsiBestMenu('Java Mocha, Mount Arjuno, Flores Bajawa')">
                       Beans </p>
                </li>
                <li><p onclick="imgSlider('asset/mainpage/slide-coffee5.png');
                       changeColor('#2e4b31');
                       opsiKategori('Merch');
                       opsiKategoriText('Ah.. namanya juga usaha. Boleh lah dibeli merch dari kami. Emang ga hitz sih, tapi mahal. Kan warga +62 suka lihat barang mahal. Meski belum tentu dibeli :) ');
                       opsiTotalMenu('5 item');
                       opsiBestMenu('Totebag, Longsleeve')">
                       Merch </p>
                </li>
            </ul>
        </div>
    </section>

    <section class="testimonial_space" id="testimonial">
        <div class="tittle-text">
            <h2>Testimonial</h2>
        </div>
        <div class="testimonial_row">
            <div class="testimonial_col">
                <div class="user">
                    <img src="asset\mainpage\user1.jpg" >
                    <div class="user_info">
                        <h4>Aldien Muskoff</h4>
                        <small>@aldienmuskoff</small>
                    </div>
                </div>
                <p>Sangat bagus sekaliiiii, semuanya senak dan murah murah lagi kan harganyaa... 
                    ah mantab lah pokoknya</p>
            </div>
            <div class="testimonial_col">
                <div class="user">
                    <img src="asset\mainpage\user2.jpg" >
                    <div class="user_info">
                        <h4>Andrew Garfield</h4>
                        <small>@andrewgarfiels</small>
                    </div>
                </div>
                <p>Tempat yang bagus untuk berkumpul dengan teman atau bahkan dengan keluarga. 
                    Kopi enak Konsep wow dengan taman dan taman bermain.</p>      
            </div>
            <div class="testimonial_col">
                <div class="user">
                    <img src="asset\mainpage\user3.jpg" >
                    <div class="user_info">
                        <h4>Matthew Jordan</h4>
                        <small>@matthheww</small>
                    </div>
                </div>
                <p>Tempat yang sangat indah untuk pekerja lepas. Tempat sempurna untuk minum kopi dan mencari inspirasi..</p>
            </div>
            <div class="testimonial_col">
                <div class="user">
                    <img src="asset\mainpage\user4.jpg" >
                    <div class="user_info">
                        <h4>Mc Gregore</h4>
                        <small>@mcgregor_</small>
                    </div>
                </div>
                <p>Thanks Coffee jadi fav aku sekarang, Komposisi rasanya pas, dan saya juga sudah mencoba varian rasa terbarunya 
                    Shoerum regal. Tapi awalnya sempet ragu ini mengandunv alkohol atau tidak, dan ternyata terjawab tidak mengandung 
                    alkohol jadi aman yah guys</p>
            </div>
            <div class="testimonial_col">
                <div class="user">
                    <img src="asset\mainpage\user5.jpg" >
                    <div class="user_info">
                        <h4>Malinka Sinta Dewi</h4>
                        <small>@malinkasinta</small>
                    </div>
                </div>
                <p>The staff are very welcoming and helpful - the place is was busy but with a great atmosphere. 
                    the drinks were very smooth, no bitterness in the coffee and beautifully presented. 
                    It is really worth a visit and we will be back again and again.</p>
            </div>
            <div class="testimonial_col">
                <div class="user">
                    <img src="asset\mainpage\user6.jpg" >
                    <div class="user_info">
                        <h4>Fathurrahman Rifqi</h4>
                        <small>@fathurrrr4</small>
                    </div>
                </div>
                <p>The experience was wonderful from the very beginning. The coffee that I ordered was amazing and was exactly 
                    the taste what I imagined it would look like. I ordered Matcha Latte. It’s so flavorful with milk texture with 
                    a natural sweetness. There's a better way to caffeinate.</p>
            </div>
        </div>
    </section>

    <section id="feedback" class="feedback">
        <div class="tittle-text">
            <h2>Feedback</h2>
        </div>
        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
                <input type="text" placeholder="@instagram">
            </div>

            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
            <div class="place-send">
                <input type="submit" value="Send Feedback" class="btn">
            </div>
        </form>
    </section>

    <section id="footer">
        <div class="footer">
            <div class="footer__addr">
                <h1 class="footer__logo">ThanksCoffee</h1>
                <h2>Contact</h2>
                <address>
                    Ciseeng, Bogor, Indonesia - 0876299901<br> 
                    <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
                </address>
            </div>
            
            <ul class="footer__nav">
                <li class="nav__item">
                    <h2 class="nav__title">Action</h2>
                    <ul class="nav__ul">
                        <li> <a href="#home">Go up</a> </li>
                        <li> <a href="cart/index.php">Buy Now</a> </li>
                        <li> <a href="logout.php">Log Out</a> </li>
                    </ul>
                </li>
                
                <li class="nav__item nav__item--extra">
                    <h2 class="nav__title">Custom Links</h2>
                    <ul class="nav__ul nav__ul--extra">
                        <li> <a href="#promo">Promo</a> </li>
                        <li> <a href="#product">Why Us</a> </li>
                        <li> <a href="#product-slider">Product</a> </li>
                        <li> <a href="#testimonial">Testimoni</a></li>
                        <li> <a href="#feedback">Feedback</a> </li>
                    </ul>
                </li>
                
            </ul>
            
            <div class="footer__addr">
                <h4>Made with ❤ by : </h4>
                <p>Adek Muhammad - @adekmzrk</p>
                <p>Yehezikha Beatrix - @yehezikabeatrix</p>
            </div>
        </div>
    </section>
    <script src="asset\js\main.js" type="text/javascript"></script>
</body>
</html>

