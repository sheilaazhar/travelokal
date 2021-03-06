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
   <a href="<?php echo base_url() ?>index.php/admin/dashboard"><button class="btnt"><i style="margin-right: 5px" class="fa fa-home"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/admin/datauser"><button class="btnt"><i style="margin-right: 5px" class="fa fa-user"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/admin/datapaket"><button class="btnn"><i style="margin-right: 5px" class="fa fa-list"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/admin/datatiket"><button class="btnt"><i style="margin-right: 5px" class="fas fa-shuttle-van"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/admin/dashboard/logout" type="submit" class="btn btn-success"><button class="btnt"><i style="margin-right: 5px" class="fa fa-sign-out"></i></button><br></a>
  </div>
   <br>
   <center><h1>Data Paket</h1></center>
  </div>
  <br>
  <br>
  <center><a href="<?php echo site_url('admin/datapaket/add'); ?>"><button type="button">Add</button></a></center>
  <br>
  <center>
   <table width=1000px>
        <tr>
            <th>Kode Paket</th>
            <th>Nama Paket</th>
            <th width="300px">Deskripsi</th>
            <th>Harga</th>
            <th>Action</th>
        </tr>
        <?php
            foreach ($paket as $p){
        ?>   
        <tr>
            <td><?php echo $p->Kode_Paket; ?></td>
            <td><?php echo $p->Nama_Paket; ?></td>
            <td><?php echo $p->Desc_Paket; ?></td>
            <td><?php echo $p->Harga_Paket; ?></td>
            <td>
            <a href="<?php echo site_url('admin/datapaket/edit').'/'.$p->Kode_Paket; ?>"><button id="edit" type="button">Edit</button></a>
            <a href="<?php echo site_url('admin/datapaket/delete').'/'.$p->Kode_Paket; ?>" onClick="return confirm('Delete data?')"><button id="delete" type="button">Delete</button></a>
            </td>
        </tr>   
        <?php
            }
        ?>
    </table>
    </center>
 </body>
 </html>
