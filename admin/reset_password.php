
<?php 
include 'template.php'; 
include 'helper.php';
?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Are you sure?</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Welcome <?php  echo ($_SESSION['user']['username']); ?> </li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-4 col-md">
                                <div class="card text-white mb-4" style="background-color: #2e4b31">
                                    <form action="change_password.php" method="post"> 
                                    <h2>Change Password</h2>
                                     
                                  <?php if (isset($_GET['error'])) { ?> 
                                   <p class="error"><?php echo $_GET['error']; ?></p> 
                                  <?php } ?> 
                             
                                  <?php if (isset($_GET['success'])) { ?> 
                                        <p class="success"><?php echo $_GET['success']; ?></p> 
                                    <?php } ?>
                                </div>

                                    <label>Old Password</label> 
                                      <input type="password"  
                                             name="op"  
                                             placeholder="Old Password"> 
                                             <br> 
                                 
                                      <label>New Password</label> 
                                      <input type="password"  
                                             name="np"  
                                             placeholder="New Password"> 
                                             <br> 
                                 
                                      <label>Confirm New Password</label> 
                                      <input type="password"  
                                             name="c_np"  
                                             placeholder="Confirm New Password"> 
                                             <br> 
                                        <button type="submit" class="btn btn-info-thanks mb-4">CHANGE</button> 
                                          <a href="login.php" class="btn btn-info-thanks mb-4">HOME</a> 
                                      
                                     </form>

                                </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                                             
                        
                    
                    </div>
                </main>

                <?php include 'footer.php'; ?>

