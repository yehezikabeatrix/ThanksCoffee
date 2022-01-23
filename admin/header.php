<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="../asset/css/main.css">
  <title>Admin ThanksCoffee</title>
</head>

<body>
    <div class="header">
        <div class="logo"><a href="index.php">
            <img src="../asset/logo.png" alt="" height="90" width="70">
        </a>
        </div>
            
        <div class="header-right">          
          <?php
            if (isset($_SESSION['user'])) {
          ?>
          <a class="active" href="logout.php">Logout</a>

          <?php } ?>
          
        </div>
    </div>
