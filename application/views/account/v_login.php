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
            <?php
            // Cetak jika ada notifikasi
            if($this->session->flashdata('sukses')) {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
            }
            ?>
            <?php echo form_open('login');?>
            <label for="username" style="padding:23px 20px">&nbsp;Username</label>
            <input type="username" placeholder="Username"
                id="username"
                class="form-content"
                name="username"
                autocomplete="on"
                value="<?php echo set_value('username'); ?>"
                required />
                <p> <?php echo form_error('username'); ?> </p><br>
            <label for="password" style="padding:33px 20px">&nbsp;Password</label>
            <input type="password" placeholder="Password"
                id="password"
                class="form-content"
                name="password"
                value="<?php echo set_value('password'); ?>"
            required />
            <?php echo form_error('password'); ?> </p>
            <input id="submit-btn" type="submit" name="submit" value="Login" /><br><br><br>
            <?php echo form_close();?>
            <center>Don't have account yet?<?php echo anchor('register','Sign Up'); ?></center>
      </div>
  </div>
</body>
</html>