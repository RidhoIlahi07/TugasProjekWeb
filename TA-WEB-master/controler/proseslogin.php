<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$cek = 0;

for ($i=0; $i < 3 ; $i++) { 
	if($i == 0){
		$login = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
		$cek = mysqli_num_rows($login);
		if ($cek>0) {
			$cek=1;
			break;
		}
	}else if ($i == 1) {
		$login = mysqli_query($koneksi,"select * from pegawai where username='$username' and password='$password'");
		$cek = mysqli_num_rows($login);
		if ($cek>0) {
			$cek=2;
			break;
		}
	}else{
		$login = mysqli_query($koneksi,"select * from pengguna where username='$username' and password='$password'");
		$cek = mysqli_num_rows($login);
		if ($cek>0) {
			$cek=3;
			break;
		}
	}
}

if($cek > 0){
	if($cek==1){
	$_SESSION['username'] = $username;
		header("location:../VIEW/admin/home-admin.php");
	}else if($cek==2){
	$_SESSION['username'] = $username;
		header("location:../VIEW/pegawai/home-pegawai.php");
	}else if($cek==3){
	$_SESSION['username'] = $username;
		header("location:../VIEW/pengguna/home-user.php");}
}else{
	header("location:../VIEW/login.php");
}
?>