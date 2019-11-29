<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/edit-profil.css">
	<title>Edit Profil</title>
    <?php 
    session_start();
    include '../../controler/koneksi.php';
    $username=$_SESSION['username'];
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
                    echo '<a href"#">Hi, '.$_SESSION['username'].'</a>';
                    echo '<li style="float: right;"><a onclick="konfirmasi();" href="#">Keluar</a></li>';                  
                    
                } 
                else{echo '<a href="login.php">Masuk/Daftar</a>';}
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
            <img src="../img/x.png">
        </ul>
        <ul class="listUL">
            <li><a href="#">Beranda</a></li>
            <li><a href="donasi.php">Donasi</a></li>
            <li><a href="about_us.php">Tentang</a></li>
        </ul>
    </div>
</div>

<div class="atur">
    <div >
        <section>
            <article class="article">
                <div class="parent">
                    <div class="narrow">
                        <img class="imgcontainer" src="../img/x.png" width=200px; height=200px;>
                        <div class="tombol-edit">
                            <b>Edit Profil</b>
                        </div>
                    </div>
                    <div class="wide">
                        <div class="judul_data"><b>Edit-Profil</b></div>
                        <br>   
                        <form action="../../controler/proses-update-profil.php" method="post">                             
                            <div class="parent">
                                <div class="kotak-data">
                                    <div class="tombol-form">
                                        <label>
                                            ID
                                        </label> 
                                    </div>
                                </div>
                                <div class="kotak-data">
                                    <div class="tombol-form1" >
                                        <input type="text" class="form_login" name="id" readonly="true" value="<?php echo $data['id_pengguna']; ?>"> 
                                    </div>
                                </div>                              
                            </div>
                            <div class="parent">
                                <div class="kotak-data">
                                  <div class="tombol-form">
                                    <label>
                                        Nama
                                    </label> 
                                </div>
                            </div>
                            <div class="kotak-data">
                                <div class="tombol-form1" >
                                    <input type="text" class="form_login" name="nama" value="<?php echo $data['nama_pengguna']; ?>"> 
                                </div>
                            </div>                              
                        </div>
                        <div class="parent">
                            <div class="kotak-data">
                              <div class="tombol-form">
                                <label>
                                    Username
                                </label> 
                            </div>
                        </div>
                        <div class="kotak-data">
                            <div class="tombol-form1" >
                                <input type="text" class="form_login" name="username" value="<?php echo $data['username']; ?>"> 
                            </div>
                        </div>
                    </div>
                    <div class="parent">
                        <div class="kotak-data">
                          <div class="tombol-form">
                            <label>
                                Password
                            </label> 
                        </div>
                    </div>
                    <div class="kotak-data">
                        <div class="tombol-form1" >
                            <input type="Password" class="form_login" name="password" value="<?php echo $data['password']; ?>"> 
                        </div>
                    </div>
                </div>
                <div class="parent">
                    <div class="kotak-data">
                      <div class="tombol-form">
                        <label>
                            Email
                        </label> 
                    </div>
                </div>
                <div class="kotak-data">
                    <div class="tombol-form1" >
                        <input type="text" class="form_login" name="email" value="<?php echo $data['email']; ?>"> 
                    </div>
                </div>
            </div>
            <input class="tombol-simpan" type="submit" value="SIMPAN">
        </form>
    </div>
</div>
<br><br>
</article> 
</section>
</div>
</div>
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