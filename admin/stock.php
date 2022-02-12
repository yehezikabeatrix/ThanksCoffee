<?php 
include 'template.php'; 
include 'helper.php';
?>
            <div id="layoutSidenav_content">               
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Product Stock</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Stock your soul! </li>
                        </ol>
                        <button type="button" class="btn btn-info-thanks mb-4" data-bs-toggle="modal" data-bs-target="#myModal">
                            Add New Product
                        </button>
                        <div class="row">
                            <div class="col-xl-3 col-md-6" style="width: 20%;">
                                <div class="card text-white mb-4" style="background-color: sienna !important;">
                                    <div class="card-body"><h2>Coffee</h2>
                                        <?php
                                        $sql = "SELECT * FROM product WHERE kategori = 'coffee'";
                                        $result = mysqli_query($koneksi,$sql);
                                        if(is_null($result)){
                                            echo "<h3>0 product</h3>";
                                        }else{
                                            echo "<h3>".(mysqli_num_rows($result))." product</h3>";
                                        }
                                        ?>                                   
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6" style="width: 20%;">
                                <div class="card text-white mb-4" style="background-color: lightsalmon !important;">
                                    <div class="card-body"><h2>Non-coffee</h2>
                                        <?php
                                        $sql = "SELECT * FROM product WHERE kategori = 'non coffee'";
                                        $result = mysqli_query($koneksi,$sql);
                                        if(is_null($result)){
                                            echo "<h3>0 product</h3>";
                                        }else{
                                            echo "<h3>".(mysqli_num_rows($result))." product</h3>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6" style="width: 20%;">
                                <div class="card text-white mb-4" style="background-color: orange !important;">
                                    <div class="card-body"><h2>Snack</h2>
                                        <?php
                                        $sql = "SELECT * FROM product WHERE kategori = 'snack'";
                                        $result = mysqli_query($koneksi,$sql);
                                        if(is_null($result)){
                                            echo "<h3>0 product</h3>";
                                        }else{
                                            echo "<h3>".(mysqli_num_rows($result))." product</h3>";
                                        }
                                        ?>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6" style="width: 20%;">
                                <div class="card text-white mb-4" style="background-color: burlywood !important;">
                                    <div class="card-body"><h2>Beans</h2>
                                        <?php
                                        $sql = "SELECT * FROM product WHERE kategori = 'beans'";
                                        $result = mysqli_query($koneksi,$sql);
                                        if(is_null($result)){
                                            echo "<h3>0 product</h3>";
                                        }else{
                                            echo "<h3>".(mysqli_num_rows($result))." product</h3>";
                                        }
                                        ?>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-xl-3 col-md-6" style="width: 20%;">
                                <div class="card text-white mb-4" style="background-color: cadetblue !important;">
                                    <div class="card-body"><h2>Merchant</h2>
                                        <?php
                                        $sql = "SELECT * FROM product WHERE kategori = 'merchant'";
                                        $result = mysqli_query($koneksi,$sql);
                                        if(is_null($result)){
                                            echo "<h3>0 product</h3>";
                                        }else{
                                            echo "<h3>".(mysqli_num_rows($result))." product</h3>";
                                        }
                                        ?>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    
                        
                        <?php if(isset($_GET['edit_success'])){?>
                            <div class="alert alert-success">
                                <strong>Sukses! </strong>Stock product berhasil di update.
                                <a href="stock.php" class="close" data-dismiss="alert" aria-label="close">&times; </a>
                            </div>
                        <?php }?> 

                        <?php if(isset($_GET['delete_success'])){?>
                            <div class="alert alert-success">
                                <strong>Sukses! </strong>Product berhasil di hapus.
                                <a href="stock.php" class="close" data-dismiss="alert" aria-label="close">&times; </a>
                            </div>
                        <?php }?> 



                        <div class="card mb-4">
                            <div class="card-header" style="color: #ffff;">
                                <i class="fas fa-table me-1"></i>
                                Stock Tables
                            </div>
                            <div class="card-body" style="color: #ffff;">
                                <table id="datatablesSimple" style="color: #ffff;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product</th>
                                            <th>Nama Product</th>
                                            <th>Category</th>
                                            <th>Stock</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    <?php
                                    $sql = "SELECT * FROM product";
                                    
                                    $result = mysqli_query($koneksi,$sql);
                                    while($row = mysqli_fetch_row($result)){
                                       echo "<tr>";
                                        echo "<td>".$row[0]."</td>";
                                        echo "<td><img src='".$row[5]."'height='100' width='100'></td>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>".$row[4]."</td>";
                                        echo "<td>Rp ".rupiah($row[3])."</td>";
                                        echo "<td>";
                                            echo "<form method='post' action='function/editstock.php'>";
                                            echo "<input type='hidden' value ='".$row[0]."' name = 'id'>";
                                            echo "<input type='number' class='form-control-sm' style='border-width:0' placeholder='Update Stock' name = 'param'><br/>"; 
                                            echo "<input type='submit' class='btn btn-warning' style='margin-top:10px' value='Update'></input>";
                                            echo "</form>";
                                        echo "</td>";
                                        echo "<td>";
                                            echo "<form method='post' action='function/delete_product.php'>";
                                            echo "<input type='hidden' value ='".$row[0]."' name = 'id_product'>";
                                            echo "<input type='submit' class='btn btn-danger' value='Delete'></input>";
                                            echo "</form>";
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include 'footer.php' ?>


<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Product </h4>
        </div>

        <form method="post" action = "function/addstock.php" enctype="multipart/form-data">
            <!-- Modal body -->
            <div class="modal-body" data-closable>
            <input type="text" name="Nama" class="form-control" placeholder="Nama Product" required>
            <select name="kategori" id="" class="form-control mt-3" required>
                <option value="coffee">Coffee</option>
                <option value="non coffee">Non-Coffee</option>
                <option value="snack">Snack</option>
                <option value="merchant">Beans</option>
                <option value="merchant">Merchant</option>
            </select>
            <input type="num" name="stock" class="form-control mt-3" placeholder="Stock" required>
            <input type="num" name="harga" class="form-control mt-3" placeholder="Harga" required>
            <input type="file" name="foto" class="form-control mt-3" placeholder="Foto Product" required>

            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
            <input type="submit" class="btn btn-success" name="add stock" value = "Submit"></input>
            <button type="button" class="btn btn-danger" data-bs-target="#myModal" data-bs-toggle="collapse" href="stock.php" data-close>Close</button>
            </div>
       </form>
        
      </div>
    </div>
  </div>                