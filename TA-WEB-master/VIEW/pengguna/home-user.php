<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/homecss.css">
    <link rel="stylesheet" type="text/css" href="../css/slideshowcss.css">
    <link rel="stylesheet" type="text/css" href="../css/galery.css">
    <?php 
    session_start();
    ?>
    <title></title>
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
                        echo '<a href"#">Hi, '.$_SESSION['username'].' ! </a>';
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
                    <li class="active"><a href="home-user.php">Beranda</a></li>
                    <li><a href="daftar-buku.php">Daftar Buku</a></li>
                    <li><a href="donasi.php">Donasi</a></li>
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
    

<br><br>

<div class="slideshow-container">
    <div class="mySlides fade">
        <img src="../img/slide4.png" style="width: 100%">
    </div>

    <div class="mySlides fade">
        <img src="../img/slide1.png" style="width: 100%">
    </div>

    <div class="mySlides fade">
        <img src="../img/slide3.png" style="width: 100%">
    </div>
</div>
<br>

<div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
</div>
<br>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
</script>

<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-50px";
        }
    }
</script>

<p class="text">TERKINI</p>
    <div class="utama">
    <?php 
    include '../../controler/koneksi.php';
    $query = mysqli_query($koneksi,"SELECT * FROM buku ORDER BY id_buku ASC");
    ?>
    <?php if(mysqli_num_rows($query)>0){
        for ($i=0; $i < 7 ; $i++) { 
            $data = mysqli_fetch_array($query);
            ?>
            <div class="gallery">
                <a href="tukar.php?id=<?php echo $data['id_buku']; ?>">
                <img src="<?php echo '../img/buku/'.$data["id_buku"].'.jpg';?>" alt="Cinque Terre" width="600" height="400">
                    <div class="desc"><?php echo $data["judul_buku"];?></div></a>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
    <br><br>
    <p class="text">FAVORIT</p>
    <div class="utama">
    <?php 
    include '../../controler/koneksi.php';
    $query = mysqli_query($koneksi,"SELECT * FROM buku ORDER BY id_buku DESC");
    ?>
    <?php if(mysqli_num_rows($query)>0){
        for ($i=0; $i < 7 ; $i++) { 
            $data = mysqli_fetch_array($query);
            ?>
            <div class="gallery">
                <a href="tukar.php?id=<?php echo $data['id_buku']; ?>">
                <img src="<?php echo '../img/buku/'.$data["id_buku"].'.jpg';?>" alt="Cinque Terre" width="600" height="400">
                    <div class="desc"><?php echo $data["judul_buku"];?></div></a>
                </div>
            <?php } ?>
        <?php } ?>
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