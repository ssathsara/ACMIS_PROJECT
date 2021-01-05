

    <div class ="right">   
       <div class="container" style="height: 700px;">
        <h4>Add Questions</h4>
          <div style="float: right;">
            <table class="question-table">
              <form>
                <tr>
                  <th>Q NO</th>
                  <th>Question</th>
                </tr>
                <?php
                  $i = 1;
                    foreach ($results as $result):?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $result->question; ?></td>
                </tr>

                <?php endforeach;?>
                <tr>

                  <td colspan="2"><a href="<?php echo base_url().'Examination/finish';?>"><button class="form-btn" value="FINISH"  style="width: 200px;">FINISH</button> </a></td>
                </tr>
              </form>
            </table>
          </div>

          <table class="question-table" width="60%"> 
              <?php echo form_open_multipart('Examination/add_question');?>
              
              <tr>
                <th colspan="4">QUESTIONS</th>
              </tr>
              <?php echo validation_errors('<p style ="color:#F29005;"> ','</p>');?>
              <tr>
                <td ><label> Question</label></td>
                <td colspan="3"><input type="text" name="question" placeholder="Enter Question" style=" width: 92%; "></td>
              </tr>
              
              <tr>
                <td><label> Option 1</label></td>
                <td><input type="text" name="op1" placeholder="Enter Option 1" ></td>
              </tr>
              <tr>
                <td><label> Option 2</label></td>
                <td><input type="text" name="op2" placeholder="Enter Option 2" ></td>
              </tr>
              <tr>
                <td><label > Option 3</label></td>
                <td><input type="text" name="op3" placeholder="Enter Option 3" ></td>
              </tr>
              <tr>
                <td><label > Option 4</label></td>
                <td><input type="text" name="op4" placeholder="Enter Option 4" ></td>
              </tr>

              <tr>
                <td><label>Correct Answer</label> </td>
                <td colspan="3">
                  <input type="radio"  value ="1" name="correct">option 1
                  <input type="radio"  value ="2"name="correct">option 2
                  
                  <input type="radio"  value ="3" name="correct">option 3
                  <input type="radio"  value ="4" name="correct">option 4
                </td>
              </tr>
             <tr>
            <td colspan="4"><center><input type="submit" name="submit" class="form-btn" value="ADD"  style="width: 200px;"><input type="reset" name="submit" class="form-btn" value="CANCEL" style="width: 200px;"></center>
            </td>
          </tr>
        </form>
        
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
