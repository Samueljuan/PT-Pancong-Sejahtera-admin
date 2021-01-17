<?php
require_once 'database.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {
   $IDpelanggan = $_POST["IDpelanggan"];
   $IDbarang = $_POST["IDbarang"];
   $namaBarang = $_POST["namaBarang"];
   $tglMasuk = $_POST["tglMasuk"];
   $jatuhTempo = $_POST["jatuhTempo"];
   $idPegawai = $_POST["idPegawai"];
   $kodeGudang = $_POST["kodeGudang"];

   $sql1 = "INSERT INTO gudang_masuk (idPelanggan, idBarang , namaBarang, tanggalMasuk, jatuhTempo, idPegawai, kodeGudang) VALUES ('$IDpelanggan', '$IDbarang', '$namaBarang', '$tglMasuk', '$jatuhTempo', '$idPegawai', '$kodeGudang')";
   $stmt1= mysqli_query($conn, $sql1) or die(mysqli_error($conn));
   if ($stmt1==1){
      $sql2 = "INSERT INTO gudang_barang(idBarang, namaBarang, kodeGudang, tanggalMasuk, jatuhTempo) VALUES ('$IDbarang', '$namaBarang', '$kodeGudang', '$tglMasuk', '$jatuhTempo')";
      $stmt2= mysqli_query($conn, $sql2) or die(mysqli_error($conn));
      if ($stmt2==1){
         header("location: ../gudang_masuk.php?error=none");
      }
   }
   else{
      header("location: ../gudang_masuk.php?error=stmtfailed");
   }
}
