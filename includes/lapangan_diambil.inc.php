<?php
require_once 'database.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {
   $IDbarang = $_POST["idBarang"];
   $namaBarang = $_POST["namaBarang"];
   $tanggal = $_POST["tanggal"];
   $waktu = $_POST["waktu"];
   $idPegawai = $_POST["idPegawai"];

   $sql1 = "INSERT INTO lapangan_diambil (idBarang , namaBarang, tanggal, waktu, idPegawai) VALUES ('$IDbarang', '$namaBarang', '$tanggal', '$waktu', '$idPegawai')";
   $stmt1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
   if ($stmt1== 1) {
      header("location: ../lapangan_diambil.php?error=none");
   } else {
      header("location: ../lapangan_diambil.php?error=stmtfailed");
   }
}
