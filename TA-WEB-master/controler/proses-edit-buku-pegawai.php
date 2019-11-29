<?php 
include 'koneksi.php';
session_start();
$id_buku = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun = $_POST['tahun'];
$deskripsi = $_POST['deskripsi'];
$ekstensi_diperbolehkan = array('png','jpg');
$query = mysqli_query($koneksi,"SELECT * FROM buku ORDER BY id_buku DESC");
$data = mysqli_fetch_array($query);
$nama = $data['id_buku']+1;
$x = explode('.', $nama);
$ekstensi = strtolower(end($x));
$tipe_file = $_FILES['gambar']['type'];
$ukuran = $_FILES['gambar']['size'];
$file_tmp = $_FILES['gambar']['tmp_name']; 
if (isset($_POST['gambar'])){
  $target = '../VIEW/img/buku/'.$nama.'.jpg';
if (file_exists($target)) {
  	unlink($target);
 }
} 
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
  if($ukuran < 1044070){      
    move_uploaded_file($file_tmp, '../VIEW/img/buku/'.$nama.'.jpg');
    $perintah = "UPDATE buku SET judul_buku='$judul', pengarang='$pengarang', tahun_terbit=$tahun, deskripsi='$deskripsi' WHERE id_buku='$id_buku'";
    $query = mysqli_query($koneksi,$perintah);
    if($query){
      header("location:../view/pegawai/home-pegawai-listbuku.php");
    }else{
        // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    }
  }else{
    echo 'UKURAN FILE TERLALU BESAR';
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
  echo "<br><a href='form.php'>Kembali Ke Form</a>";
}
?>