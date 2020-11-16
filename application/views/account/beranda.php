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
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/style.css">
  <script src="<?php echo base_url() ?>/assets/beranda.js"></script>
</head>
<body>

<ul>
  <li><b><a class="active" href="<?php echo base_url() ?>index.php/Beranda">TRAVELOKAL</a></b></li>
  <li><a href="<?php echo base_url() ?>index.php/Login">Login</a></li>
  <li><a href="<?php echo base_url() ?>index.php/Register">Signup</a></li>
</ul>

<div class="main-wrapper">
        <div class="slider">
            <img class="slide slide_current" src="<?php echo base_url(); ?>assets/travel1.jpeg">
            <img class="slide" src="<?php echo base_url(); ?>assets/travel2.jpg">
            <img class="slide" src="<?php echo base_url(); ?>assets/travel3.png">
        </div>
        <div class="arrow arrow_prev">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 257.6 451.8">
                <path d="M0,225.9c0-8.1,3.1-16.2,9.3-22.4L203.5,9.3c12.4-12.4,32.4-12.4,44.8,0c12.4,12.4,12.4,32.4,0,44.7L76.4,225.9l171.9,171.9c12.4,12.4,12.4,32.4,0,44.7c-12.4,12.4-32.4,12.4-44.7,0L9.3,248.3C3.1,242.1,0,234,0,225.9z"/>
            </svg>
        </div>
        <div class="arrow arrow_next">
            <svg class="arrow arrow_next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 257.6 451.8">
                <path d="M248.3,248.3L54,442.6c-12.4,12.4-32.4,12.4-44.7,0c-12.4-12.4-12.4-32.4,0-44.7l171.9-171.9L9.3,54C-3.1,41.7-3.1,21.6,9.3,9.3C21.6-3.1,41.7-3.1,54,9.3l194.3,194.3c6.2,6.2,9.3,14.3,9.3,22.4C257.6,234,254.5,242.1,248.3,248.3z"/>
            </svg>
        </div>
    </div>

    <center><h2>Our Trip</h3></center>
    <div class="grid-container">
  <div class="grid-item">
        <img src="<?php echo base_url(); ?>assets/mobil.png" class="img-responsive" style="width:100%" alt="Image">
        <p>Jatinangor - Bekasi</p>
  </div>
  <div class="grid-item">
  <img src="<?php echo base_url(); ?>assets/mobil.png" class="img-responsive" style="width:100%" alt="Image">
          <p>Jatinangor - Kuningan</p> 
  </div>
  <div class="grid-item">
  <img src="<?php echo base_url(); ?>assets/mobil.png" class="img-responsive" style="width:100%" alt="Image">
          <p>Jatinangor - Tasikmalaya</p>
  </div>  
</div>
</body>
</html>
