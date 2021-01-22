<?php
require_once 'database.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {
   $IDpelanggan = $_POST["IDpelanggan"];
   $nama = $_POST["nama"];
   $IDbarang = $_POST["IDbarang"];
   $hargaTebus = $_POST["hargaTebus"];
   $namaBarang = $_POST["namaBarang"];
   $tglKeluar = $_POST["tglKeluar"];
   $noRek = $_POST["noRek"];

   $sql2 = "DELETE a , b FROM resepsionis_masuk a, resepsionis_barang b WHERE a.idPelanggan='$IDpelanggan' AND b.idBarang ='$IDbarang'";
   $stmt2 = mysqli_query($conn, $sql2) or die(
      // header("location: ../resep_keluar.php?error=notPelBar")
      mysqli_error($conn)
   );
   if ($stmt2 == 1) {
      $sql3 = "INSERT INTO resepsionis_keluar (idBarang, idPelanggan, namaPemilik, namaBarang, tanggalKeluar, biaya, noRekening) 
   VALUES ('$IDbarang', '$IDpelanggan', '$nama', '$namaBarang', '$tglKeluar', '$hargaTebus', '$noRek')";
      $stmt3 = mysqli_query($conn, $sql3) or die(header("location: ../resep_keluar.php?error=barangLunas"));
      if ($stmt3 == 1) {
         header("location: ../resep_keluar.php?error=none");
      }
   } else {
      header("location: ../resep_keluar.php?error=stmtfailed");
   }
}
