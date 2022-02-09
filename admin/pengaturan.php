<?php
    session_start();
    if(!isset($_SESSION['user'])) header("location:login.php");
    include '../db/koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Pesanan</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">ThanksCoffee Cashier</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
           
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="profil.php">Profile</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">dashboard</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-house-user"></i></div>
                                Home
                            </a>
                            <a class="nav-link" href="order.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-bell"></i></div>
                                Order
                            </a>
                            <a class="nav-link" href="stock.php">
                                <div class="sb-nav-link-icon"><i class="far fa-eye"></i></div>
                                Stock
                            </a>

                            <a class="nav-link" href="pengaturan.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-cog"></i></div>
                                Setting
                            </a>
                            
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                 
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Setting Cabang</h1>
                        <br>
                        <?php if(isset($_GET['success'])){?>
                        <div class="alert alert-success">
                            <p>Ubah Data Berhasil !</p>
                        </div>
                        <?php }?>
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <td>Nama Toko</td>
                                    <td>Alamat Toko</td>
                                    <td>Kontak (Hp)</td>
                                    <td>Nama Pemilik Toko</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <form method="post" action="fungsi/edit/edit.php?pengaturan=ubah">      
                                <tr>
                                    <td><input class="form-control" name="namatoko" value="<?php echo $toko['nama_toko'];?>" placeholder="Nama Toko"></td>
                                    <td><input class="form-control" name="alamat" value="<?php echo $toko['alamat_toko'];?>" placeholder="Alamat Toko"></td>
                                    <td><input class="form-control" name="kontak" value="<?php echo $toko['tlp'];?>" placeholder="Kontak (Hp)"></td>
                                    <td><input class="form-control" name="pemilik" value="<?php echo $toko['nama_pemilik'];?>" placeholder="Nama Pemilik Toko"></td>
                                    <td><button id="tombol-simpan" class="btn btn-primary"><i class="fa fa-pencil"></i> Update Data</button></td>
                                </tr>
                                </form>
                            </tbody>
                        </table>
                        <div class="clearfix" style="padding-top:41%;"></div>
                  </div>
              </div>
          </section>
      </section>
                    
            
              
                </main>
              
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
