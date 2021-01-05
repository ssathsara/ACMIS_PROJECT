
    <div class ="right">
    
      <div class="container" style="height: 700px;">
        <h4>Create New Examination</h4>
            <table class="add-exam-table">
              <?php echo form_open_multipart('Examination/add_exam');?>
              <?php echo validation_errors('<p style ="color:#F29005;"> ','</p>');?>
              <tr>
                <th colspan="2">NEW EXAM</th>
              </tr>
              
              <tr>
                <td><label class="para-newsfeed"> Subject</label></td>
                <td><select name="subject">
                  <option value="1">Arduino and 3D Printing</option>
                  <option value="2">Business English</option>
                  <option value="3">English Enrichment</option>
                  
                </select>  </td>
              </tr>
              <tr>
                <td><label class="para-newsfeed"> Exam Name</label></td>
                <td><input type="text" name="name" placeholder="Intake Exam -2019" class="input-newsfeed"></td>
              </tr>
              <tr>
             
                <td><input type="hidden" name="duration" placeholder="please fill in minuits" value="30" class="input-newsfeed"></td>
              </tr>
             

             <tr>
            <td colspan="2"><center><input type="submit" name="submit" class="form-btn" value="CREATE"  style="width: 200px;"><input type="reset" name="submit" class="form-btn" value="CANCEL" style="width: 200px;"></center>
            </td>
          </tr>
         </table>
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
