<?php

include 'class.php';

$nama = $_GET["nama"];
$data = $siswa -> infoedit($nama);

 ?>

<?php foreach ($data as $key => $value) { ?>

<h2>Ubah Siswa</h2>
<form method="POST" enctype=multipart/form-data>
  <input type="hidden" name="id" value="<?php echo $value['id_siswa']; ?>">
	<label>Nama</label>
	<input type="text" name="nm" value="<?php echo $value['nama']; ?>"><br>
	<label>Alamat</label>
	<textarea name="alamat"><?php echo $value['alamat']; ?></textarea><br>
	<label>Foto</label>
	<input type="file" name="foto" value="<?php echo $value['foto']; ?>"><br>

	<button type="submit" name="ubah">Ubah</button>
</form>

<?php }

if(isset($_POST['ubah'])){
	$siswa -> ubah($_POST['id'],$_POST['nm'],$_POST['alamat'],$_FILES['foto']);
	echo "<script>alert('data diubah!');</script>";
	echo "<script>location='tampilsiswa.php';</script>";
}
?>
