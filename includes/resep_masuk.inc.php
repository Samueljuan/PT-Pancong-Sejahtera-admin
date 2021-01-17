<?php
require_once 'database.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {
   $nik = $_POST["nik"];
   $IDpelanggan = $_POST["IDpelanggan"];
   $namaDepan = $_POST["namaDepan"];
   $namaBelakang = $_POST["namaBelakang"];
   $alamat = $_POST["alamat"];
   $noHP= $_POST["noHP"];
   $noRek = $_POST["noRek"];
   //barang
   $IDbarang = $_POST["IDbarang"];
   $kodeBarang = $_POST["kodeBarang"];
   $namaBarang = $_POST["namaBarang"];
   $hargaBarang = $_POST["hargaBarang"];
   $tglMasuk = $_POST["tglMasuk"];
   $jatuhTempo = $_POST["jatuhTempo"];

   $sql1 = "INSERT INTO resepsionis_masuk (NIK, idPelanggan, namaDepan, namaBelakang, Alamat, noTlp, noRekening) VALUES ('$nik', '$IDpelanggan', '$namaDepan', '$namaBelakang', '$alamat', '$noHP', '$noRek')";
   $stmt1= mysqli_query($conn, $sql1) or die(mysqli_error($conn));
   if ($stmt1==1){
      $sql2 = "INSERT INTO resepsionis_barang(idBarang, idPelanggan, kodeKatBarang, namaBarang, harga, tglMasuk, jatuhTempo ) VALUES ('$IDbarang', '$IDpelanggan', '$kodeBarang', '$namaBarang', '$hargaBarang', '$tglMasuk', '$jatuhTempo')";
      $stmt2= mysqli_query($conn, $sql2) or die(mysqli_error($conn));
      if ($stmt2==1){
         header("location: ../resep_masuk.php?error=none");
      }
   }
   else{
      header("location: ../resep_masuk.php?error=stmtfailed");
   }
}
