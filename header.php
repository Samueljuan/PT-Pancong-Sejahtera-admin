<!DOCTYPE html>
<html>

<head>
   <title>PSIKOLOGI</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- bootstrap -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

   <!-- Personal -->
   <link rel="stylesheet" href="../css/admin.css">
   <script type="text/javascript" src="../js/admin.js"></script>

   <!-- Font Awesome -->
   <script src="https://kit.fontawesome.com/2b2328adf6.js" crossorigin="anonymous"></script>
</head>

<body>
      <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
         <!-- <?php echo "<a class='navbar-brand' href='#'>Selamat Datang " . $_SESSION["useruid"] . " !</a>"; ?> -->
         <form class="form-inline my-2 my-lg-0 ml-auto">
         </form>
         <!-- tolltip: Semacam tulisan kalo di hover -->

         <div class="icon ml-4">
            <h5>
               <a href="https://www.gmail.com" target="_blank">
                  <i class="fa-1x fas fa-envelope-open-text btn" title="Surat Masuk"></i>
               </a>
               <a href="https://www.gmail.com" target="_blank">
                  <i class="fa-1x fas fa-bell btn" title="Notifikasi"></i>
               </a>
               <a href="includes/logout.inc.php">
                  <i class="fa-1x fas fa-sign-out-alt btn" title="Keluar"></i>
               </a>
            </h5>
         </div>
      </nav>
         <!-- no-gutters agar tidak ada jarak antar grid -->
         <div class="row no-gutters mt-5">
            <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
               <ul class="nav flex-column ml-3">
                  <?php
                  if ($_SESSION["usersStatus"] == 'gudang'){
                  ?>
                  <li class="nav-item">
                     <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-chart-line mr-2"></i>Dashboard</a>
                     <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active text-white" href="profile.php"><i class="far fa-id-card mr-2"></i>Profile</a>
                     <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-white" href="file.php"><i class="fas fa-mail-bulk mr-2"></i>File</a>
                     <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-white" href="penunjang.php"><i class="fas fa-comment-dots mr-2"></i>Penunjang lainnya </a>
                     <hr class="bg-secondary">
                  </li>
                  <?php
                  } else if ($_SESSION["usersStatus"] == 'resepsionis') {
                  ?>
                     <li class="nav-item">
                     <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-chart-line mr-2"></i>Dashboard</a>
                     <hr class="bg-secondary">
                  </li>
                  <?php
                  } else{
                  ?>
                  <li class="nav-item">
                     <a class="nav-link text-white" href="penunjang.php"><i class="fas fa-comment-dots mr-2"></i>Penunjang lainnya </a>
                     <hr class="bg-secondary">
                  </li>
                  <?php
                  }
                  ?>

               </ul>
            </div>
      <p></p>
      <script src="js/jquery.min.js"></script>
      <script src="js/js/bootstrap.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/scrollax.min.js"></script>
      <script src="js/main.js"></script>
</body>

</html>