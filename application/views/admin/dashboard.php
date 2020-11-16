<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
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
   <a href="<?php echo base_url() ?>index.php/admin/dashboard"><button class="btnn"><i style="margin-right: 5px" class="fa fa-home"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/admin/datauser"><button class="btnt"><i style="margin-right: 5px" class="fa fa-user"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/admin/datapaket"><button class="btnt"><i style="margin-right: 5px" class="fa fa-list"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/admin/datatiket"><button class="btnt"><i style="margin-right: 5px" class="fas fa-shuttle-van"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/admin/dashboard/logout" type="submit" class="btn btn-success"><button class="btnt"><i style="margin-right: 5px" class="fa fa-sign-out"></i></button><br></a>
  </div>
  <div class="wrapper">
   <div class="boxx">
    <div class="box1">
     <i class="fa fa-user fa-5x" style="color: white;margin:30px 20px"></i>
     <div class="title"><h2 class="int">Users</h2></div>
    </div>
    <div class="box2">
     <i class="fa fa-list fa-5x" style="color: white;margin:30px 20px"></i>
     <div class="title"><h2 class="intt">Paket</h2></div>
    </div>
    <div class="box3">
     <i class="fa fa-book fa-5x" style="color: white;margin:30px 20px"></i>
     <div class="title"><h2 class="inttt">Pesan</h2></div>
    </div>
    <div class="box4">
     <i class="fa fa-unlock fa-5x" style="color: white;margin:30px 20px"></i>
     <div class="title"><h2 class="intttt"></h2></div>
    </div>
   </div>
   <br>
   <p>
    
   </p>
  </div>
 </body>
 </html>
