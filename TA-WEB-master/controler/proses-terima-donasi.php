<?php
include "koneksi.php";
$id_pengguna = $_POST['id_pengguna'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun = $_POST['tahun'];
$deskripsi = $_POST['deskripsi'];
$status = 1;
$id = $_POST['id_buku'];
$perintahtukar = mysqli_query($koneksi,"UPDATE data_donasi SET status=$status where id_buku=$id");
$perintah_buku = "insert into buku(id_buku, judul_buku, pengarang, tahun_terbit, deskripsi) VALUES($id,'$judul','$pengarang','$tahun','$deskripsi')";
$query= mysqli_query($koneksi,$perintah_buku);
if($query){
	header("location:../VIEW/pegawai/home-pegawai-listdonasi.php");
}

?>