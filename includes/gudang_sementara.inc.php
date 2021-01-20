<?php
require_once 'database.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {
   $IDbarang = $_POST["IDbarang"];
   $namaBarang = $_POST["namaBarang"];
   $tanggalDiambil = $_POST["tanggalDiambil"];

   $sql1 = "INSERT INTO gudang_sementara (idBarang, namaBarang, tanggal) VALUES ('$IDbarang', '$namaBarang', '$tanggalDiambil')";
   $stmt1= mysqli_query($conn, $sql1) or die(mysqli_error($conn));
   if ($stmt1==1){
         header("location: ../gudang_sementara.php?error=none");
   }
   else{
      header("location: ../gudang_sementara.php?error=stmtfailed");
   }
}
