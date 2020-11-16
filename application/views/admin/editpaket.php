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
   <a href="<?php echo base_url() ?>index.php/admin/editpaket"><button class="btnn"><i style="margin-right: 5px" class="fa fa-list"></i></button><br></a>
  </div>
   <br>
   <center><h1>Edit Data Paket</h1></center>
  </div>
  <br>
  <br>
  <center>
    <form action="<?php echo site_url('admin/datapaket/edit_process'); ?>" method="post">
    <input type="hidden" name="Kode_Paket" value="<?php echo $paket->Kode_Paket; ?>">
    <br>
    <div>&nbsp Nama Paket :
    <input type="text" name="Nama_Paket" placeholder="Nama Paket" value="<?php echo $paket->Nama_Paket; ?>" required>
    </div>
    <br>
    <div>&nbsp Deskripsi :
    <textarea name="Desc_Paket" cols="25" rows="10" maxlength="300" placeholder="Just 300 characters allowed" ><?php echo $paket->Desc_Paket; ?></textarea></div>
    <br>
    <div>&nbsp Harga :
    <input type="number" name="Harga_Paket" placeholder="Harga (Rupiah)" value="<?php echo $paket->Harga_Paket; ?>" required></div>
    <br><br>
    &nbsp <button type="submit">Save</button>
    </form>
 </center>
 </body>
 </html>
