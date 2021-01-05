<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ACMIS - Management Information System</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assests/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <script type="text/javascript" src="<?php echo base_url('assests/js/login.js');?> "></script>
  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url('assests/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assests/css/agency.min.css');?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/css/examination.css');?>">
  
</head>

</head>

<body>
  <div class="header-question">
  <nav>
    <div class="nav-background">
      <center>
      <div class="nav-content"> 
        <ul class="left-nav">
            <li><img src="<?php echo base_url('assests/img/cutom/logo.jpg');?>" class="exam-img"></li>
            <li><h3>American Corner - Matara</h3></li>
        </ul>
        <ul class="right-nav">
          <li>Home</li>
          <li>Services</li>
          <li>Contact</li>
          <li><h6><?php echo $this->session->userdata('name');?></h6></li>
        </ul>
      </div>
      </center>
    </div>
  </nav>
  <div class="red-line">
  
  </div>
</div>

<div class="header-space">
  
</div>