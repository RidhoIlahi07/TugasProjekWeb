<?php 
include 'koneksi.php';
$id = $_GET['id'];
$nama = $id;
$target = '../VIEW/img/buku/'.$nama.'.jpg';
if (file_exists($target)) {
  	unlink($target);
 }
mysqli_query($koneksi,"delete from buku where id_buku='$id'");

header("location:../VIEW/pegawai/home-pegawai-listbuku.php");

?>