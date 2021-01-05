
    <div class ="right">
    
      <div class="container"  style="height: 700px;">
        <h4>Examination Details</h4>
          <a href="<?php echo base_url('index.php/Examination/view_exam');?>"><button class="exam-btn">Add New Exam</button></a>
          <center>
            <table class="exam-table">
             <tr>
               <th class="exam-header">No</th>
               <th class="exam-header">Subject</th>
               <th class="exam-header">Examination Name</th>
               <th class="exam-header">Duration</th>
               <th class="exam-header">Status</th>
               <th class="exam-header">Action</th>
               <th class="exam-header">Add Questions</th>
               <th class="exam-header">See Questions</th>
             </tr>
           <?php
            $i = 1;
            foreach ($results as $result):?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $result->subject; ?></td>
                <td><?= $result->exam_name; ?></td>
                <td><?= $result->duration; ?></td>
                <td><?= $result->status; ?></td>
                <td><a href="<?= base_url('index.php/Examination/edit_exam/'.$result->id);?>" class="edit-btn" style="background: blue;" ><img src="<?php echo base_url('assests/img/cutom/edit.png')?>"></a>
                        <a href="<?= base_url('index.php/Examination/delete/'.$result->id);?>"  class="edit-btn" style="background: red;" onclick="return confirm('Do you really want to delete this record?');"><img src="<?php echo base_url('assests/img/cutom/delete.png')?>"></a>
                    </td>
                <td><a href="<?= base_url('index.php/Examination/view_questions/'.$result->id);?>" class="edit-btn" ><img src="<?php echo base_url('assests/img/cutom/add.png')?>"></a></td>
                <td><a href="<?= base_url('index.php/Examination/see_questions/'.$result->id);?>" class="edit-btn" ><img src="<?php echo base_url('assests/img/cutom/eye.png')?>"></a></td>
              </tr>
            <?php endforeach;?>
         </table>

         </center>   

        </div>
        </div> 
    </div>  
  </div>
  


  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; American Corner Matara</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

   <!--Plugin JavaScript -->
     <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

 <!-- Contact form JavaScript -->

    <script src="<?php echo base_url('assests/js/jqBootstrapValidation.js');?>"></script>
  <script src="<?php echo base_url('assests/js/contact_me.js');?>"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url('assests/js/agency.min.js');?>"></script> 

</body>

</html>
