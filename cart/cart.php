<?php 
include "../db/koneksi.php";
require_once("validate.php");
include "helper.php";

$nama = $_SESSION['pelanggan'];
$date = date("Y-m-d");
$id_pelanggan = mysqli_query($koneksi, "SELECT id_pelanggan from pelanggan WHERE nama_pelanggan  = '$nama' AND tanggal = '$date'");

$id_pelanggan2 = $id_pelanggan->fetch_assoc();
$kode_pelanggan = $id_pelanggan2['id_pelanggan'];

$dataCart = mysqli_query($koneksi, "SELECT * FROM cart c JOIN product p ON c.kode_product = p.id_product WHERE c.kode_pelanggan = '$kode_pelanggan' ORDER BY p.nama ASC");


?>

<section id="cart" class="cart">
        <div class="cart-container">
            <h2 class="cart-tittle">Your Cart</h2>
            <table class="tabel-cart">
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
                
                <?php $subtotal=0; $total=0; while($tabelCart = mysqli_fetch_object($dataCart)) { ?>
                <tr>
                    <td>
                        <a onclick="deleteCart(<?= $tabelCart->kode_product ?>)" class="delete-product">
                            <img src="..\asset\icon\trash.png" width="23"/> 
                        </a> 
                    </td>
                    <td><?= $tabelCart->nama ?></td>
                    <td>Rp <?= rupiah($tabelCart->harga) ?></td>
                    <td><?= $tabelCart->jumlah ?></td>
                    <td>Rp <?php $subtotal =  $tabelCart->harga * $tabelCart->jumlah; echo rupiah($subtotal); ?></td>
                </tr>
                <?php $total += $subtotal; } ?>  
            </table>
        </div>

        <div class="check-out" >
            <div class="checkout-body">
                <h4 class="checkout-tittle">Checkout Bill</h4>
                <p class="checkout-total" >Total : Rp <?php echo rupiah($total); ?></p>
            </div>
            <div class="checkout-footer">
                <a onclick="add_transaksi(<?=$total?>)" href="print_bill.php" class="btn">Checkout Now</a>
            </div>
        </div>
</section>

