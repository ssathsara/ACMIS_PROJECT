<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
            <div class="dropdown">
          <button class="dropbtn"><img class = "navbar-img" src="<?php echo base_url('assests/img/navbar/menu.png');?>" style="margin-right: 10px;" >
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="<?php echo site_url('Home/index');?>"><img  class="dropdown-img" src="<?php echo base_url('assests/img/home.png')?>">Home</a>
              <a href="#"><img  class="dropdown-img" src="<?php echo base_url('assests/img/navbar/chat.png')?>">Chat</a>
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

              <h4 style="font-size: 20px; font-weight: 3px; text-align: center;"><?php echo $this->session->userdata('name');?><h4>
          </div>
        </li>
          <li><a href="<?php echo site_url('Home/yf_dashboard');?>" class="side-bar-link"><i class="fas"><img  class="admin-home-img-navbar" src="<?php echo base_url('assests/img/home.png')?>">DashBoard</i></a></li>
          <li><a href="<?php echo site_url('Yf_function/view_update_newsfeed');?>" class="side-bar-link"><i class="fas"><img  class="admin-home-img-navbar" src="<?php echo base_url('assests/img/update.png')?>">Update Newsfeed</i></a></li>
          <li><a href="<?php echo site_url('Yf_function/propose_event_budget');?>" class="side-bar-link"><i class="fas"><img  class="admin-home-img-navbar" src="<?php echo base_url('assests/img/cutom/add-2.png')?>">Propose Budget</i></a></li>
          <li><a href="<?php echo site_url('Yf_function/update_event');?>" class="side-bar-link"><i class="fas"><img  class="admin-home-img-navbar" src="<?php echo base_url('assests/img/update_event.png')?>">View Budget</i></a></li>

        </ul>
      </div>
    </div>

    <div class ="right">
    <div class="container">
      <h4>Add newsfeed event</h4>
        <div class="content">
         <div class="news-content">
           <center><table>
          <?php echo form_open_multipart('yf_function/proposed_budget_upload');
            echo validation_errors('<p style ="color:#F29005;"> ','</p>');
          ?>
           
          <tr>
            <td>
              <label class="para-newsfeed"> Event Title</label>
            </td>
            <td>
              <input type="text" name="title" placeholder="Event Title" class="input-newsfeed">
            </td>
          </tr>

          <tr>
            <td>
              <label class="para-newsfeed"> Decoration Cost</label></td>
              <td>
                <input type="text" name="decoration" placeholder="1000.00" class="input-newsfeed">
              </td>
          </tr>
          
          <tr>
            <td>
              <label class="para-newsfeed"> Refreshment Cost</label></td>
              <td>
                <input type="text" name="refreshment" placeholder="1000.00" class="input-newsfeed">
              </td>
          </tr>


          <tr>
            <td>
              <label class="para-newsfeed"> Equipment Cost</label></td>
              <td>
                <input type="text" name="equipment" placeholder="1000.00" class="input-newsfeed">
              </td>
          </tr>

          <tr>
            <td>
              <label class="para-newsfeed"> other Cost</label></td>
              <td>
                <input type="text" name="other" placeholder="1000.00" class="input-newsfeed">
              </td>
          </tr>
            <tr>
              <td colspan="2"><center><input type="submit" name="submit" class="upload-btn" value="UPLOAD"><input type="reset" name="submit" class="upload-btn" value="CANCEL"></center>
                </td>
              </tr>
         </form>
         </table>
        </center>   
      </div>   
    </div>
  </div>
</div>




 