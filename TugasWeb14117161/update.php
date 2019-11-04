<h1>Update Data</h1> <br>
<form method="POST" enctype=multipart/form-data>
	<label>Nama : </label>
	<input type="text" name="UpdateNama"><br><br>
    <label>Ubah Alamat : </label>
	<input type="text" name="alamat"><br><br>
	<button type="submit" name="update">Update</button>
</form>

<?php
include 'class.php';
if(isset($_POST['update'])){
    $siswa -> update_data_siswa($_POST['UpdateNama'],$_POST['alamat']);
	echo "<script>location='tampilsiswa.php';</script>";
}
?>