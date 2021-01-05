
<div class="right"> 
    <h4>EXAM RESULTS</h4>
    <center>
    <div class="subject-content">

      <?php foreach($results_data as $results){?>
      <a href="<?php echo base_url().'index.php/Examination/view_results/'.$results->id?>">
        <div class="subject-div">
          <div class="title">
          <h5><?=$results->exam_name;?></h5>
          </div>
          <div class="arrow">
            <center><img src="<?php echo base_url('assests/img/cutom/arrow.png')?>"></center>
          </div>        
        </div>
      </a>
    <?php } ?>

    
    </div>
    </center>
</div>



 
