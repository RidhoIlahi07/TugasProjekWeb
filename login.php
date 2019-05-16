<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Masuk</title>
</head>
<body>
	<div class="kotak_login">
		<a style="float: right; text-decoration: none;" href="home.php">X</a>
		<p style="text-align: center;">LOGIN</p>
		<form action="proseslogin.php" method="post">
			<center>
				<input type="text" class="form_login" name="username" placeholder="Username.." required="required">
				<input type="password" class="form_login" name="password" placeholder="Password.." required="required">
				<input type="submit" class="tombol_login" value="LOGIN">
			</center>
			<br/>
			<center>
				<p>Belum punya akun? Klik <a href="daftar.php">Daftar</a> untuk mendaftar</p>
			</center>
		</form>
	</div>
</body>
</html>