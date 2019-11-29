<?php 
	include "koneksi.php";
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jeniskelamin'];
	$nomor_tlp = $_POST['nohp'];
	$email = $_POST['email'];

	$perintah="insert into pengguna(id_pengguna, username, password, nama_pengguna, jenis_kelamin, nomor_tlp, email) VALUES(NULL,'$username','$password','$nama','$jenis_kelamin','$nomor_tlp','$email')";
	$hasil=mysqli_query($koneksi,$perintah);

	if ($hasil) {
		header("location:../VIEW/login.php");
	}
?>