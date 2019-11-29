<?php 
session_start();
if (isset($_SESSION['username'])){
  ?>
  <!DOCTYPE html>
  <html>
  <head>
   <link rel="stylesheet" type="text/css" href="../css/profil.css">
   <title>Profil</title>
   <?php 
   include '../../controler/koneksi.php';
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
              <a href="edit-profil.php"><b>Edit Profil</b></a>
            </div>
          </div>
          <div class="wide">
            <div class="judul_data"><b>Profil</b></div>
            <br>                                
            <div class="parent">
              <?php 
              $username = $_SESSION['username'];
              $query = mysqli_query($koneksi,"SELECT * FROM pengguna where username='$username'");
              $data = mysqli_fetch_array($query);
              $user_id = $data['id_pengguna'];
              $query1 = mysqli_query($koneksi,"SELECT * FROM data_donasi where id_pengguna=$user_id");
              $data1 = mysqli_num_rows($query1);
              $query2 = mysqli_query($koneksi,"SELECT * FROM tukar_buku where id_pengguna=$user_id and status=1");
              $data2 = mysqli_num_rows($query2);
              $query3 = mysqli_query($koneksi,"SELECT * FROM tukar_buku where id_pengguna=$user_id");
              $data3 = mysqli_num_rows($query3);
              ?>
              <div class="">
                <div class="kotak-data">
                  <div style="">
                   <b style="font-size: 30pt;"><?php echo "$data1"; ?></b>    
                 </div>
                 <div class="tes">
                   <b>Donasi</b>    
                 </div>
               </div>
             </div>                                 
             <div>
              <div class="kotak-data">
                <div style="">
                 <b style="font-size: 30pt;"><?php echo "$data2"; ?></b>    
               </div>
               <div class="tes">
                 <b>Transaksi Tukar</b>    
               </div>
             </div>
           </div>
           <div>
           </div>
         </div>
         <br><br><br>
         <div class="parent">
          <div class="kotak-besar">
            <b>Recent Update</b>
            <br><br>
            <div class="recent">
              <b class="ket">Donasi</b>
              <table class="tabel1">
                <tr>
                  <th>NO</th>
                  <th>Judul Buku</th>
                  <th>Status</th>
                </tr>
                <?php if(mysqli_num_rows($query1)>0){
                  $no = 1;
                  while($data = mysqli_fetch_array($query1)){
                    ?>
                    <tr>
                      <td><?php echo $no?></td>
                      <td>
                        <p><?php echo $data["judul_buku"];?></p>
                      </td> 
                      <td>
                        <?php 
                        if ($data["status"]==0) {
                          echo "Di Tolak";
                        }elseif ($data["status"]==1) {
                          echo "Di Terima";
                        }else{
                          echo "Menunggu";
                        }
                        ?>
                      </td>                         
                    </tr>
                    <?php $no++; } ?>
                  <?php } ?>
                </table>
                <b class="ket">Tabel Tukar</b>
                <table class="tabel1">
                  <tr>
                    <th>NO</th>
                    <th>Judul Buku</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                  </tr>
                  <?php if(mysqli_num_rows($query3)>0){
                    $no = 1;
                    while($data = mysqli_fetch_array($query3)){
                      ?>
                      <tr>
                        <td><?php echo $no?></td>
                        <td>
                          <p><?php echo $data["judul_buku"];?></p>
                        </td> 
                        <td>
                          <?php 
                          if ($data["status"]==0) {
                            echo "Di Terima";
                          }else{
                            echo "Dikirim";
                          }
                          ?>
                        </td>                         
                        <td>
                          <?php 
                          if ($data["status"]==0) {
                            echo '<p>Tidak Sesuai</p>';
                          }elseif ($data["status"]==1) {
                            echo '<p>Sesuai</p>';
                          }
                          else{
                            echo '<form class="form1" method="POST" action="../../controler/proses-terima-tukar-user.php">
                            <input type="hidden" name="id_pengguna" value="'.$data['id_pengguna'].'">
                            <input type="hidden" name="id_buku" value="'.$data['id_buku'].'">
                            <input type="submit" name="terima" class="blue" value="Terima">
                            </form>';}?>
                            </td>
                            </tr>
                            <?php $no++; } ?>
                            <?php } ?>
                            </table>
                            <div class="kotak-donasi">
                            <a href="donasi.php"><b>Donasi Sekarang</b></a>   
                            </div>
                            </div>
                            </div>                                 
                            </div>
                            </div>
                            </div>
                            <br><br>
                            </article> 
                            </section>
                            </div>
                            </div>

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
                            <?php 
                          } 
                          else{header("location: ../login.php");}
                          ?>