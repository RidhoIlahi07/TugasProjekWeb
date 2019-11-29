<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/homecss.css">
	<link rel="stylesheet" type="text/css" href="../css/table-style.css">
	<link rel="stylesheet" type="text/css" href="../css/admin-tabel.css">
	<?php 
	session_start();
	include '../../controler/koneksi.php';
	$query = mysqli_query($koneksi,"SELECT * FROM pengguna ORDER BY id_pengguna ASC");
	?>	
	<title></title>
</head>
<body>
		<table>
		<div class="header">
			<div class="main">
			<div class="logo">
				<img src="../img/a.png" >
			</div>
			<ul class="user">
				<li> <?php 
					if (isset($_SESSION['username'])){
						echo '<a style="margin-right: 30px;" href="home-admin.php">Beranda</a>';
						echo '<a href"#" margin-right: 50px;>Hi, '.$_SESSION['username'].'</a>';
						echo '<li style="float: right; "><a onclick="konfirmasi();" href="#">Keluar</a></li>';
					}
					else{echo '<a href="../login.php">Masuk/Daftar</a>';}
					?>
					<script language = "javascript">
					function konfirmasi(){
						var tanya = confirm("Apakah Anda Yakin ?");
							if (tanya == true){
								window.location.href = "../../controler/logout.php"; 
							}
						}
							</script>
					</li>
			</ul>
			</div>
		</div>
		</table>
	<br><br><br><br><br>
	<section>
		<article class="article">
			<div class="judul_data"><b>DATA PENGGUNA</b></div>
			<table class="table1">
				<tr>
					<th>No</th>
					<th>Username</th>
					<th>ID</th>
					<th>Aksi</th>
				</tr>
				<?php if(mysqli_num_rows($query)>0){
					$no = 1;
					while($data = mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $data["username"];?></td>
							<td><?php echo $data["id_pengguna"];?></td> 
							<td>
								<a class="red"  href="../../controler/hapus-pengguna.php?id=<?php echo $data['id_pengguna']; ?>">HAPUS</a> |
								<a class="blue" href="update-pengguna-form.php?id=<?php echo $data['id_pengguna']; ?>">Update</a>
							</td>
						</tr>
						<?php $no++; } ?>
					<?php } ?>
				</table>  
			</article> 
		</section>
		<br><br><br><br><br>
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
		
	</body>
	</html>