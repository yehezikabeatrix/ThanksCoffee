<?php
if(isset($_GET['status'])){
    if($_GET['status']=="1"){
        echo "<script>alert('Pembayaran berhasil!');</script>";
    }
}else{
}
if(isset($_GET['kembali'])){
    echo "<script>alert('Pembayaran berhasil! kembali = Rp".$_GET['kembali']."');</script>";
}
if(isset($_GET['kurang'])){
    echo "<script>alert('Pembayaran gagal!! kurang = Rp".$_GET['kurang']."');</script>";
}


include 'template.php'; 
include 'helper.php';
?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Incoming Order</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Hurry up!</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><h2>Order Completed</h2>
                                    <?php
                                    $tgl = date("Y-m-d");
                                    $sql = "SELECT id_transaksi FROM transaksi WHERE status = 1 AND tanggal_transaksi = '$tgl'";
                                    $result = mysqli_query($koneksi,$sql);
                                    
                                    $result = mysqli_num_rows($result);
                                    if(is_null($result)){
                                        echo "<h3>0</h3>";
                                    }
                                    else{
                                        echo "<h3>".($result)."</h3>";
                                    }
                                                                           
                                    ?>

                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><h2>New Order</h2>
                                    <?php
                                    $tgl = date("Y-m-d");
                                    $sql = "SELECT id_transaksi FROM transaksi WHERE status=0 AND tanggal_transaksi = '$tgl'";
                                    $result = mysqli_query($koneksi,$sql);
                                    
                                    $result = mysqli_num_rows($result);
                                    if(is_null($result)){
                                        echo "<h3>0</h3>";
                                    }
                                    else{
                                        echo "<h3>".($result)."</h3>";
                                    }
                                    
                                        
                                    ?>
                                </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><h2>Oder Canceled</h2>
                                    <?php
                                    $tgl = date("Y-m-d");
                                    $sql = "SELECT id_transaksi FROM transaksi WHERE status=2 AND tanggal_transaksi = '$tgl'";
                                    $result = mysqli_query($koneksi,$sql);
                                    
                                    $result = mysqli_num_rows($result);
                                    if(is_null($result)){
                                        echo "<h3>0</h3>";
                                    }
                                    else{
                                        echo "<h3>".($result)."</h3>";
                                    }
                                    
                                        
                                    ?>
                                </div>
                                </div>
                            </div>
                        </div>

                        <?php if(isset($_GET['delete_success'])){?>
                            <div class="alert alert-success">
                                <strong>Sukses! </strong>Pesanan berhasil dihapus.
                                <a href="order.php" class="close" data-dismiss="alert" aria-label="close">&times; </a>
                            </div>
                        <?php }?>


                        <div class="card mb-4">
                            <div class="card-header" style="color: #ffff;">
                                <i class="fas fa-table me-1"></i>
                                Order Tables
                            </div>
                            <div class="card-body" style="color: #ffff;">
                                <table id="datatablesSimple" style="color: #ffff;">
                                    <thead>
                                        <tr>
                                            <th>ID Transaksi</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Total Harga</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    $tgl = date("Y-m-d");
                                    $sql = "SELECT * FROM `transaksi` t JOIN pelanggan p ON t.id_pelanggan = p.id_pelanggan WHERE tanggal_transaksi = '$tgl' " ;
                                    
                                    $result = mysqli_query($koneksi,$sql);
                                    while($row = mysqli_fetch_row($result)){
                                        echo "<tr>";
                                        echo "<td>".$row[0]."</td>";
                                        echo "<td>".$row[6]."</td>";
                                        echo "<td>".$row[8]."</td>";
                                        echo "<td>Rp ".rupiah($row[2])."</td>";
                                        if($row[5]=="0"){
                                            echo "<td>";
                                            echo "<form method='post' action='function/bayar.php'>";
                                            echo "<input type='hidden' value ='".$row[0]."' name = 'id'>";
                                            echo "<input type='hidden' value ='".$row[2]."' name = 'total'>";
                                            echo "<input type='number' class='form-control-sm' style='border-width:0' placeholder='Total bayar' name = 'bayar'><br/>"; 
                                            echo "<input type='submit' class='btn btn-warning' style='margin-top:10px' value='Bayar'></input>";
                                            echo "</form>";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<form method='post' action='function/delete_transaksi.php'>";
                                            echo "<input type='hidden' value ='".$row[0]."' name = 'id_transaksi'>";
                                            echo "<input type='hidden' value ='".$row[1]."' name = 'id_pelanggan'>";
                                            echo "<input type='submit' class='btn btn-danger' value='Delete'></input>";
                                            echo "</form>";
                                            echo "</td>";
                                        }else if($row[5]=="1"){
                                            echo "<td><button type='button' class='btn btn-primary' disabled>Selesai</button></td>";
                                            echo "<td></td>";
                                        }else if($row[5]=="2"){
                                            echo "<td><button type='button' class='btn btn-danger' disabled>Pesanan Batal</button></td>";
                                            echo "<td></td>";
                                        }    
                
                                    }
                                    ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

                <?php include 'footer.php'; ?>
