<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Data Pegawai</title>
</head>
<body>
	<?php
	include '../../controler/koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE id_pegawai='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<div class="kotak_login">
			<a style="float: right; text-decoration: none;" href="home-admin-pegawai.php">X</a>
			<p style="text-align: center;">Edit Pegawai</p>
			<form action="../../controler/proses-update-pegawai.php" method="post">
				<center>
					<input type="text" class="form_login" name="id" readonly="true" value="<?php echo $d['id_pegawai']; ?>">
					<input type="text" class="form_login" name="nama" value="<?php echo $d['nama']; ?>" placeholder="Nama Pegawai.." required="required">
					<input type="text" class="form_login" name="username" value="<?php echo $d['username']; ?>"  placeholder="Username.." required="required">
					<input type="password" class="form_login" name="password" value="<?php echo $d['password']; ?>" placeholder="Password.." required="required">
					<input type="submit" class="tombol_login" value="Update">
				</center>
				<br/>
			</form>
		</div>
		<?php 
	}
	?>
</body>
</html>