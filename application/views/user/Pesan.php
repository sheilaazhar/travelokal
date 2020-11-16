<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<!DOCTYPE html>
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
        <a href="<?php echo base_url() ?>index.php/user/dashboard"><button class="btnt"><i style="margin-right: 5px"
                    class="fa fa-home"></i></button><br></a>
        <a href="<?php echo base_url() ?>index.php/user/paket"><button class="btnt"><i style="margin-right: 5px"
                    class="fa fa-list"></i></button><br></a>
        <a href="<?php echo base_url() ?>index.php/user/pesan"><button class="btnn"><i style="margin-right: 5px"
                    class="fas fa-shuttle-van"></i></button><br></a>
        <a href="<?php echo base_url() ?>index.php/user/profil"><button class="btnt"><i style="margin-right: 5px"
                    class="fa fa-user"></i></button><br></a>
        <a href="<?php echo base_url() ?>index.php/user/dashboard/logout" type="submit" class="btn btn-success"><button
                class="btnt"><i style="margin-right: 5px" class="fa fa-sign-out"></i></button><br></a>
    </div>
    <br>
    <h1> Pesan Tiket</h1>
    </div>
    <br><br>
    <form action="<?php echo site_url('user/pesan/add_process'); ?>" method="post">
        <div>&nbsp Nama Pemesan:
            <input type="text" name="nama_pesan" placeholder="Nama Pemesan" required></div>
        <br>
        <div>&nbsp No. Telepon :
            <input type="number" name="no_telp" placeholder="08XXXXXXXXXX" required></div>
        <br>
        <div>&nbsp Kode Paket :
        <select name="Kode_paket">
            <?php 

            foreach($paketdata as $row)
            { 
              echo '<option value="'.$row->Kode_paket.'">'.$row->Kode_paket.'</option>';
            }
            ?>
            </select>
        </div>
        
            <br>
        <div>&nbsp Tanggal Keberangkatan :
            <input type="date" name="tgl_berangkat" placeholder="Tanggal Berangkat" required></div>
        <br>
        <div>&nbsp Jam Keberangkatan :
          <input type="time" name="jam" min="05:00" max="23:00" step="1800"></div>
        <br>
        <div>&nbsp Jumlah pesan :
            <input type="number" name="jml_pesan" min="1" max="10" required></div>
        <br> 
        &nbsp <button type="submit">Save</button>
    </form>
</body>

</html>