<!DOCTYPE html>
<html>
<head> 
	<link rel="stylesheet" type="text/css" href="../css/daftar-buku.css">
	<title>Daftar Buku-TukarBuku.com</title>
	<?php 
		session_start();
		include '../../controler/koneksi.php';
		$queryy = mysqli_query($koneksi,"SELECT * FROM buku ORDER BY judul_buku ASC");
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
                        echo '<a href"#">Hi, '.$_SESSION['username'].' ! </a>';
                        echo '<li style="float: right;"><a class="out" onclick="konfirmasi();" href="#" ">Keluar</a></li>';
                    } 
                    else{echo '<li><a href="../login.php">Masuk</a></li>
                      <li style="background-color: red;border-radius: 4px;"><a href="../daftar.php">Daftar</a></li>';}
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
                  <?php 
                    if (isset($_SESSION['username'])){
                        echo '<a href="profil.php">
                        <img src="../img/x.png">
                    </a>';
                    } 
                    else{echo '' ;}
                  ?>                   
                </ul>
            <ul class="listUL">
				<li><?php 
                          if (isset($_SESSION['username'])){
                          echo '<a href="home-user.php">Beranda</a>';
                          } 
                          else{echo '<a href="../../home.php">Beranda</a>';}
                          ?>
				</li>
				<li class="active"><a href="daftar-buku.php">Daftar Buku</a></li>
                <li><?php 
                          if (isset($_SESSION['username'])){
                          echo '<a href="donasi.php">Donasi</a>';
                          } 
                          else{echo '<a href="#" onclick="konfirmasi1();">Donasi</a>';}
                          ?>
                    <script language = "javascript">
                        function konfirmasi1(){
                            var tanya = confirm("Anda harus login terlebih dahulu !");
                            if (tanya == true){
                                window.location.href = "../login.php"; 
                            }
                        }
                    </script>
                    </li>
				<li><a href="../about_us.php">Tentang</a></li>
				
            </ul>
        </div>
    </div>
	<div >
		<section>
				<div class="judul_data"><b>DAFTAR BUKU</b></div>
				<div class="parent">
					<div class="widee" >	
						<div class="wide" >
						<table class="table1">
							<?php if(mysqli_num_rows($queryy)>0){
								$no = 1;
								while($data = mysqli_fetch_array($queryy)){
									?>
									<tr >	
										<td class="jrk-buku"><a href="tukar.php?id=<?php echo $data['id_buku']; ?>"><?php echo $data["judul_buku"];?></a></td>		
									</tr>
									<?php } ?>
								<?php } ?>
						</table>  
						</div>
					</div>
						<div class="wide2"></div>
					<div class="widee1">
						<div class="wide1">
						<div class="terkini"><b>REKOMENDASI</b></div>
						<?php 						
							$query = mysqli_query($koneksi,"SELECT * FROM buku ORDER BY id_buku ASC");
						?>
							<div class="parent">
								<?php if(mysqli_num_rows($query)>0){
									for ($i=0; $i < 2 ; $i++) { 
										$data = mysqli_fetch_array($query);
								?>
										<div class="ter1">
										<a href="tukar.php?id=<?php echo $data['id_buku']; ?>">
											<img src="<?php echo '../img/buku/'.$data["id_buku"].'.jpg';?>" class="bold" alt="Cinque Terre" width="190" height="auto">
											<div class="desc"><?php echo $data["judul_buku"];?></div>
										</a>
										</div>
									<?php } ?>
								<?php } ?>
							</div>
							<div class="parent">
								<?php if(mysqli_num_rows($query)>0){
									for ($i=0; $i < 2 ; $i++) { 
										$data = mysqli_fetch_array($query);
								?>
								<div class="ter1">
								<a href="tukar.php?id=<?php echo $data['id_buku']; ?>">	
								<img   src="<?php echo '../img/buku/'.$data["id_buku"].'.jpg';?>" class="bold" alt="Cinque Terre"  width="190" height="auto">
									<div class="desc"><?php echo $data["judul_buku"];?></div>
									</a>
								</div>
								<?php } ?>
								<?php } ?>
							</div> 
						</div>
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
		</section>
	</div>
</body>
</html>