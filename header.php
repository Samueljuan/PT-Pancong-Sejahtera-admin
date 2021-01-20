<?
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
   <title>PT. PANCONG SEJAHTERA</title>
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
   <?php
   if (isset($_SESSION["usersStatus"])) {
   ?>
      <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
         <?php echo "<a class='navbar-brand' href='#'>Selamat Datang " . $_SESSION["usersStatus"] . " !</a>"; ?>
         <form class="form-inline my-2 my-lg-0 ml-auto">
         </form>
         <!-- tolltip: Semacam tulisan kalo di hover -->

         <div class="icon ml-4">
            <h5>
               <?php
               if ($_SESSION["usersStatus"] == 'admin') {
               ?>
                  <a href="https://www.gmail.com" target="_blank">
                     <i class="fa-1x fas fa-envelope-open-text btn" title="Surat Masuk"></i>
                  </a>
                  <a href="https://www.gmail.com" target="_blank">
                     <i class="fa-1x fas fa-bell btn" title="Panggil "></i>
                  </a>
                  <a href="includes/logout.inc.php">
                     <i class="fa-1x fas fa-sign-out-alt btn" title="Keluar"></i>
                  </a>
               <?php
               } else if ($_SESSION["usersStatus"] == 'resepsionis') {
               ?>
                  <a href="https://www.gmail.com" target="_blank">
                     <i class="fa-1x fas fa-bell btn" title="Panggil"></i>
                  </a>
                  <a href="includes/logout.inc.php">
                     <i class="fa-1x fas fa-sign-out-alt btn" title="Keluar"></i>
                  </a>
               <?php
               } else if ($_SESSION["usersStatus"] == 'gudang') {
               ?>
                  <a href="includes/logout.inc.php">
                     <i class="fa-1x fas fa-sign-out-alt btn" title="Keluar"></i>
                  </a>
               <?php
               } else if ($_SESSION["usersStatus"] == 'lapangan') {
               ?>
                  <a href="includes/logout.inc.php">
                     <i class="fa-1x fas fa-sign-out-alt btn" title="Keluar"></i>
                  </a>
               <?php
               }
               ?>
            </h5>
         </div>
      </nav>
      <!-- no-gutters agar tidak ada jarak antar grid -->
      <div class="row no-gutters mt-5">
         <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3">
               <?php
               if ($_SESSION["usersStatus"] == 'gudang') {
               ?>
                  <li class="nav-item">
                     <a class="nav-link active text-white" href="gudang_masuk.php"><i class="fas fa-box-open mr-2"></i>Barang Masuk</a>
                     <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active text-white" href="gudang_daftar.php"><i class="fas fa-boxes mr-2"></i>Daftar Barang</a>
                     <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active text-white" href="gudang_keluar.php"><i class="fas fa-truck-loading mr-2"></i>Barang Keluar</a>
                     <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active text-white" href="gudang_sementara.php"><i class="fas fa-list mr-2"></i>Barang Sementara</a>
                     <hr class="bg-secondary">
                  </li>
               <?php
               } else if ($_SESSION["usersStatus"] == 'resepsionis') {
               ?>
                  <li class="nav-item">
                     <a class="nav-link active text-white" href="resep_masuk.php"><i class="fas fa-box-open mr-2"></i>Barang Masuk</a>
                     <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active text-white" href="resep_daftar.php"><i class="fas fa-boxes mr-2"></i>Daftar Barang</a>
                     <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active text-white" href="resep_keluar.php"><i class="fas fa-truck-loading mr-2"></i>Barang Keluar</a>
                     <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active text-white" href="resep_hitung.php"><i class="fas fa-calculator mr-2"></i>Hitung Harga</a>
                     <hr class="bg-secondary">
                  </li>
               <?php
               } else if ($_SESSION["usersStatus"] == 'admin') {
               ?>
                  <div class="dropdown">
                     <button class="m-auto btn bg-secondary text-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-boxes mr-2 p-auto"></i>Daftar Masuk
                     </button>
                     <ul class="dropdown-menu dropdown-menu-dark bg-secondary" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item " href="admin_daftar_gudang.php">Daftar Barang Gudang</a></li>
                        <li><a class="dropdown-item" href="admin_daftar_resep.php">Daftar Barang Resepsionis</a></li>
                        <li><a class="dropdown-item" href="admin_barang.php">Daftar Barang</a></li>
                        <li><a class="dropdown-item" href="admin_daftar_lapangan.php">Daftar Barang Lapangan</a></li>
                     </ul>
                     <hr class="bg-secondary">
                  </div>

                  <div class="dropdown">
                     <button class="m-auto btn bg-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-boxes mr-2 p-auto"></i>Daftar Keluar
                     </button>
                     <ul class="dropdown-menu dropdown-menu-dark bg-secondary" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item " href="admin_daftar_gudang.php">Daftar Barang Gudang</a></li>
                        <li><a class="dropdown-item" href="admin_daftar_resep.php">Daftar Barang Resepsionis</a></li>
                        <li><a class="dropdown-item" href="admin_barang.php">Daftar Barang</a></li>
                     </ul>
                     <hr class="bg-secondary">
                  </div>
                  <!-- <li class="nav-item">
                     <a class="nav-link active text-white" href="admin_daftar_gudang.php"><i class="fas fa-boxes mr-2"></i>Daftar Barang Gudang</a>
                     <hr class="bg-secondary">
                  </li> -->
                  <!-- <li class="nav-item">
                     <a class="nav-link active text-white" href="admin_daftar_resep.php"><i class="fas fa-boxes mr-2"></i>Daftar Barang Resepsionis</a>
                     <hr class="bg-secondary">
                  </li> -->
                  <!-- <li class="nav-item">
                     <a class="nav-link active text-white" href="admin_barang.php"><i class="fas fa-boxes mr-2"></i>Daftar Barang </a>
                     <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active text-white" href="admin_daftar_lapangan.php"><i class="fas fa-boxes mr-2"></i>Daftar Barang Lapangan </a>
                     <hr class="bg-secondary">
                  </li> -->
                  <li class="nav-item">
                     <a class="nav-link active text-white" href="admin_barang-sementara.php"><i class="fas fa-list mr-2"></i>Daftar Barang Sementara</a>
                     <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active text-white" href="admin_karyawan.php"><i class="fas fa-users mr-2"></i>List Karyawan</a>
                     <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active text-white" href="admin_daftar.php"><i class="fas fa-user-plus mr-2"></i>Daftar Karyawan</a>
                     <hr class="bg-secondary">
                  </li>
               <?php
               } else if ($_SESSION["usersStatus"] == 'lapangan') {
               ?>
                  <li class="nav-item">
                     <a class="nav-link active text-white" href="lapangan_daftar.php"><i class="fas fa-boxes mr-2"></i>Daftar Barang</a>
                     <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active text-white" href="lapangan_diambil.php"><i class="fas fa-people-carry mr-2"></i>Barang Diambil</a>
                     <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active text-white" href="lapangan_barang.php"><i class="fas fa-truck-loading mr-2"></i>Daftar Barang Diambil</a>
                     <hr class="bg-secondary">
                  </li>
               <?php
               }
               ?>
            </ul>
         </div>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
         <script src="js/jquery.min.js"></script>
         <script src="js/js/bootstrap.min.js"></script>
         <script src="js/jquery-migrate-3.0.1.min.js"></script>
         <script src="js/jquery.stellar.min.js"></script>
         <script src="js/scrollax.min.js"></script>
         <script src="js/main.js"></script>
      <?php
   } else {
      header("location: index.php");
   }
      ?>
</body>

</html>