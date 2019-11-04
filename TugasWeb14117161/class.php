<?php
$mysqli = new mysqli("localhost","root","","crud");

class siswa{
	public $koneksi;
	function __construct($mysqli){
		$this -> koneksi = $mysqli;
	}
	function set_siswa(){
		$ambildata = $this -> koneksi -> query("select * from siswa");
		while($pecah = $ambildata -> fetch_assoc()){
			$data[] = $pecah;
		}
		return $data;
	}
	function get_siswa($nama,$alamat,$foto){
		$namafoto = $foto['name'];
		$lokasifoto = $foto['tmp_name'];
		move_uploaded_file($lokasifoto, "foto/$namafoto");
		$this -> koneksi -> query("insert into siswa (nama,alamat,foto) values ('$nama','$alamat','$namafoto')");
	}
	function hapus_data_siswa($nama){
		$this -> koneksi -> query("delete from siswa where nama = '$nama'");
	}
	function update_data_siswa($nama,$alamat){
		$this -> koneksi -> query("update siswa set alamat = '$alamat' where nama='$nama'");
	}
}
$siswa = new siswa($mysqli);
?>