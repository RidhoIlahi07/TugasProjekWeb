<?php 
include 'koneksi.php';
session_start();
$id_pengguna = $_POST['id_pengguna'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun = $_POST['tahun'];
$deskripsi = $_POST['deskripsi'];
$status = 9;
$ekstensi_diperbolehkan = array('png','jpg');
$query = mysqli_query($koneksi,"SELECT * FROM data_donasi ORDER BY id_buku DESC");
$data = mysqli_fetch_array($query);
$nama = $data['id_buku']+1;
$x = explode('.', $nama);
$ekstensi = strtolower(end($x));
$tipe_file = $_FILES['gambar']['type'];
$ukuran = $_FILES['gambar']['size'];
$file_tmp = $_FILES['gambar']['tmp_name'];  
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
  if($ukuran < 1044070){      
    $perintah_donasi = "INSERT INTO data_donasi(id_buku, id_pengguna, judul_buku, pengarang, tahun_terbit, deskripsi, status) VALUES($nama,$id_pengguna,'$judul','$pengarang',$tahun,'$deskripsi',$status)";
    $query= mysqli_query($koneksi,$perintah_donasi);
    if($query){
      move_uploaded_file($file_tmp, '../VIEW/img/buku/'.$nama.'.jpg');
      header("location:../VIEW/pengguna/donasi.php");
    }else{
        // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "$id_pengguna $nama $judul $pengarang $tahun $deskripsi $status";
      echo "<br><a href='form.php'>Kembali Ke Form</a>";
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