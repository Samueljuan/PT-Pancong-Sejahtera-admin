<?php
require_once 'database.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {
   $IDbarang = $_POST["IDbarang"];
   $namaBarang = $_POST["namaBarang"];
   $tglKeluar = $_POST["tglKeluar"];
   $idPegawai = $_POST["idPegawai"];

   $sql1= "INSERT INTO gudang_keluar (idBarang , namaBarang	, tanggalKeluar, idPegawai) 
   VALUES ('$IDbarang', '$namaBarang', '$tglKeluar', '$idPegawai')";
   $stmt1= mysqli_query($conn, $sql1) or die(mysqli_error($conn));

   $sql2= "DELETE FROM gudang_masuk WHERE idBarang ='$IDbarang'";
   $stmt2= mysqli_query($conn, $sql2) or die(mysqli_error($conn));
   if ($stmt2==1){
      $sql3= "DELETE FROM gudang_barang WHERE idBarang ='$IDbarang'";
      $stmt3= mysqli_query($conn, $sql3) or die(mysqli_error($conn));
      if ($stmt3==1){
         header("location: ../gudang_keluar.php?error=none");

      }
   }
   else{
      header("location: ../gudang_keluar.php?error=stmtfailed");
   }

   // $sql2 = "DELETE a , b FROM gudang_masuk a, gudang_barang b WHERE a.idPelanggan='$IDpelanggan' AND b.idBarang ='$IDbarang'";
   // $stmt2 = mysqli_query($conn, $sql2) or die(
   //    // header("location: ../gudang_keluar.php?error=notPelBar")
   //    mysqli_error($conn)
   // ); 
   // if ($stmt2 == 1) {
   //    $sql3 = "INSERT INTO gudang_keluar (idBarang, idPelanggan, namaPemilik, namaBarang, tanggalKeluar, biaya, noRekening) 
   // VALUES ('$IDbarang', '$IDpelanggan', '$nama', '$namaBarang', '$tglKeluar', '$hargaTebus', '$noRek')";
   //    $stmt3 = mysqli_query($conn, $sql3) or die(header("location: ../gudang_keluar.php?error=barangLunas"));
   //    if ($stmt3 == 1) {
   //       header("location: ../gudang_keluar.php?error=none");
   //    }
   // } else {
   //    header("location: ../gudang_keluar.php?error=stmtfailed");
   // }

}
