<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<body>
   <?php
   include_once 'header.php';
   ?>
   <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-list mr-2"></i> DAFTAR BARANG SEMENTARA</h3>
      <hr>
      <?php
      if (isset($_GET["error"])) {
         if ($_GET["error"] == "none") {
            echo "<div class='alert alert-primary' role='alert'>
            Pendaftaran Berhasil!
          </div>";
         } else if ($_GET["error"] == "stmtfailed") {
            echo "<div class='alert alert-danger' role='alert'>
                  Ada yang Salah! Coba Lagi!
                </div>";
         }
      }
      ?>

      <form class="pt-3 bg-white" method="POST" action="includes/gudang_sementara.inc.php">
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>ID Barang</strong></label>
               <input type="text" name="IDbarang" placeholder="ID Barang..." class="form-control" required name="IDbarang">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Nama Barang</strong></label>
               <input type="text" name="namaBarang" placeholder="Nama Barang..." class="form-control" required name="namaBarang">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Tanggal Diambil</strong></label>
               <input type="date" name="tanggalDiambil" placeholder="Tanggal Diambil..." class="form-control" required name="tanggalDiambil">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <input type="submit" name="submit" class="btn btn-primary py-2 px-4 text-white">
            </div>
         </div>
      </form>
   </div>


</body>

</html>