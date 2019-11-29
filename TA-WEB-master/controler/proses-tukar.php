<?php 
include "koneksi.php";
$id = $_POST['id_pengguna'];
$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$status = 9;
$query = mysqli_query($koneksi,"SELECT * FROM data_donasi where id_pengguna=$id");
$jumlah_donasi = mysqli_num_rows($query);
$query1 = mysqli_query($koneksi,"SELECT * FROM tukar_buku where id_pengguna=$id");
$jumlah_tukar = mysqli_num_rows($query1);
$cek = $jumlah_donasi-$jumlah_tukar;
if ($cek<2) {
	header("location: ../view/pengguna/donasi.php");
}
else{
	$perintahtukar = mysqli_query($koneksi,"insert into tukar_buku(id_tukar, id_pengguna, judul_buku, id_buku, status) values(NULL, $id, '$judul_buku', $id_buku, $status)");
	if ($perintahtukar) {
		header("location: ../view/pengguna/profil.php");
	}
}

?>