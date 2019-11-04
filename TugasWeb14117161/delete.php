<h1>Hapus Data</h1>
<form method="POST" enctype=multipart/form-data>
	<label>Nama : </label>
	<input type="text" name="hpsnama"><br><br>
	<button type="submit" name="HapusData">Hapus</button>
</form>

<?php
include 'class.php';
if(isset($_POST['HapusData'])){
    $siswa -> hapus_data_siswa($_POST['hpsnama']);
	echo "<script>alert('data terhapus');</script>";
	echo "<script>location='tampilsiswa.php';</script>";
}
?>