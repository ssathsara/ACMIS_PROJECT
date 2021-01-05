
    <div class ="right">
    
       <div class="container">
        <h4 >All Questions</h4>
            <table class="question-all-table " width="100%">
                <tr>
                  <th colspan="6">All questions</th>
                </tr>
                <tr>
                  <td>Q NO</td>
                  <td colspan="4">Question</td>
                  <td>Action</td>
                </tr>
              
                <?php
            $i = 1;
            foreach ($results as $result):?>
                <tr>
                  <td rowspan="6"><?= $i++; ?></td>
                  <td>question</td>
                  <td colspan="3"><?= $result->question; ?></td> 
                  <td rowspan="6">
                    <a href="<?= base_url('index.php/Examination/edit_question/'.$result->id);?>"  class="edit-btn"  style="background: blue;" ><img src="<?php echo base_url('assests/img/cutom/edit.png')?>" width="20px" height="20px"></a>
                    <a href="<?= base_url('index.php/Examination/delete_question/'.$result->id);?>" class="edit-btn" style="background: red;" onclick="return confirm('Do you really want to delete this record?');"><img src="<?php echo base_url('assests/img/cutom/delete.png')?>" width="20px" height="20px"></a> </td>
                </tr>

                <tr>
                  <td rowspan="5">options</td>
                  <td>NO</td>
                  <td>Choices</td>
                  <td >Correct Answer</td>
                </tr>

                <tr>
                  <td>1</td>
                  <td><?= $result->option_1; ?></td>
                  <td rowspan="4"><?= $result->correct_answer; ?></td>
                </tr>

                <tr>
                  <td>2</td>
                  <td><?= $result->option_2; ?></td> 
                </tr>

                <tr>
                  <td>3</td>
                  <td><?= $result->option_3; ?></td>
                 
                </tr>

                <tr>
                  <td>4</td>
                  <td><?= $result->option_4; ?></td>
                  
                </tr>


               
              <?php endforeach;?>
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
