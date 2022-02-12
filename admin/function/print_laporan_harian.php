<?php

    include '../../db/koneksi.php';
    require_once("../validate.php");
    include '../helper.php';

    $toko = mysqli_query($koneksi, "SELECT * FROM setting");
    $dataToko = $toko->fetch_assoc(); 

    $tanggal = $_POST['tanggal'];
    $detail = explode('-', $tanggal);
    $monthName = date("F", mktime(0, 0, 0, $detail[1], 10));

    $sql1 = mysqli_query($koneksi, "SELECT product.id_product, product.nama, product.harga, product.stock, penjualan_product.jumlah FROM product JOIN penjualan_product ON product.nama = penjualan_product.nama WHERE penjualan_product.dibuat = '$tanggal'");
    $sql2 = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE tanggal_transaksi = '$tanggal' AND status=1");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Print Laporan Harian</title>
    <link rel="stylesheet" type="text/css" href="../css/print_laporan.css">
    <meta http-equiv="refresh" content="5; URL= ../index.php">
</head>
<body>
    <script>window.print();</script>
    <header class="clearfix">
      <div id="logo">
        <img src="../../asset/logo.png" >
      </div>
      <h1>Laporan Penjualan Harian</h1>
      <div id="company" class="clearfix">
        <div> <?= $dataToko['nama_cabang'] ?> </div>
        <div><?= $dataToko['alamat_cabang'] ?> </div>
        <div> <?= $dataToko['nomor_telepon'] ?> </div>
        <div><a href="mailto:company@example.com"> <?= $dataToko['email_cabang'] ?> </a></div>
      </div>
      <div id="project">
        <div>Tanggal : <?php echo $detail[2]; ?></div>
        <div>Bulan : <?php echo $monthName; ?> </div>
        <div>Tahun : <?php echo $detail[0]; ?></div>
      </div>
    </header>
    <main>
      <h3>Tabel Detail Transaksi</h3>
      <table>
        <thead>
          <tr>
            <th class="service">ID Transaksi</th>
            <th class="desc">ID Pelanggan</th>
            <th>Bayar</th>
            <th>Kembalian</th>
            <th>Pemasukan</th>
          </tr>
        </thead>
        <tbody>
        <?php $grand_total=0; $total_bayar= 0; $total_kembalian = 0; while($tabelCart = mysqli_fetch_object($sql2)) { ?>
          <tr>
            <td class="service"><?= $tabelCart->id_transaksi ?></td>
            <td class="desc"> <?= $tabelCart->id_pelanggan ?></td>
            <td class="qty">Rp <?php $total_bayar += $tabelCart->bayar ; echo rupiah($tabelCart->bayar); ?></td>
            <td class="total">Rp <?php $total_kembalian += $tabelCart->kembalian ; echo rupiah($tabelCart->kembalian); ?></td>
            <td class="unit">Rp <?php $grand_total += $tabelCart->total ; echo rupiah($tabelCart->total); ?></td>
          </tr>
        <?php } ?> 
          <tr>
            <td colspan="2" class="grand total">TOTAL</td>
            <td class="grand total">Rp <?= rupiah($total_bayar) ?></td>
            <td class="grand total">Rp <?= rupiah($total_kembalian) ?></td>
            <td class="grand total">Rp <?= rupiah($grand_total) ?></td>
          </tr>
        </tbody>
      </table>

      <h3>Tabel Penjualan Product</h3>
      <table>
        <thead>
          <tr>
            <th class="service">ID Product</th>
            <th class="desc">Nama Product</th>
            <th>Sisa Stock</th>
            <th>Terjual</th>
            <th>Total Harga</th>
          </tr>
        </thead>
        <tbody>
        <?php $total= 0; while($tabelCart = mysqli_fetch_object($sql1)) { ?>
          <tr>
            <td class="service"><?= $tabelCart->id_product ?></td>
            <td class="desc"> <?= $tabelCart->nama ?></td>
            <td class="qty"><?= $tabelCart->stock - $tabelCart->jumlah ?></td>
            <td class="qty"><?= $tabelCart->jumlah ?></td>
            <td class="unit">Rp <?php $total += $tabelCart->harga * $tabelCart->jumlah ; echo rupiah($tabelCart->harga * $tabelCart->jumlah); ?></td>
          </tr>
        <?php } ?> 
          <tr>
            <td colspan="4" class="grand total">TOTAL</td>
            <td class="grand total">Rp <?= rupiah($total) ?></td>
          </tr>
        </tbody>
      </table>
    </main>
    <footer>
      THANKSCOFFEE Website - Copyright 2022 
    </footer>
  </body>
</html>