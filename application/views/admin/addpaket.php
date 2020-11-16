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
   <a href="<?php echo base_url() ?>index.php/admin/addpaket"><button class="btnn"><i style="margin-right: 5px" class="fa fa-list"></i></button><br></a>
  </div>
   <br>
  <h1>&nbsp Input Data Paket</h1>
  </div>
  <br>
  <br>
    <form action="<?php echo site_url('admin/datapaket/add_process'); ?>" method="post">
    <div>&nbsp Kode Paket : 
    <input type="text" name="Kode_Paket" placeholder="Kode Paket" required></div>
    <br>
    <div>&nbsp Nama Paket : 
    <input type="text" name="Nama_Paket" placeholder="Nama Paket" required></div>
    <br>
    <div>&nbsp Deskripsi :
    <textarea name="Desc_Paket" cols="25" rows="10" maxlength="300" placeholder="Just 300 characters allowed"></textarea></div>
    <br>
    <div>&nbsp Harga :
    <input type="text" name="Harga_Paket" placeholder="Harga (Rupiah)" required></div>
    <br>
    &nbsp <button type="submit">Save</button>
    </form>
 </body>
 </html>
