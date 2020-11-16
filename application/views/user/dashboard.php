<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/styledashboard.css');?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>
  <div class="navbar">
   <h3 class="admin">Travelokal</h3>
  </div>
  <div class="sidebar">
   <div class="nav"></div>
   <a href="<?php echo base_url() ?>index.php/user/dashboard"><button class="btnn"><i style="margin-right: 5px" class="fa fa-home"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/user/paket"><button class="btnt"><i style="margin-right: 5px" class="fa fa-list"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/user/pesan"><button class="btnt"><i style="margin-right: 5px" class="fas fa-shuttle-van"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/user/profil"><button class="btnt"><i style="margin-right: 5px" class="fa fa-user"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/user/dashboard/logout" type="submit" class="btn btn-success"><button class="btnt"><i style="margin-right: 5px" class="fa fa-sign-out"></i></button><br></a>
  </div>
   <br>
   <h1>&nbsp Selamat datang <?php echo ucfirst($this->session->userdata('username')); ?>! </h1>
   <br>
   <img src="<?php echo base_url(); ?>assets/mobil.png" class="img-responsive" width=500px alt="Image">
   <?php
    echo "<font color='black'>
   <h4>&nbsp &nbsp &nbsp Travelokal adalah Layanan travel on time dengan rute keberangkatan Bekasi, Tasikmalaya dan Kuningan </h4>
   <h4>&nbsp &nbsp &nbsp Travelokal ini bertujuan untuk membantu mobilitas mahasiswa-mahasiswi jatinanagor yang ingin pulang ke kampung halamannya lebih mudah </h4>
   <h4>&nbsp &nbsp &nbsp Semua kendaraan yang ada dilengkapi dengan fasilatas yang sangat lengkap. Seperti full AC, full musik, reclining seat, dan juga bagasi.
   <h4>&nbsp &nbsp &nbsp Selain itu travel ini juga menerapkan layanan antar jemput door to door. Yang artinya kita akan dijemput di rumah atau di tempat kita berada dan diantarkan hingga
   <h4>&nbsp &nbsp &nbsp tujuan kita persis. Sejak ini rute baru hanya membuka 3 rute saja, dikarenakan 3 rute tersebut masih sedikit yang dilewati oleh travel lain.</h5>
   <br>
   <h4>&nbsp &nbsp &nbsp Rute layanan Travelokal :
   <h4>&nbsp &nbsp &nbsp 1. Jatinangor - Bekasi   
   <h4>&nbsp &nbsp &nbsp 2. Jatinangor - Tasikmalaya
   <h4>&nbsp &nbsp &nbsp 3. Jatinangor - Kuningan  
   <h4>&nbsp &nbsp &nbsp Dan sebaliknya
   <br>
   <br>
   <h4>&nbsp &nbsp &nbsp Jam layanan Travelokal bervariasi pada rute-rute yang di layani dari pukul 05.00 hingga pukul 23.00.</h4>
   <h4>&nbsp &nbsp &nbsp Keberangkatan setiap 1 jam sekali.
   <br>
   <br>
   <h4>&nbsp &nbsp &nbsp Travelokaler dapat selalu mengikuti info terbaru dilaman media sosial Travelokal :</h4>   
   <h4>&nbsp &nbsp &nbsp Facebook  : Travelokal  - https:///www.facebook.com/travelokal
   <h4>&nbsp &nbsp &nbsp Twitter   : @Travelokal - https:///www.twitter.com/travelokal
   <h4>&nbsp &nbsp &nbsp Instagram : @Travelokal - https:///www.instagram.com/travelokal
   <br>
   <br>
   <h3>&nbsp &nbsp &nbsp Berikut ini lokasi pool dan nomor kontak Travelokal :
   <h3><b>&nbsp &nbsp &nbsp Summarecon Mall Bekasi (SMB) </h3>
   <h4>&nbsp &nbsp &nbsp  Jl. Bulevard Ahmad Yani Blok M, Sentra Summarecon Bekasi </h4>
   <h3>&nbsp &nbsp &nbsp Telepon Reservasi :
   <h4>&nbsp &nbsp &nbsp  08212347656 (Telkomsel)
   <br>
   <br>
   <h3>&nbsp &nbsp &nbsp Ruko Plaza Asia (AP) </h3>
   <h4>&nbsp &nbsp &nbsp  Jl. KHZ Mustofa No.326, Tugujaya, Kec. Cihideung 
   <br>
   <h3>&nbsp &nbsp &nbsp Telepon Reservasi :
   <h4>&nbsp &nbsp &nbsp  085223855888 (Telkomsel)
   <br>
   <br>
   <h3>&nbsp &nbsp &nbsp Ruko Pasar Kramat Mulya </h3>
   <h4>&nbsp &nbsp &nbsp Jl. Kramat Mulya Kuningan
   <br>
   <h3>&nbsp &nbsp &nbsp Telepon Reservasi :
   <h4>&nbsp &nbsp &nbsp  082124789988 (Telkomsel)
   <br>
   <br>
   <h3>&nbsp &nbsp &nbsp Jatinangor Town Square (JATOS) </h3>
   <h4>&nbsp &nbsp &nbsp Jl. Raya Bandung Sumedang, Cikeruh, Kec. Jatinangor
   <br>
   <h3>&nbsp &nbsp &nbsp Telepon Reservasi :
   <h4>&nbsp &nbsp &nbsp  085353778889 (Telkomsel) 
    

   <br>"; ?>

  </div>
 </body>
 </html>
