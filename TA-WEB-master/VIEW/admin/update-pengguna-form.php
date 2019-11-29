<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Upadate Pengguna</title>
</head>
<body>
	<?php
	include '../../controler/koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE id_pengguna='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<div class="kotak_login">
			<a style="float: right; text-decoration: none;" href="home-admin-pengguna.php">X</a>
			<p style="text-align: center;">Update Pengguna</p>
			<form action="../../controler/proses-update-pengguna.php" method="post">
				<center>
					<input type="text" class="form_login" name="id" readonly="true" value="<?php echo $d['id_pengguna']; ?>">
					<input type="text" class="form_login" name="nama" value="<?php echo $d['nama_pengguna']; ?>" required="required">
					<input type="text" class="form_login" name="username" value="<?php echo $d['username']; ?>" required="required">
					<input type="password" class="form_login" name="password" value="<?php echo $d['password']; ?>" required="required">
					<input type="text" class="form_login" name="nohp" value="<?php echo $d['nomor_tlp']; ?>" required="required">
					<input type="text" class="form_login" name="email" value="<?php echo $d['email']; ?>" required="required">
					<input type="submit" class="tombol_login" value="Update">
				</center>
				<br/>
				<center>
					<a  href="admin/home-admin-pengguna.php">Kembali</a>
				</center>
			</form>
		</div>
		<?php 
	}
	?>
</body>
</html>