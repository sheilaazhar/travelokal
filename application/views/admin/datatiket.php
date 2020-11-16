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
   <a href="<?php echo base_url() ?>index.php/admin/datapaket"><button class="btnt"><i style="margin-right: 5px" class="fa fa-list"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/admin/datatiket"><button class="btnn"><i style="margin-right: 5px" class="fas fa-shuttle-van"></i></button><br></a>
   <a href="<?php echo base_url() ?>index.php/admin/dashboard/logout" type="submit" class="btn btn-success"><button class="btnt"><i style="margin-right: 5px" class="fa fa-sign-out"></i></button><br></a>
  </div>
   <br>
   <center><h1>Data Tiket</h1></center>
  </div>
  <br><br>
  <center><h2>Tikets</h2><br>
   <table width=1000px>
        <tr>
            <th>Kode Pesan</th>
            <th>ID user</th>
            <th>Kode Paket</th>
            <th>Nama Pemesan</th>
            <th>No. Telepon</th>
            <th>Tanggal Pesan</th>
            <th>Tanggal Keberangkatan</th>
            <th>Jam Keberangkatan</th>
            <th>Jumlah Pesanan</th>
            <th>Total Harga</th>
            <th>Action</th>

        </tr>
        <?php
            foreach ($pesan as $p){
        ?>   
        <tr>
            <td><?php echo $p->kode_pesan; ?></td>
            <td><?php echo $p->id_user; ?></td>
            <td><?php echo $p->Kode_paket; ?></td>
            <td><?php echo $p->nama_pesan; ?></td>
            <td><?php echo $p->no_telp; ?></td>
            <td><?php echo $p->tgl_pesan; ?></td>
            <td><?php echo $p->tgl_berangkat; ?></td>
            <td><?php echo $p->jam; ?></td>
            <td><?php echo $p->jml_pesan; ?></td>
            <td><?php echo $p->total_harga; ?></td>
            <td>
            <a href="<?php echo site_url('admin/datatiket/delete').'/'.$p->kode_pesan; ?>" onClick="return confirm('Delete data?')"><button id="delete" type="button">Delete</button></a>
            </td>
        </tr>   
        <?php
            }
        ?>
    </table>
    </center>
 </body>
 </html>
