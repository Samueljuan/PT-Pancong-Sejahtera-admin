<?php
require_once 'database.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {
   $IDbarang = $_POST["IDbarang"];
   $namaBarang = $_POST["namaBarang"];
   $tglKeluar = $_POST["tglKeluar"];
   $idPegawai = $_POST["idPegawai"];

   $sql1= "INSERT INTO gudang_keluar (idBarang , namaBarang	, tanggalKeluar, idPegawai) 
   VALUES ('$IDbarang', '$namaBarang', '$tglKeluar', '$idPegawai')";
   $stmt1= mysqli_query($conn, $sql1) or die(mysqli_error($conn));

   $sql2= "DELETE FROM gudang_masuk WHERE idBarang ='$IDbarang'";
   $stmt2= mysqli_query($conn, $sql2) or die(mysqli_error($conn));
   if ($stmt2==1){
      $sql3= "DELETE FROM gudang_barang WHERE idBarang ='$IDbarang'";
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
