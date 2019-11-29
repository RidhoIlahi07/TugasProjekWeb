<?php 
include "koneksi.php";
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];

if ($id!=null) {
	$perintah="UPDATE pegawai SET username='$username', password='$password', nama='$nama'  WHERE id_pegawai='$id'";
	$hasil=mysqli_query($koneksi,$perintah);
	header("location: ../VIEW/admin/home-admin-pegawai.php");	
}

else{echo "error gan $id ";}
?>