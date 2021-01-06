<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
   <title>PSIKOLOGI</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- bootstrap -->
   <link rel="stylesheet" href="css/css/bootstrap.min.css">

   <!-- Font Awesome -->
   <script src="https://kit.fontawesome.com/2b2328adf6.js" crossorigin="anonymous"></script>

   <!-- Font -->
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Lobster&family=Poppins:wght@200&display=swap" rel="stylesheet">

   <!-- Personal -->
   <link rel="stylesheet" href="css/login.css">


</head>

<body>
   <div class="container">
      <h4 class="text-center">FORM LOGIN</h4>
      <hr>

      <form action="includes/login.inc.php" method="POST">
         <?php
         if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
               echo "<div class='alert alert-danger' role='alert'>
                  Tolong diisi semua!
                </div>";
            } else if ($_GET["error"] == "wronglogin") {
               echo "<div class='alert alert-danger' role='alert'>
                  Username atau Password Salah!
                </div>";
            }
         }
         ?>
         <div class="form-gorup">
            <label for="">Username</label>
            <div class="input-group">
               <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-user"></i></div>
               </div>
               <input type="text" name="uid" class="form-control" placeholder="Masukan Username Anda">
            </div>
         </div>

         <div class="form-group">
            <label for="">Password</label>
            <div class="input-group">
               <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-lock"></i></div>
               </div>
               <input type="password" class="form-control" name="pwd" id="" placeholder="Masukkan Password Anda">
            </div>
         </div>

         <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
         <button type="reset" class="btn btn-danger">RESET</button>
         <a href="reset-password.php" class="href">Lupa Password?</a>
      </form>
   </div>

   <script src="js/jquery.min.js"></script>
   <script src="js/js/bootstrap.min.js"></script>
   <script src="js/jquery-migrate-3.0.1.min.js"></script>
   <script src="js/jquery.stellar.min.js"></script>
   <script src="js/scrollax.min.js"></script>
   <script src="js/main.js"></script>
</body>

</html>