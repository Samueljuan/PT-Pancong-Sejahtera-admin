<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<body>
   <?php
   include_once 'header.php';
   include_once 'includes/database.php';

   $result= mysqli_query ($conn, "SELECT * FROM pegawai");
   ?>
   <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-users mr-2"></i> LIST KARYAWAN</h3>
      <hr>
      <table class="table table-hover text-center">
         <thead>
            <tr>
               <th scope="col">NO</th>
               <th scope="col" colspan="2">Nama</th>
               <th scope="col">ID Pegawai</th>
               <th scope="col">NIK</th>
               <th scope="col">No. Tlp</th>
               <th scope="col">Alamat</th>
               <th scope="col">Status Pegawai</th>
            </tr>
         </thead>
         <tbody>
            <?php $i = 1; ?>
               <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
               <td scope="row"><?= $i; ?></td>
               <td><?= $row["namaDepan"]; ?></td>
               <td><?= $row["namaBelakang"]; ?></td>
               <td><?= $row["idPegawai"]; ?></td>
               <td><?= $row["NIK"]; ?></td>
               <td><?= $row["noTlp"]; ?></td>
               <td><?= $row["Alamat"]; ?></td>
               <td><?= $row["statusPegawai"]; ?></td>

            </tr>
            <?php $i++; ?>
               <?php endwhile; ?>
         </tbody>
      </table>
   </div>


</body>

</html>