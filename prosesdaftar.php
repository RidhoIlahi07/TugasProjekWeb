<?php 
	include "koneksi.php";
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$jenis_kelamin = $_POST['jeniskelamin'];
	$tanggal_lahir = $_POST['lahir'];

	$perintah="insert into user(nama, username, password, email, jenis_kelamin, tanggal_lahir) values('$nama','$username','$password','$email','$jenis_kelamin','$tanggal_lahir')";
	$hasil=mysqli_query($koneksi,$perintah);

	if ($hasil) {
		header("location: login.php");
	}

?>