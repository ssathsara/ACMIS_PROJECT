

  <div class ="right">
    
      <div class="container" style="height: 700px;">
        <h4>COURSE DETAILS</h4>
         <p style="float:right; font-size:20px; color: green;"><?php echo $this->session->flashdata('email');?></p>
          <table class="course-table">
            <tr>
              <th class="course-header">Course Name</th>
              <th class="course-header">Number Of students</th>
              <th class="course-header">See Student Details</th>
              <th class="course-header">Send Mails</th>
          </tr>
          
            <tr>
              <td>Arduino and 3D Printing</td>
              <td><?php echo $results[0]?></td>
              <?php $data=1;?>
              <td><a href="<?= base_url('index.php/Course_details/get_ard_student_details');?>" class="edit-btn" ><img src="<?php echo base_url('assests/img/cutom/eye.png')?>" heigth="20px" width="20px"></a></td>
              <td>
                <?php  echo form_open_multipart('Course_details/send_mails_exam/'.$data);?>
                <table class="inner-table">
                  <tr>
                    <?php echo validation_errors('<p style ="color:red;"> ','</p>');?>
                    <td><input type="radio" name="mail" value="1" class="radio"><p style="color: #FFC300;">Send Exam Link</p></td>
                    <td><input type="radio" name="mail" value="2" class="radio"><p style="color: #FFC300;">Send Course Registration Details</p></td>
                   <td><button type="submit" name="submit" class="mail-btn" width="50px"><img src="<?php echo base_url('assests/img/cutom/email.png')?>" heigth="20px" width="20px"></button>

                   </td>


                  </tr>
                </table>
                 
                 
                
            </tr>

            <tr>
              <?php $data=2;?>

              <td>Business Eglish</td>
              <td><?php echo $results[1]?></td>
              <td><a href="<?= base_url('index.php/Course_details/get_be_student_details');?>" class="edit-btn" ><img src="<?php echo base_url('assests/img/cutom/eye.png')?>" heigth="20px" width="20px"></td>
              <td>
                <?php  echo form_open_multipart('Course_details/send_mails_exam/'.$data);?>
                <table class="inner-table">
                  <tr>
                    <td><input type="radio" name="mail" value="1" class="radio"><p style="color: #FFC300;">Send Exam Link</p></td>
                    <td><input type="radio" name="mail" value="2" class="radio"><p style="color: #FFC300;">Send Course Registration Details</p></td>
                   <td><button type="submit" name="submit" class="mail-btn" width="50px"><img src="<?php echo base_url('assests/img/cutom/email.png')?>" heigth="20px" width="20px"></button></td></td>
                  </tr>
                </table>
                 
            </tr>

             <tr>
              <?php $data=3;?>

              <td>English Enrichment</td>
              <td><?php echo $results[2]?></td>
              <td><a href="<?= base_url('index.php/Course_details/get_ee_student_details');?>" class="edit-btn" ><img src="<?php echo base_url('assests/img/cutom/eye.png')?>" heigth="20px" width="20px"></td>
               <td>
                <?php  echo form_open_multipart('Course_details/send_mails_exam/'.$data);?>
                <table class="inner-table">
                  <tr>
                    <td><input type="radio" name="mail" value="1" class="radio"><p style="color: #FFC300;">Send Exam Link</p></td>
                    <td><input type="radio" name="mail" value="2" class="radio"><p style="color: #FFC300;">Send Course Registration Details</p></td>
                   <td><button type="submit" name="submit" class="mail-btn" width="50px"><img src="<?php echo base_url('assests/img/cutom/email.png')?>" heigth="20px" width="20px"></button></td></td>
                  </tr>
                </table>
                 
            </tr>

             <tr>
              <?php $data=4;?>
              <td>Scratch Programming</td>
              <td><?php echo $results[3]?></td>
              <td><a href="<?= base_url('index.php/Course_details/get_sp_student_details');?>" class="edit-btn" ><img src="<?php echo base_url('assests/img/cutom/eye.png')?>" heigth="20px" width="20px"></td>
               <td>
                <?php  echo form_open_multipart('Course_details/send_mails_exam/'.$data);?>
                <table class="inner-table">
                  <tr>
                    
                    <td><input type="radio" name="mail" value="2" class="radio"><p style="color: #FFC300;">Send Course Registration Details</p></td>
                   <td><button type="submit" name="submit" class="mail-btn" width="50px"><img src="<?php echo base_url('assests/img/cutom/email.png')?>" heigth="20px" width="20px"></button></td></td>
                  </tr>
                </table>
                 
            </tr>

          </table>
        </div> 
    </div>  
  </div>
  <div class ="footer">
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
  </div>
</body>
</html>