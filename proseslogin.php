<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	if($cek>0){
		$_SESSION['username'] = $username;
		header("location:home.php");
	}else{
		header("location:login.php");
	}
}else{
	header("location:login.php");
}
?>