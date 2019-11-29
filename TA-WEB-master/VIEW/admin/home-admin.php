<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/homecss.css">
  <link rel="stylesheet" type="text/css" href="../css/slideshowcss.css">
  <link rel="stylesheet" type="text/css" href="../css/home_admin.css">
  <?php 
  session_start();
  ?>
  <title></title>
</head>
<body>
  <table>
   <div class="header">
    <div class="main">
      <div class="logo">
        <img src="../img/a.png" >
      </div>
      <ul class="user">
        <li> <?php 
            if (isset($_SESSION['username'])){
                  echo '<a href"#">Hi, '.$_SESSION['username'].'</a>';
                  echo '<li style="float: right;"><a onclick="konfirmasi();" href="#">Keluar</a></li>';
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
    </div>
  </div>
</table>
<br></b><br></b>
<div class="imgcontainer">
  <img src="../img/x.png" alt="avatar" class="avatar">
</div>
<?php if (isset($_SESSION['username'])){echo '<p class="namaadmin">Hi, '.$_SESSION['username'].'</p>';}?>
<br><br><br><br><br><br><br>
<section>
  <a href="home-admin-pegawai.php">  <article class="article">
    <h1>Pegawai </h1>         
  </article>    
  <a href="home-admin-pengguna.php">  <article class="article">
    <h1>Pengguna </h1>         
  </article>  
</a>  
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