<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from pengguna where id_pengguna='$id'");

header("location:../VIEW/admin/home-admin-pengguna.php");

?>