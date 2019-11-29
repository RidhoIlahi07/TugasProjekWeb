<?php
include "koneksi.php";
$id_pengguna = $_POST['id_pengguna'];
$status = 1;
$id = $_POST['id_buku'];
$perintahtukar = mysqli_query($koneksi,"UPDATE tukar_buku SET status=$status where id_buku=$id");
$query= mysqli_query($koneksi,$perintahtukar);
if($query){
	header("location:../VIEW/pegawai/home-pegawai-listdonasi.php");
}

?>