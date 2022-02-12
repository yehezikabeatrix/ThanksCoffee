
<?php 
include 'template.php'; 
include 'helper.php';
?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Home</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Welcome <?php  echo ($_SESSION['user']['username']); ?> </li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-4 col-md">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><h2>Info Pemasukan</h2>
                                    <?php
                                    $tgl = date("Y-m-d");
                                    echo "Tanggal : ".$tgl;

                                    $sql = "SELECT sum(total) from transaksi WHERE tanggal_transaksi = '$tgl' and status = 1";
                                    $result = mysqli_query($koneksi,$sql);
                                    $result = mysqli_fetch_array($result);
                                    if(is_null($result[0])){
                                        echo "<h3>Rp 0</h3>";
                                    }
                                    else{
                                        echo "<h3> Rp ".rupiah(($result[0]))."</h3>";
                                    }

                                    ?>
                                </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="laporan.php">Cek</a>
                                        <div class="small text-white"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><h2>Info Product</h2>
                                    <?php
                                    $jumlah_product = mysqli_query($koneksi, "SELECT count(*) from product WHERE stock > 0");
                                    $jumlahnya = mysqli_fetch_array($jumlah_product);
                                    echo "Jumlah Product Tersedia: ".$jumlahnya[0];
                                    
                                    $stock = mysqli_query($koneksi,"SELECT count(stock) from product WHERE stock = '0'");
                                    $result = mysqli_fetch_array($stock);
                                    if(is_null($result[0])){
                                        echo "<h3>Tidak Ada Stock Kosong</h3>";
                                    }
                                    else{
                                        echo "<h3>".rupiah(($result[0]))." Product Kosong</h3>";
                                    }
                                        
                                    ?>
                                </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="stock.php">Cek</a>
                                        <div class="small text-white"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><h2>Info Pesanan</h2>
                                    <?php
                                    $tgl = date("Y-m-d");
                                    $jumlah_pesanan = mysqli_query($koneksi, "SELECT count(*) from transaksi WHERE status = 1 AND tanggal_transaksi = '$tgl' ");
                                    $jumlahnya = mysqli_fetch_array($jumlah_pesanan);
                                    echo "Pesanan Selesai : ".$jumlahnya[0];
                                    
                                    $bayar = mysqli_query($koneksi,"SELECT count(*) from transaksi WHERE status = 0 AND tanggal_transaksi = '$tgl' ");
                                    $result = mysqli_fetch_array($bayar);
                                    if(is_null($result[0])){
                                        echo "<h3>Tidak Ada Pesanan Masuk</h3>";
                                    }
                                    else{
                                        echo "<h3>".$result[0]." Pesanan Baru</h3>";
                                    }
                                ?>    

                                </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="order.php">Cek</a>
                                        <div class="small text-white"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                                             
                        
                    
                    </div>
                </main>

                <?php include 'footer.php'; ?>

            