<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="homecss.css">
    <link rel="stylesheet" type="text/css" href="slideshowcss.css">
    <link rel="stylesheet" type="text/css" href="galery.css">
    <link rel="stylesheet" type="text/css" href="info.css">
	<title></title>
</head>
<body>
    <table>
	<div class="header">
        <div class="main">
            <div class="logo">
                <img src="a.png" >
            </div>
            <ul class="user">
                <li><a href="login.php">Masuk</a></li>
                <li style="background-color: red;border-radius: 4px;"><a href="daftar.php">Daftar</a></li>
            </ul>
            <ul class="listUL">
                <li class="active"><a href="home.php">Beranda</a></li>
                <li><a href="#">Donasi</a></li>
                <li><a href="about_us.php">Tentang</a></li>
            </ul>
        </div>
    </div>
    </table>
    <br></b><br></b><br></b><br></b><br></b>
    
    <section>
          <nav>
            <ul class="tulisan">
             tentang kami
            </ul>
          </nav>
          
          <article>
            <h1>London</h1>
            <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
            <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
          </article>
          <article>
            <h1>London</h1>
            <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
            <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
          </article>
          <article>
            <h1>London</h1>
            <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
            <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
          </article>        
    </section>
    


    
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