<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<body>
   <?php
   include_once 'header.php';
   include_once 'includes/database.php';
   ?>
   <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-calculator mr-2"></i> HITUNG HARGA</h3>
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

      <form class="pt-3 bg-white" method="POST" action="">
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
               <label class="text-black" for=""><strong>Tanggal Keluar</strong></label>
               <input type="date" name="tglKeluar" placeholder="Tanggal Keluar..." class="form-control" required name="tglKeluar">
            </div>
         </div>
         <div class="row form-group">
            <div class="col-md-12">
               <input type="submit" name="submit" class="btn btn-primary py-2 px-4 text-white">
            </div>
         </div>

         <?php
         if (isset($_POST["submit"])) {
            $hargaBarang = $_POST["hargaBarang"];
            $totalHarga = 0;

            $tglMasuk = $_POST["tglMasuk"];
            $date1 = date_create("$tglMasuk");
            $tglKeluar = $_POST["tglKeluar"];
            $date2 = date_create("$tglKeluar");

            $selisih = date_diff($date1, $date2);
            $totalSelisih = $selisih->format("%a");

            $pembagian = ceil($totalSelisih / 15);

            if ($hargaBarang < 50000) {
               $bunga = $pembagian * (0 / 100);
            } else if ($hargaBarang > 50000 && $hargaBarang < 500000) {
               $bunga = $pembagian * (3.4 / 100);
            } else if ($hargaBarang > 500000 && $hargaBarang < 20000000) {
               $bunga = $pembagian * (5.2 / 100);
            } else if ($hargaBarang > 20000000 && $hargaBarang < 1000000000) {
               $bunga = $pembagian * (4.5 / 100);
            } else if ($hargaBarang > 1000000000 && $hargaBarang < 2000000000) {
               $bunga = $pembagian * (5.2 / 100);
            }

            $totalBunga = $hargaBarang * $bunga;
            $totalHarga = $hargaBarang + $totalBunga;
         ?>

            <div class="row form-group">
               <div class="col-md-12">
                  <label class="text-black" for=""><strong>Rincian</strong></label>
                  <table class="table table-striped">
                     <tbody>
                        <tr>
                           <th>Harga Awal</th>
                           <td><?= number_format($hargaBarang) ?></td>
                        </tr>
                        <tr>
                           <th>Selama</th>
                           <td><?= number_format($totalSelisih) ?></td>
                        </tr>
                        <tr>
                           <th>Bunga</th>
                           <td><?= number_format($totalBunga) ?></td>
                        </tr>
                        <tr>
                           <th>Total</th>
                           <td><?= number_format($totalHarga) ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         <?php
         }
         ?>
      </form>
   </div>


</body>

</html>