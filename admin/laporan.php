<?php 
    include 'template.php'; 
    $month = date('F');
    
    if ($_SESSION['user']['jabatan'] != 'manajer') {
    echo '<script type="text/javascript">alert("Anda tidak memiliki akses ke halaman ini");window.location=\'index.php\';</script>';
    };
?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Laporan Penjualan</h1>
                        <?php $tgl = date("Y-m-d"); ?>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Tanggal : <?php echo $tgl; ?></li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header" style="color: #ffff">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Grafik Penjualan Produk Hari Ini
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header" style="color: #ffff">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Grafik Pemasukan Bulan <?php echo $month; ?>
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-warning mb-4" style="font-weight: 600;" data-bs-toggle="modal" data-bs-target="#cetakHarian">
                          Cetak Laporan Harian
                        </button>
                        <button type="button" class="btn btn-warning mb-4" style="font-weight: 600;" data-bs-toggle="modal" data-bs-target="#cetakBulanan">
                          Cetak Laporan Bulanan 
                        </button>

                    </div>    
                </main>
                <?php include 'footer.php'; ?>
            </div>

<!-- cetakHarian Modal -->
<div class="modal fade" id="cetakHarian">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Cetak Laporan Harian</h4>
        </div>

        <form method="post" action = "function/print_laporan_harian.php">
            <!-- Modal body -->
            <div class="modal-body" data-closable>
              <?php 
                $tanggal = mysqli_query($koneksi, "SELECT DISTINCT(CONCAT(day(tanggal_transaksi), ' ', monthname(tanggal_transaksi), ' ', year(tanggal_transaksi))), tanggal_transaksi FROM transaksi ORDER BY tanggal_transaksi ASC");
              ?>
              <select name="tanggal" id="" class="form-control mt-3" required>
                <?php while ($b = mysqli_fetch_array($tanggal)) { echo '<option value="' . $b[1] . '">' . $b[0] . '</option>';}?>  
              </select>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
            <input type="submit" class="btn btn-success" name="cetak" value = "Cetak"></input>
            <button type="button" class="btn btn-danger" data-bs-target="#cetakHarian" data-bs-toggle="collapse" href="laporan.php" data-close>Cancel</button>
            </div>
       </form>
        
      </div>
    </div>
</div>      

<!-- cetakBulanan Modal -->
<div class="modal fade" id="cetakBulanan">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Cetak Laporan Bulanan</h4>
        </div>

        <form method="post" action = "function/print_laporan_bulanan.php">
            <!-- Modal body -->
            <div class="modal-body" data-closable>
              <?php 
                $bulan = mysqli_query($koneksi, "SELECT DISTINCT(CONCAT(monthname(tanggal_transaksi), ' ', year(tanggal_transaksi))) as bulan, CONCAT(year(tanggal_transaksi), '-', month(tanggal_transaksi), '-01') as valuee FROM transaksi");
              ?>
              <select name="bulan" id="" class="form-control mt-3" required>
                <?php while ($b = mysqli_fetch_array($bulan)) { echo '<option value="' . $b['valuee'] . '">' . $b['bulan'] . '</option>';}?>  
              </select>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
            <input type="submit" class="btn btn-success" name="cetak" value = "Cetak"></input>
            <button type="button" class="btn btn-danger" data-bs-target="#cetakBulanan" data-bs-toggle="collapse" href="laporan.php" data-close>Cancel</button>
            </div>
       </form>
        
      </div>
    </div>
  </div>      

            
<?php
$month = date('m');
$date = date("Y-m-d");
$tanggal = mysqli_query($koneksi, "SELECT DAY(tanggal_transaksi) as day FROM pemasukan_harian WHERE MONTH(tanggal_transaksi) = '$month' order by tanggal_transaksi asc");
$pemasukan = mysqli_query($koneksi, "SELECT total FROM pemasukan_harian WHERE MONTH(tanggal_transaksi) = '$month' order by tanggal_transaksi asc");

$nama_product = mysqli_query($koneksi, "SELECT nama FROM penjualan_product WHERE dibuat = '$date' ORDER BY nama ASC");
$jumlah_product = mysqli_query($koneksi, "SELECT jumlah FROM penjualan_product WHERE dibuat = '$date' ORDER BY nama ASC");

?>

<script>
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#ffff';

// Area Chart
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [<?php while ($b = mysqli_fetch_array($tanggal)) { echo '"' . $b['day'] . '",';}?>],
    datasets: [{
      label: "Pemasukan : Rp ",
      lineTension: 0.3,
      backgroundColor: "rgba(203,146,76,0.3)",
      borderColor: "#cb924c",
      pointRadius: 5,
      pointBackgroundColor: "#cb924c",
      pointBorderColor: "#ffff",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "#cb924c",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [<?php while ($b = mysqli_fetch_array($pemasukan)) { echo '' . $b['total'] . ',';}?>],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 2000000,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(255, 255, 255, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [<?php while ($b = mysqli_fetch_array($nama_product)) { echo '"' . $b['nama'] . '",';}?>],
    datasets: [{
      label: "Product Terjual",
      backgroundColor: "#cb924c",
      borderColor: "#ffff",
      data: [<?php while ($b = mysqli_fetch_array($jumlah_product)) { echo '' . $b['jumlah'] . ',';}?>],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 100,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true,
          color: "rgba(255, 255, 255, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});



</script>            