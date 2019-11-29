<!DOCTYPE html>
<html>
<head> 
    <link rel="stylesheet" type="text/css" href="../css/home-pegawai.css">
    <?php 
    session_start();
    include '../../controler/koneksi.php';
    $username=$_SESSION['username'];
    $query = mysqli_query($koneksi,"SELECT * FROM pegawai where username='$username'");
    $data = mysqli_fetch_array($query)
    ?>
    <title></title>
</head>
<body>

    <table>
        <div class="header">
            <div class="header">
                <div >
                    <div class="logoo">
                        <img src="../img/a.png" width=200px; height=50px;>
                    </div>
                    <ul class="user">
                        <?php 
                        if (isset($_SESSION['username'])){
                            echo '<a onclick="konfirmasi();" href="../../controler/logout.php">Keluar</a>';
                            echo '<a href"home-pegawai-profil.php"> Hi, '.$_SESSION['username'].'</a>';
                            
                        } 
                        else{echo '<a href="login.php">Masuk/Daftar</a>';}
                        ?>
                        <script language = "javascript">
                            function konfirmasi(){
                                var tanya = confirm("Apakah Anda Yakin ?");
                                if (tanya == true){
                                    window.location.href = "logout.php"; 
                                }
                            }
                        </script>
                    </ul> 
                    <ul class="user1">
                        <a href="home-pegawai.php"><p>Beranda</p></a>
                    </ul> 
            </div>
        </div>
    </table>


<br><br><br><br><br><br>
<ul class="ul">
			<div>
				<li class="li"><a href="home-pegawai-profil.php">Profil</a></li>
			</div>
			<div>
				<li class="li"><a href="home-pegawai-update.php">Tambah Buku</a></li>
			</div>
			<div>
				<li class="li"><a href="home-pegawai-verifikasi.php">Verifikasi Buku</a></li>
			</div>
			<div>
				<li class="li"><a href="home-pegawai-listbuku.php">Edit Buku</a></li>
			</div>
			<div>
				<li class="li"><a href="home-pegawai-listdonasi.php">Data Donasi</a></li>
			</div>
			<div>
				<li class="li"><a href="home-pegawai-listtukar.php">Data Tukar</a></li>
			</div>
	</ul>

<div style="margin-left:25%;padding:1px 16px;height:100%;">
    <section>
       <article class="article">
        <div class="judul_data"><b>Edit Profil  </b></div>
        <br>
        <form action="../../controler/proses-edit-pegawai.php" method="post">
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
                      <input type="text" class="form_login" name="id" readonly="true" value="<?php echo $data['id_pegawai']; ?>"> 
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
                  <input type="text" class="form_login" name="nama" value="<?php echo $data['nama']; ?>" placeholder="Nama Pegawai.." required="required"> 
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
              <input type="text" class="form_login" name="username" value="<?php echo $data['username']; ?>" placeholder="Nama Pegawai.." required="required"> 
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
          <input type="password" class="form_login" name="password" value="<?php echo $data['password']; ?>" placeholder="Password.." required="required"> 
      </div>
  </div>                              
</div>
<input type="submit" class="tombol-simpan" value="SIMPAN">
</div>
</form> 
</article> 
</section>
</div>    
</body>
</html>