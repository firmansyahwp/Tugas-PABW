<h2>Tambah Siswa</h2>
<form method="POST" enctype=multipart/form-data>
	<label>Nama</label>
	<input type="text" name="nm" value=""><br>
	<label>Alamat</label>
	<textarea name="alamat" value=""></textarea><br>
	<label>Foto</label>
	<input type="file" name="foto" value=""><br>

	<button type="submit" name="kirim">Simpan</button>
</form>

<?php
include 'class.php';
if(isset($_POST['kirim'])){
	$siswa -> get_siswa($_POST['nm'],$_POST['alamat'],$_FILES['foto']);
	echo "<script>alert('data tersimpan');</script>";
	echo "<script>location='tampilsiswa.php';</script>";
}
?>
