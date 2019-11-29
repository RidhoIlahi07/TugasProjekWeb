<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/homecss.css">
  <link rel="stylesheet" type="text/css" href="css/slideshowcss.css">
  <link rel="stylesheet" type="text/css" href="css/galery.css">
  <link rel="stylesheet" type="text/css" href="css/info.css">
  <?php 
  session_start();
  ?>
  <title></title>
</head>
<body>

    <div class="header">
            <div class="main"> 
                <div class="logo">
                    <img src="img/a.png">
                </div>
                <ul class="user">
                
                </ul>
                <ul class="username">
                    <li> <?php 
                    if (isset($_SESSION['username'])){
                        echo '<a href"#">Hi, '.$_SESSION['username'].' ! </a>';
                        echo '<li style="float: right;"><a class="out" onclick="konfirmasi();" href="#" ">Keluar</a></li>';
                    } 
                    else{echo '<li><a href="login.php">Masuk</a></li>
                      <li style="background-color: red;border-radius: 4px;"><a href="VIEW/daftar.php">Daftar</a></li>';}
                    ?>
                    <script language = "javascript">
                        function konfirmasi(){
                            var tanya = confirm("Apakah Anda Yakin ?");
                            if (tanya == true){
                                window.location.href = "../controler/logout.php"; 
                            }
                        }
                    </script>
                </li>
                </ul>
                <ul class="profilpic">
                  <?php 
                    if (isset($_SESSION['username'])){
                        echo '<a href="pengguna/profil.php">
                        <img src="img/x.png">
                    </a>';
                    } 
                    else{echo '';}
                  ?>
                    
                </ul>
                <ul class="listUL">
                    <li ><?php 
                        if (isset($_SESSION['username'])){
                        echo '<a href="pengguna/home-user.php">Beranda</a>';
                        }  
                        else{echo '<a href="../home.php">Beranda</a>';}
                        ?>
                    </li>
                    <li><a href="pengguna/daftar-buku.php">Daftar Buku</a></li>
                    <li><?php 
                          if (isset($_SESSION['username'])){
                          echo '<a href="pengguna/donasi.php">Donasi</a>';
                          } 
                          else{echo '<a href="#" onclick="konfirmasi1();">Donasi</a>';}
                          ?>
                    <script language = "javascript">
                        function konfirmasi1(){
                            var tanya = confirm("Anda harus login terlebih dahulu !");
                            if (tanya == true){
                                window.location.href = "login.php"; 
                            }
                        }
                    </script>
                    </li>
                    <li class="active" ><a href="about_us.php">Tentang</a></li>
                </ul>
            </div>
        </div>
<br></b><br></b><br></b><br></b><br></b>
<div class="imgcontainer">
  <img src="img/x.png" alt="avatar" class="avatar">
</div>
<section>
  <article class="art_utama ">
    <article class="aktiv_utama">
    </article>       
    <h1>TukarBuku.com</h1>
    <p class="p">TukarBuku.com adalah untuk mewujudkan proses tukar buku yang Aman dan Sederhana</p>
  </article>
</section>

<section>
  <article class="article">
    <article class="aktiv">
      <h1>Tujuan </h1>
      <p>Tujuan TukarBuku.com adalah untuk mewujudkan proses tukar buku yang Aman dan Sederhana.</p>
      <p>Kami yakin bahwa tukar menukar buku seharusnya aman dan simpel dengan patokan yang jelas.</p>
    </article>           
  </article>    
  <article class="article">
    <article class="aktiv">
      <h1>Tujuan</h1>
      <p>Tujuan TukarBuku.com adalah untuk mewujudkan proses tukar buku yang Aman dan Sederhana.</p>
      <p>Kami yakin bahwa tukar menukar buku seharusnya aman dan simpel dengan patokan yang jelas.</p>
    </article>           
  </article>  
  <article class="article">
    <article class="aktiv">
    </article>       
    <h1>Tujuan</h1>
    <p>Tujuan TukarBuku.com adalah untuk mewujudkan proses tukar buku yang Aman dan Sederhana.</p>
    <p>Kami yakin bahwa tukar menukar buku seharusnya aman dan simpel dengan patokan yang jelas.</p>
  </article>  
  <article class="article">
    <article class="aktiv">
    </article>       
    <h1>Tujuan</h1>
    <p>Tujuan TukarBuku.com adalah untuk mewujudkan proses tukar buku yang Aman dan Sederhana.</p>
    <p>Kami yakin bahwa tukar menukar buku seharusnya aman dan simpel dengan patokan yang jelas.</p>
  </article>   
  <article class="article">
    <article class="aktiv">
      <h1>LOKASI</h1>
      <p>PT. TukarBuku Online Indonesia </p>
      <p>Jl. Sriwijaya No.112</p>
      <p>Mataram, 83122 Indonesia</p>
      <p>Telp. 021-112209</p>
    </article>           
  </article>      
  <article class="article">
    <article class="aktiv">
      <h1>LOKASI</h1>
      <p>PT. TukarBuku Online Indonesia </p>
      <p>Jl. Sriwijaya No.112</p>
      <p>Mataram, 83122 Indonesia/p>
        <p>Telp. 021-112209</p>
      </article>           
    </article>      
  </section>

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