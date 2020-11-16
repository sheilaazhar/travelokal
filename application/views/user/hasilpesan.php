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
    <center><h1>Pesanan Tiket Berhasil Dibuat!</h1></center>
    </div>
    <center><?php echo anchor('/user/profil','Lihat Tiket'); ?></center>
    <br><br>
    
        
</body>

</html>