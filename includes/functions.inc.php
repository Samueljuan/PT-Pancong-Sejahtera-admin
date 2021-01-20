<?php

function invalidUid($username){
   if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
      $result = true;
   }
   else{
      $result= false;
   }
   return $result;
}

function pwdMatch($pwd, $pwdRepeat){
   if ($pwd !== $pwdRepeat){
      $result = true;
   }
   else{
      $result= false;
   }
   return $result;
}

function uidExists($conn, $username){
   $sql = "SELECT * FROM users WHERE usersUid = ?;";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)){
      header ("location: ../admin_daftar.php?error=stmtfailed");
      exit();
   }

   mysqli_stmt_bind_param($stmt, "s", $username); 
   mysqli_stmt_execute($stmt);

   $resultData= mysqli_stmt_get_result($stmt);

   if ($row = mysqli_fetch_assoc($resultData)){
      return $row;
   }
   else{
      $result=false;
      return $result;
   }

   mysqli_stmt_close($stmt);
}

function idExists($conn, $idPegawai){
   $sql = "SELECT * FROM pegawai WHERE idPegawai = ?;";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)){
      header ("location: ../admin_daftar.php?error=stmtfailed");
      exit();
   }

   mysqli_stmt_bind_param($stmt, "s", $idPegawai); 
   mysqli_stmt_execute($stmt);

   $resultData= mysqli_stmt_get_result($stmt);

   if ($row = mysqli_fetch_assoc($resultData)){
      return $row;
   }
   else{
      $result=false;
      return $result;
   }

   mysqli_stmt_close($stmt);
}



function createUser($conn, $status, $namaD, $namaB, $alamat, $noHp, $nik, $idPegawai){
   $sql = "INSERT INTO pegawai(statusPegawai, namaDepan, namaBelakang, Alamat, noTlp, NIK, idPegawai) VALUES (?, ?, ?, ?, ?, ?, ?);";
   $stmt= mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)){
      header ("location: ../daftar.php?error=stmtfailed");
      exit();
   }

   mysqli_stmt_bind_param($stmt, "sssssis", $status, $namaD, $namaB, $alamat, $noHp, $nik, $idPegawai);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header ("location: ../admin_daftar.php?error=none");
   exit();
}

function createUserMaster($conn, $status, $username, $pwd){
   $sql = "INSERT INTO users(UsersStatus, usersUid, usersPwd) VALUES (?, ?, ?);";
   $stmt= mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)){
      header ("location: ../admin_daftar master.php?error=stmtfailed");
      exit();
   }

   $hasedPwd = password_hash($pwd, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "sss", $status, $username, $hasedPwd);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header ("location: ../admin_daftar master.php?error=none");
   exit();
}

function emptyInputLogin($username, $pwd){
   if (empty ($username)|| empty ($pwd)){
      $result = true;
   }
   else{
      $result= false;
   }
   return $result;
}

function loginUser($conn, $username, $pwd){
   $uidExists = uidExists($conn, $username, $username);

   if ($uidExists === false){
      header ("location: ../index.php?error=wronglogin");
      exit();
   }

   $pwdHashed= $uidExists["usersPwd"];
   $checkPwd = password_verify($pwd, $pwdHashed);

   if ($checkPwd === false){
      header ("location: ../index.php?error=wronglogin");
      exit();
   } 
   else if ($checkPwd === true){
      session_start();
      
      $_SESSION["userid"] = $uidExists["usersId"];
      $_SESSION["usersStatus"] = $uidExists["usersStatus"];

      if ($_SESSION["usersStatus"] == 'gudang') {
         header ("location: ../gudang_masuk.php");
      } else if ($_SESSION["usersStatus"] == 'resepsionis') {
         header ("location: ../resep_masuk.php");
      } else if ($_SESSION["usersStatus"] == 'admin') {
         header ("location: ../admin_daftar_gudang.php");
      } else if ($_SESSION["usersStatus"] == 'lapangan') {
         header ("location: ../lapangan_daftar.php");
      }
      exit();
   }
}