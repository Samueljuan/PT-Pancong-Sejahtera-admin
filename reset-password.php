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
      <h4 class="text-center">RESET PASSWORD</h4>
      <hr>
      <p>An e-mail will be sent to you with intructions on how to reset your pasword</p>
      
      <form action="includes/reset-request.inc.php" method="POST">
      <div class="form-gorup">
         <label for="">E-mail</label>
         <div class="input-group">
            <div class="input-group-prepend">
               <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
            <input type="text" name="email" class="form-control" placeholder="Masukan E-mail Anda">
         </div>

         <button type="submit" class="btn btn-primary mt-3 btn-block" name="reset-request-submit">SUBMIT</button>

      </div>
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