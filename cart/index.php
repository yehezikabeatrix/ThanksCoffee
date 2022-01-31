<?php  include "../db/koneksi.php";?>
<?php require_once("validate.php"); ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Cart ThanksFuel</title>
    <link rel="stylesheet" type="text/css" href="..\asset\css\style_cart.css">
</head>
<body>
    <div id="header-a">
        <header>
            <a href="#" class="logo"> 
                <img src="../asset/logo.png" height="90" width="70">
            </a>
            <ul>
                <li> <a href="../index.php" id="backHome" >Back Home</a></li>
                <li> <a href=" " class="menu" id="menuShopping" >Shopping</a></li>
                <li> <a href=" " id="menuCart" class="menu active">
                    <img src="..\asset\icon\cart.png" width="20"/> 
                    (<span id="countCart"></span>)</a>
                </li>
            </ul>
        </header>
    </div>

    <div id="konten"> </div>

    <div id="footer">
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
                        <li> <a href="#">Buy Now</a> </li>
                        <li> <a href="../logout.php">Log Out</a> </li>
                    </ul>
                </li>
                
                <li class="nav__item nav__item--extra">
                    <h2 class="nav__title">Custom Links</h2>
                    <ul class="nav__ul nav__ul--extra">
                        <li> <a href="../index.php#promo">Promo</a> </li>
                        <li> <a href="../index.php#product">Why Us</a> </li>
                        <li> <a href="../index.php#product-slider">Product</a> </li>
                        <li> <a href="../index.php#testimonial">Testimoni</a></li>
                        <li> <a href="../index.php#feedback">Feedback</a> </li>
                    </ul>
                </li>
                
            </ul>

            <div class="footer__addr">
                <h4>Made with ❤ by : </h4>
                <p>Adek Muhammad - @adekmzrk</p>
                <p>Yehezikha Beatrix - @yehezikabeatrix</p>
            </div>
        </div>
    </div>

    <script src="../asset/js/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#konten').load('shopping.php');
            
            $('.menu').click(function (e) { 
                e.preventDefault();

                var menu = $(this).attr('id');

                if(menu == "menuShopping" ){
                    $('#konten').load('shopping.php');
                    countCart();
                } else if (menu == "menuCart" ){
                    $('#konten').load('cart.php');
                    countCart();
                }    
            });

            countCart();

        });

        function countCart(){
            $.ajax({
                type: "GET",
                url: "proses-cart.php",
                dataType: "JSON",
                success: function (response) {
                    console.log(response);

                    $("#countCart").text("");
                    $("#countCart").text(response);
                }
            });
        }

        function addCart($id){
            $.ajax({
                type: "POST",
                url: "proses-cart.php",
                data: {"proses" : "add", "id" : $id},
                dataType: "JSON",
                success: function (response) {
                    console.log(response);
                    countCart();
                }
            });
            countCart();
        }

        function deleteCart($id){
            $.ajax({
                type: "POST",
                url: "proses-cart.php",
                data: {"proses" : "delete", "id" : $id},
                dataType: "JSON",
                success: function (response) {
                    console.log(response);
                    countCart();
                    if(responce.message == "success"){
                        alert("Delete Success");
                    } else {
                        alert("Delete Failed");
                    }
                }
            });
            countCart();
            $('#konten').load('cart.php');
        }

    </script>

</body>
</html>
