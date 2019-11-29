<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="VIEW/css/homecss.css">
    <link rel="stylesheet" type="text/css" href="VIEW/css/slideshowcss.css">
    <link rel="stylesheet" type="text/css" href="VIEW/css/galery.css">
    <title>TukarBuku.com</title>
</head>
<body>
    <table>
       <div class="header">
        <div class="main">
            <div class="logo">
                <img src="VIEW/img/a.png">
            </div>
            <ul class="user">
                <li><a href="VIEW/login.php">Masuk</a></li>
                <li style="background-color: red;border-radius: 4px;"><a href="VIEW/daftar.php">Daftar</a></li>
            </ul>
            <ul class="listUL">
                <li class="active"><a href="home.php">Beranda</a></li>
                <li><a href="VIEW/pengguna/daftar-buku.php">Daftar Buku</a></li>
                <li><a href="#" onclick="konfirmasi();">Donasi</a></li>
                <li><a href="VIEW/about_us.php">Tentang</a></li>
                <script language = "javascript">
                    function konfirmasi(){
                        var tanya = confirm("Anda harus login terlebih dahulu");
                        if (tanya == true){
                            window.location.href = "VIEW/login.php"; 
                        }
                    }
                </script>
            </ul>
        </div>
    </div>
</table>
<div id="navbar">
    <div class="logo2">
        <img src="VIEW/img/a.png">
    </div>
    <div class="userx">
        <a href="VIEW/login.php">Masuk</a>
        <a href="VIEW/daftar.php">Daftar</a>         
    </div>
    <div class="listx">
        <a href="home.php">Beranda</a>
        <a href="VIEW/pengguna/Daftar-buku.php">Daftar Buku</a>
        <a href="" onclick="konfirmasi();">Donasi</a>
        <a href="VIEW/about_us.php">Tentang</a>
    </div>       
</div>

<br><br>

<div class="slideshow-container">
    <div class="mySlides fade">
        <img src="VIEW/img/slide2.PNG" style="width: 100%">
    </div>

    <div class="mySlides fade">
        <img src="VIEW/img/slide4.PNG" style="width: 100%">
    </div>

    <div class="mySlides fade">
        <img src="VIEW/img/slide3.PNG" style="width: 100%">
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
    include 'controler/koneksi.php';
    $query = mysqli_query($koneksi,"SELECT * FROM buku ORDER BY id_buku ASC");
    ?>
    <?php if(mysqli_num_rows($query)>0){
        for ($i=0; $i < 7 ; $i++) { 
            $data = mysqli_fetch_array($query);
            ?>
            <div class="gallery">
                <a href="VIEW/pengguna/tukar.php?id=<?php echo $data['id_buku']; ?>">
                <img src="<?php echo 'VIEW/img/buku/'.$data["id_buku"].'.jpg';?>" alt="Cinque Terre" width="600" height="400">
                    <div class="desc"><?php echo $data["judul_buku"];?></div></a>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
    <br><br>
    <p class="text">FAVORIT</p>
    <div class="utama">
    <?php 
    include 'controler/koneksi.php';
    $query = mysqli_query($koneksi,"SELECT * FROM buku ORDER BY id_buku ASC");
    ?>
    <?php if(mysqli_num_rows($query)>0){
        for ($i=0; $i < 7 ; $i++) { 
            $data = mysqli_fetch_array($query);
            ?>
            <div class="gallery">
                <a href="VIEW/pengguna/tukar.php?id=<?php echo $data['id_buku']; ?>">
                <img src="<?php echo 'VIEW/img/buku/'.$data["id_buku"].'.jpg';?>" alt="Cinque Terre" width="600" height="400">
                    <div class="desc"><?php echo $data["judul_buku"];?></div></a>
                </div>
            <?php } ?>
        <?php } ?>
    </div><br><br>

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