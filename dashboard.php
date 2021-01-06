<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>
   <?php
   include_once 'header.php';
   ?>
   <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-chart-line mr-2"></i> DASHBOARD</h3>
      <hr>
      <!-- display-4 agar angkanya lebih besar -->
      <div class="row text-white">
         <div class="card bg-info ml-3 mr-4 mt-3" style="width: 18rem;">
            <div class="card-body">
               <div class="card-body-icon">
                  <i class="fas fa-mail-bulk mr-2"></i>
               </div>
               <h5 class="card-title">JUMLAH File</h5>
               <div class="display-4">12</div>
               <!-- pake back-end framework yang menggunakan database -->
               <a>
                  <p class="card-text text-white">Lihat Detail
                     <a href="https://localhost/PSIKOLOGI/php/file.php">
                        <i class="fas fa-angle-double-right ml-2 text-white"></i>
                     </a>
                  </p>
               </a>
            </div>
         </div>

         <div class="card bg-success ml-3 mr-4 mt-3" style="width: 18rem;">
            <div class="card-body">
               <div class="card-body-icon">
                  <i class="fas fa-comment-dots mr-2"></i>
               </div>
               <h5 class="card-title">JUMLAH Penunjang</h5>
               <div class="display-4">21</div>
               <!-- pake back-end framework yang menggunakan database -->
               <a>
                  <p class="card-text text-white">Lihat Detail<a href="#">
                        <i class="fas fa-angle-double-right ml-2 text-white"></i>
                     </a>
                  </p>
               </a>
            </div>
         </div>

         <div class="card bg-warning ml-3 mr-4 mt-3" style="width: 18rem;">
            <div class="card-body">
               <div class="card-body-icon">
                  <i class="fas fa-briefcase mr-2"></i>
               </div>
               <h5 class="card-title">JUMLAH Point</h5>
               <div class="display-4">100</div>
               <!-- pake back-end framework yang menggunakan database -->
               <a>
                  <p class="card-text text-white">Lihat Detail<a href="#">
                        <i class="fas fa-angle-double-right ml-2 text-white"></i>
                     </a>
            </div>
         </div>
      </div>

      <div class="row mt-4">
         <div class="card  ml-3 mr-4 mt-3 text-white text-center" style="width: 18rem;">
            <div class="card-header bg-danger display-4 pt-4 pb-4">
               <i class="fab fa-instagram"></i>
            </div>
            <div class="card-body">
               <h5 class="card-title text-danger">INSTAGRAM</h5>
               <a href="https://www.instagram.com" target="_blank" class="btn btn-danger">FOLLOW</a>
            </div>
         </div>

         <div class="card  ml-3 mr-4 mt-3 text-white text-center" style="width: 18rem;">
            <div class="card-header bg-info display-4 pt-4 pb-4">
               <i class="fab fa-facebook-square"></i>
            </div>
            <div class="card-body">
               <h5 class="card-title text-info">FACEBOOK</h5>
               <a href="https://www.facebook.com" target="_blank" class="btn btn-info">LIKE</a>
            </div>
         </div>

         <div class="card  ml-3 mr-4 mt-3 text-white text-center" style="width: 18rem;">
            <div class="card-header bg-primary display-4 pt-4 pb-4">
               <i class="fab fa-twitter"></i>
            </div>
            <div class="card-body">
               <h5 class="card-title text-primary">TWITTER</h5>
               <a href="https://www.twitter.com" target="_blank" class="btn btn-primary">FOLLOW</a>
            </div>
         </div>

      </div>
   </div>
   </div>

   <script src="js/jquery.min.js"></script>
   <script src="js/js/bootstrap.min.js"></script>
   <script src="js/jquery-migrate-3.0.1.min.js"></script>
   <script src="js/jquery.stellar.min.js"></script>
   <script src="js/scrollax.min.js"></script>
   <script src="js/main.js"></script>
</body>

</html>