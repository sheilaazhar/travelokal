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
            <?php echo form_open('register');?>
            <label for="name" style="padding:13px 20px">&nbsp;Fullname&nbsp;&nbsp;</label>
            <input type="text" placeholder="Fullname"
                id="name"
                class="form-content"
                name="name"
                autocomplete="on"
                value="<?php echo set_value('name'); ?>"
                required />
                <p> <?php echo form_error('name'); ?> </p>
            <label for="email" style="padding:13px 20px">&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="email" placeholder="Email"
                id="email"
                class="form-content"
                name="email"
                autocomplete="on"
                value="<?php echo set_value('email'); ?>"
                required />
                <p> <?php echo form_error('email'); ?> </p>
            <label for="username" style="padding:13px 20px">&nbsp;Username</label>
            <input type="username" placeholder="Username"
                id="username"
                class="form-content"
                type="username"
                name="username"
                autocomplete="on"
                value="<?php echo set_value('username'); ?>"
                required />
                <p> <?php echo form_error('username'); ?> </p>
            <label for="password" style="padding:13px 20px">&nbsp;Password</label>
            <input type="password" placeholder="Password"
                id="password"
                class="form-content"
                type="password"
                name="password"
                value="<?php echo set_value('password'); ?>"
            required />
            <p> <?php echo form_error('password'); ?> </p>
            <label for="password" style="padding:23px 20px">&nbsp;Password</label>
            <input type="password" placeholder="Password Confirm"
                id="password"
                class="form-content"
                type="password"
                name="password_conf"
                value="<?php echo set_value('password_conf'); ?>"
            required />
            <p> <?php echo form_error('password_conf'); ?> </p>
            <input id="submit-btn" type="submit" name="submit" value="Create" /><br><br>
            <?php echo form_close();?>
</div>
</div>
</body>
</html>