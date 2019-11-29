<!DOCTYPE html>
<html>
<head> 
	<link rel="stylesheet" type="text/css" href="../css/home-pegawai.css">
	<title></title>
	<?php 
	session_start();
	include '../../controler/koneksi.php';
	$username=$_SESSION['username'];
	$query = mysqli_query($koneksi,"SELECT * FROM pegawai where username='$username'");
	$data = mysqli_fetch_array($query)
	?>
</head>
<body>
	<?php
	if (isset($_SESSION['username'])){
	} 
	else{echo '<a href="login.php">Masuk/Daftar</a>';}
	?>
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
			<article class="articlee">
				<div class="judul_data"><b>Profil</b></div>
				<div class="parent">
					<div class="narrow">
						<img class="imgcontainer" src="../img/x.png" width=200px; height=200px;>
						<a href="home-pegawai-profil-edit.php">
							<div class="tombol-edit">
								<b>Edit Profil</b>
							</div>
						</a>
					</div>
					<div class="wide">
						<div class="isi"><b>ID Pegawai</b>: <?php echo $data["id_pegawai"];?></div>
						<div class="isi"><b>Username</b>: <?php echo $data["username"];?></div>
						<div class="isi"><b>Nama Pegawai</b>: <?php echo $data["nama"];?></div>
					</div>
				</div>
				<br><br><br><br><br><br><br><br><br><br><br><br>
				<br><br>
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