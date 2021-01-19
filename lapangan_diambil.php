<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<body>
   <?php
   include_once 'header.php';
   include_once 'includes/database.php';

   $result = mysqli_query($conn, "SELECT * FROM kategori");
   ?>
   <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-users mr-2"></i> PENGAMBILAN BARANG</h3>
      <hr>
      <?php
      if (isset($_GET["error"])) {
         if ($_GET["error"] == "none") {
            echo "<div class='alert alert-primary' role='alert'>
            Pengambilan Berhasil!
          </div>";
         } else if ($_GET["error"] == "stmtfailed") {
            echo "<div class='alert alert-danger' role='alert'>
                  Ada yang Salah! Coba Lagi!
                </div>";
         }
      }
      ?>
      <form class="pt-3 bg-white" method="POST" action="includes/lapangan_diambil.inc.php">
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Nama Barang</strong></label>
               <input type="text" name="namaBarang" placeholder="Nama Barang..." class="form-control" required name="NamaB">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>ID Barang</strong></label>
               <input type="text" name="idBarang" placeholder="ID Barang..." class="form-control" required name="IdBarang">
            </div>
         </div>
         <hr class="mt-5 mb-5">

         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Tanggal</strong></label>
               <input type="date" name="tanggal" placeholder="tanggal..." class="form-control" required name="tanggal">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Waktu</strong></label>
               <input type="time" name="waktu" placeholder="Waktu..." class="form-control" required name="waktu">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>ID Pegawai</strong></label>
               <input type="text" name="idPegawai" placeholder="ID Pegawai..." class="form-control" required name="IdPegawai">
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