<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Masuk</title>
</head>
<body>
	<div class="kotak_login">
		<a style="float: right; text-decoration: none;" href="home.php">X</a>
		<p style="text-align: center;">DAFTAR</p>
		<form action="proseslogin.php" method="post">
			<center>
				<input type="text" class="form_login" name="nama" placeholder="Nama.." required="required">
				<input type="text" class="form_login" name="username" placeholder="Username.." required="required">
				<input type="password" class="form_login" name="password" placeholder="Password.." required="required">
				<label class="label">Jenis Kelamin : </label>
				<select style="float: right;" class="pilihan" name="jeniskelamin" required="required">
        			<option value="pria">Pria</option>
        			<option value="wanita">Wanita</option>
      			</select>
      			<label class="label">Tanggal Lahir : </label>
      			<input style="float: right;" type="date" class="pilihan" name="lahir" required="required">
      			<input type="text" class="form_login" name="nohp" placeholder="Nomot HP.." required="required">
				<input type="submit" class="tombol_login" value="DAFTAR">
			</center>
			<br/>
			<center>
				<p>Sudah punya akun? Klik <a href="login.php">Login</a> untuk masuk</p>
			</center>
		</form>
	</div>
</body>
</html>