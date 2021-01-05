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

<div class="right">
  <h4>Update Event Budget</h4>
    <center>
    <div style="width: 100%;">
      <div class="content">
            <form action="<?php echo site_url('Home/update_event');?>" method="post">
                <input type="text" class="input-search" name="title" style="text-align: center;" placeholder="Enter Event Title">
                <input type="submit" class="search-btn" name="search_btn" value="SEARCH">
            </form>

        <center><table>
         
        <?php 
          foreach($results as $post){
            echo form_open('Yf_function/update/'.$post->event_id);  ?>
          <tr>
            <td>
              <label class="para-budget"> Event Title</label>
            </td>
            <td>
              <input type="text" name="title" placeholder="Event Title" class="input-budget" value="<?php echo $post->title;?>">
            </td>
        </tr>

    
         <tr>
            <td>
              <label class="para-budget"> Decoration Cost</label></td>
              <td>
                <input type="text" name="proposed_decoration" placeholder="1000.00" class="input-budget"  value="<?php echo $post->proposed_decoration;?>">
              </td>
        </tr>
        <tr> 
            <td>
              <label class="para-budget"> Refreshment Cost</label></td>
              <td>
                <input type="text" name="proposed_refreshment" placeholder="1000.00" class="input-budget"  value="<?php echo $post->proposed_refreshment;?>">
              </td>
        </tr>
        <tr>
            <td>
              <label class="para-budget"> Equipment Cost</label></td>
              <td>
                <input type="text" name="proposed_equipment" placeholder="1000.00" class="input-budget"  value="<?php echo $post->proposed_equipment;?>">
              </td>
         </tr>
         <tr>
            <td>
              <label class="para-budget"> other Cost</label></td>
              <td>
                <input type="text" name="proposed_other" placeholder="1000.00" class="input-budget" value="<?php echo $post->proposed_other;?>">
              </td>
          </tr>
          
            <tr>
              <td colspan="2"><center><input type="submit" name="submit" class="search-btn" value="UPLOAD"><input type="reset" name="submit" class="search-btn" value="CANCEL"></center>
                </td>
              </tr>
         </form>
         <?php }?>
         </table>
            <table class="table">
                <thead>
                    <tr>
                      <th class="table_event_title" >Event title</th>
                      <th class="assigned">Proposed Decoration Cost</th>
                      <th class="table-header-actual">Assigned Decoration Cost</th>
                      <th class="assigned">Proposed Refreshment Cost</th>
                      <th class="table-header-actual">Assigend Refreshment Cost</th>
                      <th class="assigned">Proposed Equipment Cost</th>
                      <th class="table-header-actual">Assigned Equipment Cost</th>
                      <th class="assigned">Proposed Other Cost</th>
                      <th class="table-header-actual">Assigned Other Cost</th>
                      <th class="assigned">Proposed Cost</th>
                      <th class="table-header-actual">Assigned Total Cost</th>
                      <th class="assigned">Edit</th>
                    </tr>
                </thead>
         
                <tbody id="ajax_table">
                    
                </tbody>
            </table>
            <div class="container" style="text-align: center"><button class="upload-btn" id="load_more" data-val = "0">Load more.. </button>
          </div>
        </div>
      </div>
    </div>
  </center>
</div>
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 
<script>
    $(document).ready(function(){
        getBudget(0);
 
        $("#load_more").click(function(e){
            e.preventDefault();
            var page = $(this).data('val');
            getBudget(page);
 
        });
 
    });
 
    var getBudget = function(page){
        $("#loader").show();
        $.ajax({
            url:"<?php echo base_url() ?>index.php/Yf_function/getBudget",
            type:'GET',
            data: {page:page}
        }).done(function(response){
            $("#ajax_table").append(response);
            $('#load_more').data('val', ($('#load_more').data('val')+1));
            
        });
    };
 
   
</script>
