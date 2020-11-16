 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">     
  <title>Travelokal</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/stylelogin.css">
</head>

<body>
<ul>
  <li><b><a class="active" href="<?php echo base_url() ?>index.php/Beranda">TRAVELOKAL</a></b></li>
  <li><a href="<?php echo base_url() ?>index.php/Login">Login</a></li>
  <li><a href="<?php echo base_url() ?>index.php/Register">Signup</a></li>
</ul>

<div class="hero-image">
  <div id="card">
      <div id="card-content">
                    <div id="card-title">
                    <img src="<?php echo base_url(); ?>assets/user.png" alt="user" height="50px" />
                    </div>
            </div>
            <center><h3><?php echo $message; ?></h3></center>
            <center><p><?php echo anchor('login','Klik untuk Login'); ?></p></center>
      </div>
  </div>
    
  </div>
</body>
</html>