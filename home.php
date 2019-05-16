<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="homecss.css">
    <link rel="stylesheet" type="text/css" href="slideshowcss.css">
    <link rel="stylesheet" type="text/css" href="galery.css">
    
	<title></title>
</head>
<body>
    <table>
	<div class="header">
        <div class="main">
            <div class="logo">
                <img src="a.png">
            </div>
            <ul class="user">
                <li><a href="login.php">Masuk</a></li>
                <li style="background-color: red;border-radius: 4px;"><a href="daftar.php">Daftar</a></li>
            </ul>
            <ul class="listUL">
                <li class="active"><a href="#">Beranda</a></li>
                <li><a href="#">Donasi</a></li>
                <li><a href="about_us.php">Tentang</a></li>
            </ul>
        </div>
    </div>
    </table>

    <div id="navbar">
            <div class="logo2">
                <img src="a.png">
            </div>
            <div align="center">
            <a href="">Beranda</a>
            <a href="#news">Donasi</a>
            <a href="#contact">Tentang</a>
            </div>
            <div align="right">
            <a href="">Masuk</a>
            <a href="#news">Login</a>         
            </div>
        
    </div>

    <br></b><br></b><br></b><br></b><br></b><br></b><br></b>
    
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="anak.jpg" style="width: 100%">
        </div>

        <div class="mySlides fade">
            <img src="anak1.jpg" style="width: 100%">
        </div>

        <div class="mySlides fade">
            <img src="anak3.jpg" style="width: 100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

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
        <div class="gallery">
            <a><img src="buku.jpg" alt="Cinque Terre" width="600" height="400"></a>
            <div class="desc">Add a description of the image here</div>
        </div>
        <div class="gallery">
            <a><img src="buku1.jpg" alt="Cinque Terre" width="600" height="400"></a>
            <div class="desc">Add a description of the image here</div>
        </div>
        <div class="gallery">
            <a><img src="buku.jpg" alt="Cinque Terre" width="600" height="400"></a>
            <div class="desc">Add a description of the image here</div>
        </div>
        <div class="gallery">
            <a><img src="buku1.jpg" alt="Cinque Terre" width="600" height="400"></a>
            <div class="desc">Add a description of the image here</div>
        </div>
        <div class="gallery">
            <a><img src="buku.jpg" alt="Cinque Terre" width="600" height="400"></a>
            <div class="desc">Add a description of the image here</div>
        </div>
        <div class="gallery">
            <a><img src="buku1.jpg" alt="Cinque Terre" width="600" height="400"></a>
            <div class="desc">Add a description of the image here</div>
        </div>
    </div>
    <br><br>
    <p class="text">FAVORIT</p>
    <div class="utama">
        <div class="gallery">
            <a><img src="buku.jpg" alt="Cinque Terre" width="600" height="400"></a>
            <div class="desc">Add a description of the image here</div>
        </div>
        <div class="gallery">
            <a><img src="buku1.jpg" alt="Cinque Terre" width="600" height="400"></a>
            <div class="desc">Add a description of the image here</div>
        </div>
        <div class="gallery">
            <a><img src="buku.jpg" alt="Cinque Terre" width="600" height="400"></a>
            <div class="desc">Add a description of the image here</div>
        </div>
        <div class="gallery">
            <a><img src="buku1.jpg" alt="Cinque Terre" width="600" height="400"></a>
            <div class="desc">Add a description of the image here</div>
        </div>
        <div class="gallery">
            <a><img src="buku.jpg" alt="Cinque Terre" width="600" height="400"></a>
            <div class="desc">Add a description of the image here</div>
        </div>
        <div class="gallery">
            <a><img src="buku1.jpg" alt="Cinque Terre" width="600" height="400"></a>
            <div class="desc">Add a description of the image here</div>
        </div>
    </div>
    <br><br>

    <br><br>
    <div class="footer" align="center">
		<table width=100%>
			<tr>
				<td align="left">
                    <!-- <script type="text/javascript">
						var x = new Date()
						var time=x.getHours()
						if(time>10)
							{document.write("Good Afternoon")}
						else {document.write("Good Morning")}
					</script> -->
				</td>
				<td align="center">
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
				</td>
				<td >
					<!-- <p id="demo" align = "right"> </p>
						<script >
						document.getElementById("demo").innerHTML = Date();
						</script> -->
				</td>
			</tr>
		</table>

	</div>	
    
</body>
</html>