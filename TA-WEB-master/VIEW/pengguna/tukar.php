<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/homecss.css">
    <link rel="stylesheet" type="text/css" href="../css/slideshowcss.css">
    <link rel="stylesheet" type="text/css" href="../css/galery.css">
    <title>Buku-TukarBuku.com</title>
</head>
<body>
    <?php
    include '../../controler/koneksi.php';
    session_start();
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"SELECT * FROM buku WHERE id_buku='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
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
                    <li><a href="home-user.php">Beranda</a></li>
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
                <a href="home.php">Beranda</a>
                <a href="#">Daftar Buku</a>
                <a href="#" onclick="konfirmasi();">Donasi</a>
                <a href="VIEW/about_us.php">Tentang</a>
            </div>       
        </div>
        <br><br>
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

        <div class="tukar" >
          <table border="0" cellpadding="20" cellspacing="20" >
        <tr >
            <td align="center"><img class="round" src="<?php echo '../../view/img//buku/'.$d["id_buku"].'.jpg';?>"></td>
            <td ><h2 class="judul" ><?php echo $d['judul_buku']; ?></h2><br>
                <P class="descrip"><?php echo $d['deskripsi']; ?>
            </p></td></tr>
        </table>
        <?php 
        $username = $_SESSION['username'];
        $query = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE username='$username'");
        $id_pengguna = mysqli_fetch_array($query);
        ?>
        <form action="../../controler/proses-tukar.php" method="POST">
            <input type="hidden" name="id_pengguna" value="<?php echo $id_pengguna['id_pengguna']; ?>">
            <input type="hidden" name="id_buku" value="<?php echo $d["id_buku"]; ?>">
            <input type="hidden" name="judul_buku" value="<?php echo $d["judul_buku"]; ?>">
            <input type="submit" class="tbltukar" value="TUKAR">
        </form>
        <br><br>
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
    <?php 
}
?>
</body>
</html>