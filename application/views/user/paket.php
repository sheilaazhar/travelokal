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
  <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 15px;
        text-align: center;
    }
   </style>
 </head>
 <body>
  <div class="navbar">
   <h3 class="admin">Travelokal</h3>
  </div>
  <div class="sidebar">
   <div class="nav"></div>
   <a href="<?php echo base_url() ?>index.php/user/dashboard"><button class="btnt"><i style="margin-right: 5px" class="fa fa-home"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/user/paket"><button class="btnn"><i style="margin-right: 5px" class="fa fa-list"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/user/pesan"><button class="btnt"><i style="margin-right: 5px" class="fas fa-shuttle-van"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/user/profil"><button class="btnt"><i style="margin-right: 5px" class="fa fa-user"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/user/dashboard/logout" type="submit" class="btn btn-success"><button class="btnt"><i style="margin-right: 5px" class="fa fa-sign-out"></i></button><br></a>
  </div>
   <br>
   <center><h1> Paket Travel</h1></center>
  </div>
  <br><br>
  <center>
   <table width=1000px>
        <tr>
            <th>Kode Paket</th>
            <th>Nama Paket</th>
            <th width="300px">Deskripsi</th>
            <th>Harga</th>
        </tr>
        <?php
            foreach ($paket as $p){
        ?>   
        <tr>
            <td><?php echo $p->Kode_Paket; ?></td>
            <td><?php echo $p->Nama_Paket; ?></td>
            <td><?php echo $p->Desc_Paket; ?></td>
            <td><?php echo $p->Harga_Paket; ?></td>
        </tr>   
        <?php
            }
        ?>
    </table>
    </center>
 </body>
 </html>
