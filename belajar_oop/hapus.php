<?php

include 'class.php';

$nama = $_GET["nama"];
$siswa -> hapus($nama);
echo "<script>alert('data terhapus');</script>";
echo "<script>location='tampilsiswa.php';</script>";

 ?>
 <br>
 <a href="tampilsiswa.php">Back</a>
