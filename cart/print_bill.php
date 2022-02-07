<?php 
include "../db/koneksi.php";
require_once("validate.php");
include "helper.php";

$nama = $_SESSION['pelanggan'];
$date = date("Y-m-d");
$id_pelanggan = mysqli_query($koneksi, "SELECT id_pelanggan from pelanggan WHERE nama_pelanggan = '$nama' AND tanggal = '$date'");

$id_pelanggan2 = $id_pelanggan->fetch_assoc();
$kode_pelanggan = $id_pelanggan2['id_pelanggan'];

$dataCart = mysqli_query($koneksi, "SELECT * FROM cart c JOIN product p ON c.kode_product = p.id_product WHERE c.kode_pelanggan = '$kode_pelanggan' ORDER BY p.nama ASC");
$dataTransaksi = mysqli_query($koneksi, "SELECT * FROM transaksi t JOIN pelanggan p ON t.id_pelanggan = p.id_pelanggan WHERE t.id_pelanggan = '$kode_pelanggan'");
$toko = mysqli_query($koneksi, "SELECT * FROM setting");
$dataToko = $toko->fetch_assoc();   
$dataTransaksi2 = $dataTransaksi->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Print Bill</title>
    <link rel="stylesheet" type="text/css" href="..\asset\css\style_bill.css">
    <meta http-equiv="refresh" content="5; URL= ../logout.php">
</head>
<body>
    <script>window.print();</script>
    <header class="clearfix">
      <div id="logo">
        <img src="../asset/logo.png" >
      </div>
      <h1>INVOICE NO: <?= $dataTransaksi2['id_transaksi'] ?> </h1>
      <div id="company" class="clearfix">
        <div> <?= $dataToko['nama_cabang'] ?> </div>
        <div><?= $dataToko['alamat_cabang'] ?> </div>
        <div> <?= $dataToko['nomor_telepon'] ?> </div>
        <div><a href="mailto:company@example.com"> <?= $dataToko['email_cabang'] ?> </a></div>
      </div>
      <div id="project">
        <div><span>ID Pesanan</span> <?= $dataTransaksi2['id_transaksi'] ?></div>
        <div><span>Nama Pemesan</span> <?= $nama ?> </div>
        <div><span>Tanggal Pesanan</span> <?= $dataTransaksi2['tanggal'] ?></div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">ID</th>
            <th class="desc">Nama Product</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
        <?php while($tabelCart = mysqli_fetch_object($dataCart)) { ?>
          <tr>
            <td class="service"><?= $tabelCart->id_product ?></td>
            <td class="desc"> <?= $tabelCart->nama ?></td>
            <td class="unit">Rp <?= rupiah($tabelCart->harga) ?></td>
            <td class="qty"><?= $tabelCart->jumlah ?></td>
            <td class="total">Rp <?= rupiah($tabelCart->harga * $tabelCart->jumlah) ?></td>
          </tr>
        <?php } ?> 
          <tr>
            <td colspan="4" class="grand total">TOTAL</td>
            <td class="grand total">Rp <?= rupiah($dataTransaksi2['total']) ?></td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Silahkan bawa INVOICE ini ketika nama Anda dipanggil oleh Kasir</div>
      </div>
    </main>
    <footer>
      THANKSCOFFEE Website - Copyright 2022 
    </footer>
  </body>
</html>
