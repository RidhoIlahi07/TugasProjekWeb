<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Tambah Pegawai</title>
</head>
<body>
	<div class="kotak_login">
		<a style="float: right; text-decoration: none;" href="home-admin-pegawai.php">X</a>
		<p style="text-align: center;">Tambah Pegawai</p>
		<form action="../../controler/prosestambahpegawai.php" method="post">
			<center>
				<input type="text" class="form_login" name="nama" placeholder="Nama Pegawai.." required="required">
				<input type="text" class="form_login" name="username" placeholder="Username.." required="required">
				<input type="password" class="form_login" name="password" placeholder="Password.." required="required">
				<input type="submit" class="tombol_login" value="Tambah">
			</center>
			<br/>
		</form>
	</div>
</body>
</html>