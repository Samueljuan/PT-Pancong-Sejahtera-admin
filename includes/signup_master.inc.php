<?php

if (isset($_POST["submit"])) {
   // LOGIN SYSTEM
   $status = $_POST["signup-as"];
   $username = $_POST["uid"];
   $pwd = $_POST["pwd"];
   $pwdRepeat = $_POST["pwdrepeat"];

   require_once 'database.php';
   require_once 'functions.inc.php';


   if (invalidUid($username) !== false) {
      header("location: ../daftar.php?error=invaliduid");
      exit();
   }

   createUserMaster($conn,  $status, $username, $pwd);
} else {
   header("location: ../daftar.php");
}
