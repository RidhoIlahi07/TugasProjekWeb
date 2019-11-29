<!DOCTYPE html>
<html>
<head> 
	<link rel="stylesheet" type="text/css" href="../css/home-pegawai.css">
	<?php
	include '../../controler/koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM buku WHERE id_buku='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<title></title>
	</head>
	<body>

		<table>
			<div class="header">
				<div >
					<div class="logoo">
						<img src="../img/a.png" width=200px; height=50px;>
					</div>
					<ul class="user">
						<?php 
						if (isset($_SESSION['username'])){
							echo '<a onclick="konfirmasi();" href="../../controler/logout.php">Keluar</a>';
							echo '<a href"home-pegawai-profil.php">Hi, '.$_SESSION['username'].'</a>';
							
						} 
						else{echo '<a href="login.php">Masuk/Daftar</a>';}
						?>
						<script language = "javascript">
							function konfirmasi(){
								var tanya = confirm("Apakah Anda Yakin ?");
								if (tanya == true){
									window.location.href = "logout.php"; 
								}
							}
						</script>
					</ul> 
					<ul class="logo">
						<img src="../img/x.png" width=70px; height=70px;>                      
					</ul>
					<ul class="user1">
						<a href="home-pegawai.php"><p>Beranda</p></a>
					</ul> 
				</div>
			</div>
		</table>


		<br><br><br><br><br><br>
		<ul class="ul">
			<div>
				<li class="li"><a href="home-pegawai-profil.php">Profil</a></li>
			</div>
			<div>
				<li class="li"><a href="home-pegawai-update.php">Tambah Buku</a></li>
			</div>
			<div>
				<li class="li"><a href="home-pegawai-verifikasi.php">Verifikasi Buku</a></li>
			</div>
			<div>
				<li class="li"><a href="home-pegawai-listbuku.php">Edit Buku</a></li>
			</div>
			<div>
				<li class="li"><a href="home-pegawai-listdonasi.php">Data Donasi</a></li>
			</div>
			<div>
				<li class="li"><a href="home-pegawai-listtukar.php">Data Tukar</a></li>
			</div>
		</ul>

		<div style="margin-left:25%;padding:1px 16px;height:100%;">
			<section>
				<article class="article">
					<div class="judul_data"><b>Edit data</b></div>
					<div class="parent">
						
						<div class="wide">
							<div class="page-header ">
								<h2>Form Edit Buku</h2>
							</div>
							<form action="../../controler/proses-edit-buku-pegawai.php" method="post" enctype="multipart/form-data">
								<div>
								<label class="label-control ">ID Buku</label>
									<input type="text" name="id" class="input-control" readonly="true" placeholder="Judul Buku" value="<?php echo $d['id_buku']; ?>">
								</div>
								<br>
								<div>
									<label class="label-control ">Judul Buku</label>
									<input type="text" name="judul" class="input-control" placeholder="Judul Buku" value="<?php echo $d['judul_buku']; ?>">
								</div>
								<br>
								<div>
									<label class="label-control ">Pengarang</label>
									<input type="text" name="pengarang" class="input-control" placeholder="Pengarang" value="<?php echo $d['pengarang']; ?>">
								</div>
								<br>
								<div>
									<label class="label-control ">Tahun Terbit</label>
									<input type="text" name="tahun" class="input-control" placeholder="Tahun Terbit" value="<?php echo $d['tahun_terbit']; ?>">
								</div>
								<br>
								<div>
									<label class="label-control ">Deskripsi</label>
									<input type="text" name="deskripsi" class="input-controll" placeholder="Deskripsi" value="<?php echo $d['deskripsi']; ?>">
								</div>
								<div>
									<p style="text-indent: 50px;">Gambar Buku :<input class="masukan-gambar" type="file" name="gambar" required></p>
								</div>	
								<div class="bt">
									<button type="submit" class="btn btn-primary">Tambah Buku</button>
								</div>
							</form>
						</div>
						<?php 
					}
					?>
				</div>
				<br><br><br><br>

				<div class="footer" align="center">
					<p id="lol" font  ></p>
						<script >
							function Person(first, last, age, eye) {
								this.firstName = first;
								this.lastName = last;
								this.age = age;
								this.eyeColor = eye;
							}
								var orang1 = new Person("Ridho", "ilahi", 20, "blue");
								var orang2 = new Person("Rizki", "Rahmadi", 20, "green");
								var orang3 = new Person("Yusril", "Raihan", 20, "red");
									document.getElementById("lol").innerHTML =
									"Copyright &copy; 2014 " + orang1.firstName + " " + orang2.firstName + " And " + orang3.firstName;  
						</script>	
				</div>	
			</article> 
		</section>
	</div>


</body>
</html>