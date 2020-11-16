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
   <a href="<?php echo base_url() ?>index.php/user/paket"><button class="btnt"><i style="margin-right: 5px" class="fa fa-list"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/user/pesan"><button class="btnt"><i style="margin-right: 5px" class="fas fa-shuttle-van"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/user/profil"><button class="btnn"><i style="margin-right: 5px" class="fa fa-user"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/user/dashboard/logout" type="submit" class="btn btn-success"><button class="btnt"><i style="margin-right: 5px" class="fa fa-sign-out"></i></button><br></a>
  </div>
   <br>
   <center><h1>Profil</h1>
   <br>
   <img src="<?php echo base_url(); ?>assets/profil.jpg" alt="profil-user" height="150px"/>
   <br><br>
   <p>Username : <?php echo ucfirst($this->session->userdata('username')); ?> </p><br>
   <p>Nama : <?php echo ucfirst($this->session->userdata('nama')); ?> </p><br>
   <p>Email : <?php echo ucfirst($this->session->userdata('email')); ?> </p>
   </center>
   <br><br><br>
   <center><h2>My Tikets</h2><br>
   <table width=1000px>
        <tr>
            <th>Kode Paket</th>
            <th>Nama Pemesan</th>
            <th>No. Telepon</th>
            <th>Tanggal Pesan</th>
            <th>Tanggal Keberangkatan</th>
            <th>Jam Keberangkatan</th>
            <th>Jumlah Pesanan</th>
            <th>Total Harga</th>

        </tr>
        <?php
            foreach ($pesan as $p){
        ?>   
        <tr>
            <td><?php echo $p->Kode_paket; ?></td>
            <td><?php echo $p->nama_pesan; ?></td>
            <td><?php echo $p->no_telp; ?></td>
            <td><?php echo $p->tgl_pesan; ?></td>
            <td><?php echo $p->tgl_berangkat; ?></td>
            <td><?php echo $p->jam; ?></td>
            <td><?php echo $p->jml_pesan; ?></td>
            <td><?php echo $p->total_harga; ?></td>
        </tr>   
        <?php
            }
        ?>
    </table>
    </center>
    <br><br>
    <center>HARAP BAYAR DI LOKASI DAN HADIR 30 MENIT SEBELUM KEBERANGKATAN</center>
  </div>
 </body>
 </html>
