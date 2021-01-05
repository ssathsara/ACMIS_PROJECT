
 <h3 style="margin-left: 300px;">Ongoing Examinations</h3>
 <?php 
 foreach($results as $post){ ?>
 <div class="exam-container">
   <div class="exam-content">
     <p><?php echo $post->exam_name;?></p>
     
     <a href="<?php echo base_url('index.php/Do_exam/view_login/'.$post->subject);?>"><button class="attend-btn">ATTEND EXAM</button></a>
   </div>
 </div>
<?php }?>
