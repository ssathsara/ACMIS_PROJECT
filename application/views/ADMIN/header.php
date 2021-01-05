<!DOCTYPE html>
<html>
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

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assests/css/agency.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assests/css/login.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assests/css/agency.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assests/css/course.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assests/css/exam.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assests/css/msg.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assests/css/chat.css');?>" rel="stylesheet">



</head>
<body>

  <div class="header" >
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="padding-top: 10px;" >
      <div class="container">
          <h1 class="header-top">American Corner - Matara</h1>
      
        <ul class="navbar-nav text-uppercase ml-auto" >
         
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="" id="button"><img class = "mx-auto rounded-circle" src="<?php echo base_url('assests/img/team/1.jpg');?>" style="width: 30px; height: 30px;"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#" id="button" style="color: white;"><?php echo $this->session->userdata('name');?></a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Contact/send_reply');?>" id="button"><img src="<?php echo base_url('assests/img/cutom/email.png');?>" style="width: 30px; height: 30px;"></a>
          
          </li>

          <li class="nav-item">
            <div class="display_num_msg">
              <center><a href="<?php echo site_url('Contact/send_reply');?>"><p></a><?php echo $results;?></p></a></center>
            </div>
          </li>

          <li class="nav-item">
            <div class="dropdown">
          <button class="dropbtn"><img class = "navbar-img" src="<?php echo base_url('assests/img/navbar/menu.png');?>" style="margin-right: 10px;" >
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="<?php echo site_url('Home/index');?>"><img  class="dropdown-img" src="<?php echo base_url('assests/img/home.png')?>">Home</a>
              <a href="<?php echo site_url('Home/chat');?>"><img  class="dropdown-img" src="<?php echo base_url('assests/img/navbar/chat.png')?>">Chat</a>
              <a href="#"><img  class="dropdown-img" src="<?php echo base_url('assests/img/settings.png')?>">Settings</a>
              <a href="<?php echo site_url('Login/logout');?>"><img  class="dropdown-img" src="<?php echo base_url('assests/img/navbar/logout.png')?>">Logout</a>
          </div>
       </div> 
            
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </div>
    
  <div class="wrapper">
      <div class="side-bar">
        
        <ul style="list-style-type:none">
        <li>
          <div class="team-member" style="margin-bottom: 10px;">
            <img class="mx-auto rounded-circle" src="<?php echo base_url('assests/img/team/1.jpg');?>" alt="" style="width: 40%;height: 40%; ">

              <center><h4 class="wrapper-userdata" style="text-transform: uppercase; text-align: center;"><?php echo $this->session->userdata('name');?></h4></center>
          </div>
        </li>
        
          <li><a href="<?php echo site_url('Home/admin_load');?>" class="side-bar-link"><i class="fas"><img  class="admin-home-img-navbar" src="<?php echo base_url('assests/img/home.png')?>">DashBoard</i></a></li>
          <li><a href="<?php echo site_url('Home/update_newsfeed');?>" class="side-bar-link"><i class="fas"><img  class="admin-home-img-navbar" src="<?php echo base_url('assests/img/update.png')?>">Update Newsfeed</i></a></li>
          
          <li><a href="<?php echo site_url('Home/update_event');?>" class="side-bar-link"><i class="fas"><img  class="admin-home-img-navbar" src="<?php echo base_url('assests/img/update_event.png')?>">Add Assigned Budget</i></a></li>

          <li><a href="<?php echo site_url('Home/upload_exam');?>" class="side-bar-link"><i class="fas"><img  class="admin-home-img-navbar" src="<?php echo base_url('assests/img/exam.png')?>">Examination</i></a></li>

          <li><a href="<?php echo site_url('Home/yf_register');?>" class="side-bar-link"><i class="fas"><img  class="admin-home-img-navbar" src="<?php echo base_url('assests/img/registration.png')?>">YF Registration</i></a></li>
          <li><a href="<?php echo site_url('Home/course_details');?>" class="side-bar-link"><i class="fas"><img  class="admin-home-img-navbar" src="<?php echo base_url('assests/img/navbar/details.png')?>">Course Details</i></a></li>

           <li><a href="<?php echo site_url('Home/exam_result_dash');?>" class="side-bar-link"><i class="fas"><img  class="admin-home-img-navbar" src="<?php echo base_url('assests/img/navbar/details.png')?>">Exam Results</i></a></li>
        </ul>
      </div>
    </div>