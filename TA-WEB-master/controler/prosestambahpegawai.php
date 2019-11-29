<?php 
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];

$perintah="insert into pegawai(id_pegawai, username, password, nama) VALUES(NULL,'$username','$password','$nama')";
$hasil=mysqli_query($koneksi,$perintah);

if ($hasil) {
	header("location:../VIEW/admin/home-admin-pegawai.php");
}
else{echo "error";}
?>