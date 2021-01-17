<?php

if (isset($_POST["submit"])) {
   // LOGIN SYSTEM
   $status = $_POST["status"];
   $namaD = $_POST["namaD"];
   $namaB = $_POST["namaB"];
   $alamat = $_POST["alamat"];
   $noHp = $_POST["noHp"];
   $nik = $_POST["nik"];
   $idPegawai = $_POST["idPegawai"];

   require_once 'database.php';
   require_once 'functions.inc.php';

   if (idExists($conn, $idPegawai) !== false) {
      header("location: ../admin_daftar.php?error=idpegawaitaken");
      exit();
   }

   createUser($conn, $status, $namaD, $namaB, $alamat, $noHp, $nik, $idPegawai);
} else {
   header("location: ../daftar.php");
}
