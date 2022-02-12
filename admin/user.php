<?php
    include 'template.php';
?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Setting User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Where your User alive!! </li>
                        </ol>
                        <button type="button" class="btn btn-info-thanks mb-4" data-bs-toggle="modal" data-bs-target="#addUser">
                            Add New User
                        </button>

                        <?php if(isset($_GET['delete_success'])){?>
                            <div class="alert alert-success">
                                <strong>Sukses! </strong>User berhasil di hapus.
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
                                            <th>Avatar</th>
                                            <th>Username</th>
                                            <th>Jabatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    $sql = "SELECT * FROM user";
                                    
                                    $result = mysqli_query($koneksi,$sql);
                                    while($row = mysqli_fetch_row($result)){
                                       echo "<tr>";
                                        echo "<td><img src='".$row[3]."'height='100' width='100'></td>";
                                        echo "<td>".$row[0]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>";
                                            echo "<form method='post' action='function/delete_user.php'>";
                                            echo "<input type='hidden' value ='".$row[0]."' name = 'username'>";
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

                <?php include 'footer.php'; ?>

<!-- addUser Modal -->
<div class="modal fade" id="addUser">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add New User </h4>
        </div>

        <form method="post" action = "function/adduser.php" enctype="multipart/form-data">
            <!-- Modal body -->
            <div class="modal-body" data-closable>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <input type="password" name="password" class="form-control mt-3" placeholder="Password" required>
            <select name="jabatan" id="" class="form-control mt-3" required>
                <option value="manajer">Manajer</option>
                <option value="karyawan">Karyawan</option>
            </select>
            <input type="file" name="avatar" class="form-control mt-3" placeholder="Avatar" required>

            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
            <input type="submit" class="btn btn-success" name="add user" value = "Add"></input>
            <button type="button" class="btn btn-danger" data-bs-target="#addUser" data-bs-toggle="collapse" href="user.php" data-close>Cancel</button>
            </div>
       </form>
        
      </div>
    </div>
  </div>               