<?php 
include "../db/koneksi.php";
include "helper.php";

$dataProductCoffee = mysqli_query($koneksi, "SELECT * FROM product WHERE product.kategori = 'coffee' ORDER BY nama ASC");
$dataProductNonCoffee = mysqli_query($koneksi, "SELECT * FROM product WHERE product.kategori = 'non coffee' ORDER BY nama ASC");
?>


<div>
        <ul class="menuKategori">
            <li> <a href="#coffee">Coffee</a></li>
            <li> <a href="#non_coffee">Non Coffee</a></li>
            <li> <a href="#">Snack</a></li>
            <li> <a href="#">Beans</a></li>
            <li> <a href="#">Merchant</a></li>
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
					<span class="product-price">Rp <?= $product_noncoffee->harga ?></span>
					<a class="add-cart" onclick="addCart(<?= $product_noncoffee->id_product ?>)">
                        <img src="..\asset\icon\cart.png" width="20"/>
                    </a>
                </div>
                <?php } ?>  
            </div>
        </section>
</div>
