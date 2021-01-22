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
      <h3><i class="fas fa-truck-loading mr-2"></i> DAFTAR BARANG KELUAR</h3>
      <hr>
      <?php
      if (isset($_GET["error"])) {
         if ($_GET["error"] == "none") {
            echo "<div class='alert alert-primary' role='alert'>
            Pelunasan Barang Berhasil!
          </div>";
         }
         else if ($_GET["error"] == "stmtfailed") {
            echo "<div class='alert alert-danger' role='alert'>
                  Ada yang Salah! Coba Lagi!
                </div>";
         } else if ($_GET["error"] == "notPelBar") {
            echo "<div class='alert alert-danger' role='alert'>
                  ID Pelanggan atau ID Barang Salah!
                </div>";
      }
      }
      ?>
      <form class="pt-3 bg-white" method="POST" action="includes/gudang_keluar.inc.php">
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>ID Barang</strong></label>
               <input type="text" name="IDbarang" placeholder="ID Barang..." class="form-control" required name="IDbarang">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Nama Barang</strong></label>
               <input type="text" name="namaBarang" placeholder="Nama Barang..." class="form-control" required name="Nama">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Tanggal Keluar</strong></label>
               <input type="date" name="tglKeluar" placeholder="Tanggal Keluar..." class="form-control" required name="tglKeluar">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>ID Pegawai</strong></label>
               <input type="text" name="idPegawai" placeholder="Id Pegawai..." class="form-control" required name="idPegawai">
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