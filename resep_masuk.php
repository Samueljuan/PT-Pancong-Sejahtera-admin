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
      <h3><i class="fas fa-box-open mr-2"></i> DAFTAR BARANG MASUK</h3>
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
         } else if ($_GET["error"] == "nikExists") {
            echo "<div class='alert alert-danger' role='alert'>
                  Pelanggan Telah Melakukan Pegadaian Sebelumnya!
                </div>";
         } else if ($_GET["error"] == "kodeKatBarangExists") {
            echo "<div class='alert alert-danger' role='alert'>
                  Kode Barang Salah!
                </div>";
         }
      }
      ?>
      <form class="pt-3 bg-white" method="POST" action="includes/resep_masuk.inc.php">
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>NIK</strong></label>
               <input type="text" name="nik" placeholder="NIK..." class="form-control" required name="NIK">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>ID Pelanggan</strong></label>
               <input type="text" name="IDpelanggan" placeholder="ID Pelanggan..." class="form-control" required name="ID">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Nama Depan</strong></label>
               <input type="text" name="namaDepan" placeholder="Nama Depan..." class="form-control" required name="NamaD">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Nama Belakang</strong></label>
               <input type="text" name="namaBelakang" placeholder="Nama Belakang..." class="form-control" required name="NamaB">
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
               <input type="text" name="noHP" placeholder="No. HP..." class="form-control" required name="NoHp">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>No. Rekening</strong></label>
               <input type="text" name="noRek" placeholder="No. Rekening..." class="form-control">
            </div>
         </div>
         <hr class="mt-5 mb-5">

         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>ID Barang</strong></label>
               <input type="text" name="IDbarang" placeholder="ID Barang..." class="form-control" required name="IDbarang">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Kode Barang</strong></label>
               <input type="text" name="kodeBarang" placeholder="Kode Barang.." class="form-control" required name="kodeBarang">
            </div>
         </div>

         <!-- <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
               Dropdown
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
               <li><button class="dropdown-item" type="button">Action</button></li>
               <li><button class="dropdown-item" type="button">Another action</button></li>
               <li><button class="dropdown-item" type="button">Something else here</button></li>
            </ul>
         </div>

         <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <?php $i = 1; ?>

            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
               <option value="<?= $i; ?>" name="kodeBarang" value="<?= $row["kode"]; ?>"><?= $row["kode"]; ?></option>
               <?php $i++; ?>

            <?php endwhile; ?>

         </select> -->


         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Nama Barang</strong></label>
               <input type="text" name="namaBarang" placeholder="Nama Barang..." class="form-control" required name="namaBarang">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Harga Barang </strong></label>
               <div class="input-group">
                  <div class="input-group-prepend">
                     <div class="input-group-text">RP</div>
                  </div>
                  <input type="text" name="hargaBarang" placeholder="Harga Barang..." class="form-control" required name="namaBarang">
               </div>
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Tanggal Masuk</strong></label>
               <input type="date" name="tglMasuk" placeholder="Tanggal Masuk..." class="form-control" required name="tglMasuk">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <label class="text-black" for=""><strong>Jatuh Tempo</strong></label>
               <input type="date" name="jatuhTempo" placeholder="Jatuh Tempo..." class="form-control" required name="jatuhTempo">
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