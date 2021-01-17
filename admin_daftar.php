<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>
<?php
   include_once 'header.php';
   include_once 'includes/database.php';
   ?>
   <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-users mr-2"></i> DAFTAR KARYAWAN</h3>
      <hr>
      <?php
      if (isset($_GET["error"])) {
         if ($_GET["error"] == "stmtfailed") {
            echo "<div class='alert alert-danger' role='alert'>
                  Ada yang Salah! Coba Lagi!
                </div>";
         } else if ($_GET["error"] == "idpegawaitaken") {
            echo "<div class='alert alert-danger' role='alert'>
                  ID Pegawai telah terpakai!
                </div>";
         }else if ($_GET["error"] == "none") {
            echo "<div class='alert alert-primary' role='alert'>
                  Pendaftaran Berhasil!
                </div>";
         }
      }
      ?>

      <form class="pt-3 bg-white" method="POST" action="includes/signup.inc.php">
         <div class="row form-group">
            <div class="col-md-12" required name="Daftarsebagai">
               <label class="text-black" for="" ><strong>Daftar Sebagai</strong></label>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="" value="resepsionis">
                  <label class="form-check-label" for="inlineRadio1">Resepsionis</label>
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="" value="gudang">
                  <label class="form-check-label" for="inlineRadio2">Gudang</label>
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="" value="lapangan">
                  <label class="form-check-label" for="inlineRadio3">Lapangan</label>
               </div>
            </div>
         </div>

         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Nama Depan</strong></label>
               <input type="text" name="namaD" placeholder="Nama Depan..." class="form-control" required name="Nama Depan">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Nama Belakang</strong></label>
               <input type="text" name="namaB" placeholder="Nama Belakang..." class="form-control" required name="Nama Belakang">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Alamat</strong></label>
               <input type="text" name="alamat" placeholder="Alamat..." class="form-control" required name="Alamat">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>No. HP</strong></label>
               <input type="text" name="noHp" placeholder="No. HP..." class="form-control" required name="No. HP">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>NIK</strong></label>
               <input type="text" name="nik" placeholder="NIK..." class="form-control" required name="NIK">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>ID Pegawai</strong></label>
               <input type="text" name="idPegawai" placeholder="ID Pegawai..." class="form-control" required name="ID Pegawai">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <input type="submit" name="submit" class="btn btn-primary py-2 px-4 text-white">
            </div>
         </div>
      </form>
   </div>
   </div>

   <script src="js/jquery.min.js"></script>
   <script src="js/js/bootstrap.min.js"></script>
   <script src="js/jquery-migrate-3.0.1.min.js"></script>
   <script src="js/jquery.stellar.min.js"></script>
   <script src="js/scrollax.min.js"></script>
   <script src="js/main.js"></script>
</body>

</html>