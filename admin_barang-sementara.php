<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<body>
   <?php
   include_once 'header.php';
   include_once 'includes/database.php';

   $result = mysqli_query($conn, "SELECT * FROM gudang_sementara");
   
   ?>
   <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-list mr-2"></i> DAFTAR BARANG SEMENTARA</h3>
      <hr>
      <table class="table table-hover text-center">
         <thead>
            <tr>
               <th scope="col">NO</th>
               <th scope="col">ID Barang</th>
               <th scope="col">Nama Barang</th>
               <th scope="col">Tanggal Diambil</th>
            </tr>
         </thead>
         <tbody>
            <?php $i = 1; ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
               <tr>
                  <td scope="row"><?= $i; ?></td>
                  <td><?= $row["idBarang"]; ?></td>
                  <td><?= $row["namaBarang"]; ?></td>
                  <td><?= $row["tanggal"]; ?></td>
               </tr>
               <?php $i++; ?>
            <?php endwhile; ?>
         </tbody>
      </table>
   </div>


</body>

</html>