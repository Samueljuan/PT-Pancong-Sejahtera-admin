<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<body>
   <?php
   include_once 'header.php';
   include_once 'includes/database.php';

   $result= mysqli_query ($conn, "SELECT rm.NIK, rm.idPelanggan, rm.namaDepan, 
   rm.namaBelakang, rb.idBarang, rb.namaBarang, rb.jatuhTempo  
   FROM resepsionis_masuk rm RIGHT JOIN resepsionis_barang rb 
   ON rm.idPelanggan = rb.idPelanggan");
   ?>
   <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-boxes mr-2"></i> DAFTAR BARANG RESEPSIONIS</h3>
      <hr>
      <table class="table table-hover text-center">
         <thead>
            <tr>
               <th scope="col">NO</th>
               <th scope="col">NIK</th>
               <th scope="col">ID Pelanggan</th>
               <th colspan="2" scope="col">Nama</th>
               <th scope="col">ID Barang</th>
               <th scope="col">Nama Barang</th>
               <th scope="col">Jatuh Tempo</th>
            </tr>
         </thead>
         <tbody>
            <?php $i = 1; ?>
               <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
               <td scope="row"><?= $i; ?></td>
               <td><?= $row["NIK"]; ?></td>
               <td><?= $row["idPelanggan"]; ?></td>
               <td><?= $row["namaDepan"]; ?></td>
               <td><?= $row["namaBelakang"]; ?></td>
               <td><?= $row["idBarang"]; ?></td>
               <td><?= $row["namaBarang"]; ?></td>
               <td><?= $row["jatuhTempo"]; ?></td>
            </tr>
            <?php $i++; ?>
               <?php endwhile; ?>
         </tbody>
      </table>
   </div>


</body>

</html>