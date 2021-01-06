<?php

if (isset($_POST['submit'])) {

   $nik = $_POST['nik'];

   require_once 'database.php';
   require_once 'functions.inc.php';


   if (nikExists($conn, $nik) !== false) {
      header("location: ../phpAdmin/daftar.php?error=invalidnik");
      exit();
   }

   delete($conn, $nik);
}
else {
   header("location: ../phpAdmin/delete.php");
}