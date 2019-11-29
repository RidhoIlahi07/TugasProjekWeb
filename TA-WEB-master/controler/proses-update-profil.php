<?php 
include "koneksi.php";
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$nomor_tlp = $_POST['nohp'];
$email = $_POST['email'];

if ($id!=null) {
	mysqli_query($koneksi,"UPDATE pengguna SET username='$username', password='$password', nama_pengguna='$nama', nomor_tlp='$nomor_tlp', email='$email' WHERE id_pengguna='$id'");

	header("location:../controler/logout.php");
}
else{echo "error gan $id";}

?>