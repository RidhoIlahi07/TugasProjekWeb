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
                <li><a href="login.php">LogOut</a></li>
            </ul>
        </div>
    </div>
    </table>
    <br></b><br></b>
           <div class="imgcontainer">
                <img src="user.png" alt="avatar" class="avatar">
            </div>
            <section>
                  <article class="art_utama ">
                    <article class="aktiv_utama">
                    </article>       
                        <script  language="JavaScript" >
                            var name=prompt("Masukkan Nama Anda","")
                                if(name!=null&&name!=""){
                                    document.write("Welcome "+name)    			
                                }
                        </script>
                      <p class="p">kerjakanse</p>
                </article>
            </section>

    <section>
          <article class="article">
              <article class="aktiv">
                <h1>Pegawai </h1>
              </article>           
          </article>    
          <article class="article">
              <article class="aktiv">
                <h1>Pengguna</h1>
              </article>           
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