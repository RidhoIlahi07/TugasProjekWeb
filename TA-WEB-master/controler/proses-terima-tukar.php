<?php
include "koneksi.php";
$id_buku = $_POST['id_buku'];
$id_pengguna = $_POST['id_pengguna'];
$status = 1;
$perintahtukar = mysqli_query($koneksi,"UPDATE tukar_buku SET status=$status where id_buku=$id_buku");
if ($perintahtukar) {
	$id = $_GET['id_buku'];
	$nama = $id;
	$target = '../VIEW/img/buku/'.$nama.'.jpg';
	mysqli_query($koneksi,"delete from buku where id_buku='$id_buku'");
	header("location:../view/pegawai/home-pegawai.php");
}
?>