<?php

function invalidUid($username){
   $result;
   if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
      $result = true;
   }
   else{
      $result= false;
   }
   return $result;
}

function pwdMatch($pwd, $pwdRepeat){
   $result;
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
      header ("location: ../daftar.php?error=stmtfailed");
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


function createUser($conn, $status, $username, $pwd){
   $sql = "INSERT INTO users(UsersStatus, usersUid, usersPwd) VALUES (?, ?, ?);";
   $stmt= mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)){
      header ("location: ../daftar.php?error=stmtfailed");
      exit();
   }

   $hasedPwd = password_hash($pwd, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "sss",  $status, $username, $hasedPwd);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header ("location: ../daftar.php?error=none");
   exit();
}

function emptyInputLogin($username, $pwd){
   $result;
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

      header ("location: ../dashboard.php");
      exit();
   }
}

function nikExists($conn, $nik){

   $sql = "SELECT * FROM users WHERE usersId = ? OR usersEmail = ?;";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)){
      header ("location: ../daftar.php?error=stmtfailed");
      exit();
   }

   mysqli_stmt_bind_param($stmt, "i", $nik); 
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

function delete($conn, $nik){
   $sql= "DELETE FROM users WHERE usersId=$nik;";
   $stmt= mysqli_query($conn, $sql);
   header("Location: ../delete.php");
}

function changePassword($conn, $name, $email, $nik, $status, $username, $pwd){
   $sql = "INSERT INTO users(usersName, usersEmail, usersId, UsersStatus, usersUid, usersPwd) VALUES (?, ?, ?, ?, ?, ?);";
   $stmt= mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)){
      header ("location: ../daftar.php?error=stmtfailed");
      exit();
   }

   $hasedPwd = password_hash($pwd, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $nik, $status, $username, $hasedPwd);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header ("location: ../daftar.php?error=none");
   exit();
}