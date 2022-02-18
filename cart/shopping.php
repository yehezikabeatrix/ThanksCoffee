<?php 
include "../db/koneksi.php";
require_once("validate.php");
include "helper.php";

$dataProductCoffee = mysqli_query($koneksi, "SELECT * FROM product WHERE product.kategori = 'coffee' ORDER BY nama ASC");
$dataProductNonCoffee = mysqli_query($koneksi, "SELECT * FROM product WHERE product.kategori = 'non coffee' ORDER BY nama ASC");
$dataProductSnack = mysqli_query($koneksi, "SELECT * FROM product WHERE product.kategori = 'snack' ORDER BY nama ASC");
$dataProductBeans = mysqli_query($koneksi, "SELECT * FROM product WHERE product.kategori = 'beans' ORDER BY nama ASC");
$dataProductMerch = mysqli_query($koneksi, "SELECT * FROM product WHERE product.kategori = 'merchant' ORDER BY nama ASC");
?>


<div>
        <ul class="menuKategori">
            <li> <a href="#coffee">Coffee</a></li>
            <li> <a href="#non_coffee">Non Coffee</a></li>
            <li> <a href="#snack">Snack</a></li>
            <li> <a href="#beans">Beans</a></li>
            <li> <a href="#merch">Merch</a></li>
        </ul>
</div>


<div class="content">
        <section class="kategori" id="coffee">
            <h2 class="kategoriName" style="top: 20px">Coffee</h2>
            <div class="shop-content">

                <?php while($product_coffee = mysqli_fetch_object($dataProductCoffee)) { ?>

                <div class="product-box">
                    <img class="product-img" src="<?= $product_coffee->gambar ?>" alt="<?= $product_coffee->nama ?> ">
					<h4 class="product-tittle"> <?= $product_coffee->nama ?></h4>
					<span class="product-price">Rp <?= rupiah($product_coffee->harga) ?> </span>
					<a class="add-cart" onclick="addCart(<?= $product_coffee->id_product ?>)">
                        <img src="..\asset\icon\cart.png" width="20"/>
                    </a>
                </div>
                <?php } ?>    
            </div>
        </section>

        <section class="kategori" id="non_coffee">
            <h2 class="kategoriName" style="top: 20px">Non Coffee</h2>
            <div class="shop-content">
            
                <?php while($product_noncoffee = mysqli_fetch_object($dataProductNonCoffee)) { ?>

                <div class="product-box">
                    <img class="product-img" src="<?= $product_noncoffee->gambar ?>" alt="<?= $product_noncoffee->nama ?>">
					<h4 class="product-tittle"><?= $product_noncoffee->nama ?></h4>
					<span class="product-price">Rp <?= rupiah($product_noncoffee->harga) ?></span>
					<a class="add-cart" onclick="addCart(<?= $product_noncoffee->id_product ?>)">
                        <img src="..\asset\icon\cart.png" width="20"/>
                    </a>
                </div>
                <?php } ?>  
            </div>
        </section>

        <section class="kategori" id="snack">
            <h2 class="kategoriName" style="top: 20px">Snack</h2>
            <div class="shop-content">
            
                <?php while($product_snack = mysqli_fetch_object($dataProductSnack)) { ?>

                <div class="product-box">
                    <img class="product-img" src="<?= $product_snack->gambar ?>" alt="<?= $product_snack->nama ?>">
					<h4 class="product-tittle"><?= $product_snack->nama ?></h4>
					<span class="product-price">Rp <?= rupiah($product_snack->harga) ?></span>
					<a class="add-cart" onclick="addCart(<?= $product_snack->id_product ?>)">
                        <img src="..\asset\icon\cart.png" width="20"/>
                    </a>
                </div>
                <?php } ?>  
            </div>
        </section>

        <section class="kategori" id="beans">
            <h2 class="kategoriName" style="top: 20px">Beans</h2>
            <div class="shop-content">
            
                <?php while($product_beans = mysqli_fetch_object($dataProductBeans)) { ?>

                <div class="product-box">
                    <img class="product-img" src="<?= $product_beans->gambar ?>" alt="<?= $product_beans->nama ?>">
					<h4 class="product-tittle"><?= $product_beans->nama ?></h4>
					<span class="product-price">Rp <?= rupiah($product_beans->harga) ?></span>
					<a class="add-cart" onclick="addCart(<?= $product_beans->id_product ?>)">
                        <img src="..\asset\icon\cart.png" width="20"/>
                    </a>
                </div>
                <?php } ?>  
            </div>
        </section>

        <section class="kategori" id="merch">
            <h2 class="kategoriName" style="top: 20px">Merch</h2>
            <div class="shop-content">
            
                <?php while($product_merch = mysqli_fetch_object($dataProductMerch)) { ?>

                <div class="product-box">
                    <img class="product-img" src="<?= $product_merch->gambar ?>" alt="<?= $product_merch->nama ?>">
					<h4 class="product-tittle"><?= $product_merch->nama ?></h4>
					<span class="product-price">Rp <?= rupiah($product_merch->harga) ?></span>
					<a class="add-cart" onclick="addCart(<?= $product_merch->id_product ?>)">
                        <img src="..\asset\icon\cart.png" width="20"/>
                    </a>
                </div>
                <?php } ?>  
            </div>
        </section>
</div>
