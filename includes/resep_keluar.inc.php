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

   $sql1= "INSERT INTO resepsionis_keluar (idBarang, idPelanggan, namaPemilik, namaBarang, tanggalKeluar, biaya, noRekening) 
   VALUES ('$IDbarang', '$IDpelanggan', '$nama', '$namaBarang', '$tglKeluar', '$hargaTebus', '$noRek')";
   $stmt1= mysqli_query($conn, $sql1) or die(mysqli_error($conn));

   $sql2= "DELETE FROM resepsionis_masuk WHERE idPelanggan='$IDpelanggan'";
   $stmt2= mysqli_query($conn, $sql2) or die(mysqli_error($conn));
   if ($stmt2==1){
      $sql3= "DELETE FROM resepsionis_barang WHERE idBarang ='$IDbarang'";
      $stmt3= mysqli_query($conn, $sql3) or die(mysqli_error($conn));
      if ($stmt3==1){
         header("location: ../resep_keluar.php?error=none");

      }
   }
   else{
      header("location: ../resep_keluar.php?error=stmtfailed");
   }
   // if ($stmt1==1){
   //    $sql2 = "INSERT INTO barang(idBarang, idPelanggan, kodeKatBarang, namaBarang, harga, tglMasuk, jatuhTempo ) VALUES ('$IDbarang', '$IDpelanggan', '$kodeBarang', '$namaBarang', '$hargaBarang', '$tglMasuk', '$jatuhTempo')";
   //    $stmt2= mysqli_query($conn, $sql2) or die(mysqli_error($conn));
   //    if ($stmt2==1){
   //       header("location: ../resep_masuk.php?error=none");
   //    }
   // }
   // else{
   //    header("location: ../resep_masuk.php?error=stmtfailed");
   // }
}
