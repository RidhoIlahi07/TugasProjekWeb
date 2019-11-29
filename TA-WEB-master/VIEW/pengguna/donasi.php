<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/homecss.css">
    <link rel="stylesheet" type="text/css" href="../css/slideshowcss.css">
    <link rel="stylesheet" type="text/css" href="../css/galery.css">
    <title>Donasi</title>
    <?php 
    session_start();
    include '../../controler/koneksi.php';
    $username = $_SESSION['username'];
    $query = mysqli_query($koneksi,"SELECT * FROM pengguna where username='$username'");
    $data = mysqli_fetch_array($query);
    ?>
</head>
<body>
        <div class="header">
            <div class="main"> 
                <div class="logo">
                    <img src="../img/a.png">
                </div>
                <ul class="username">
                    <li> <?php 
                    if (isset($_SESSION['username'])){
                        echo '<a href"#">Hi, '.$_SESSION['username'].' !</a>';
                        echo '<li style="float: right;"><a class="out" onclick="konfirmasi();" href="#" ">Keluar</a></li>';
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
                <ul class="profilpic">
                    <a href="profil.php">
                        <img src="../img/x.png">
                    </a>
                </ul>
                <ul class="listUL">
                    <li><a href="home-user.php">Beranda</a></li>
                    <li><a href="daftar-buku.php">Daftar Buku</a></li>
                    <li class="active"><a href="donasi.php">Donasi</a></li>
                    <li><a href="../about_us.php">Tentang</a></li>
                </ul>
            </div>
        </div>
        <div id="navbar">
            <div class="logo2">
                <img src="../img/a.png">
            </div>
            <div class="listx">
                <a href="home-user.php">Beranda</a>
                <a href="daftar-buku.php">Daftar Buku</a>
                <a href="donasi.php">Donasi</a>
                <a href="../about_us.php">Tentang</a>
            </div>       
        </div>


<br>
<h1 class="judul" >DONASI BUKU</h1>
<br>

<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-80px";
        }
    }
</script>

<div class="donasi">
    <div class="wide">
        <div class="page-header">
           <br>	<h2>Data Buku</h2>
       </div>
       <form action="../../controler/proses-donasi.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="hidden" name="id_pengguna" class="input-control" placeholder="Judul Buku" value="<?php echo $data['id_pengguna']; ?>" required>
        </div>
        <br>
        <div>
            <label class="label-control ">Judul Buku</label>
            <input type="text" name="judul" class="input-control" placeholder="Judul Buku" required>
        </div>
        <br>
        <div>
            <label class="label-control ">Pengarang</label>
            <input type="text" name="pengarang" class="input-control" placeholder="Pengarang" required>
        </div>
        <br>
        <div>
            <label class="label-control ">Tahun Terbit</label>
            <input type="text" name="tahun" class="input-control" placeholder="Tahun Terbit" required>
        </div>
        <br>
        <div>
            <label class="label-control ">Deskripsi</label>
            <input type="text" name="deskripsi" class="input-controll" placeholder="Deskripsi" required>
        </div>
        <div>
            <p style="text-indent: 50px;">Gambar Buku :<input class="masukan-gambar" type="file" name="gambar" required></p>
        </div>  
        <div class="bt">
            <button type="submit" class="btn btn-primary">Tambah Buku</button>
        </div>
    </form>
</div>
</div>
</div>
<br><br>

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

</body>
</html>