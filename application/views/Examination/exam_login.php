

 <div class="bg_model">
  <div class="modal-content">
      <div class="login-header"><h2>Examination Login</h2></div>
      <div class="error">
      
    </div></center>
      <p style="color: red;"><?php echo $this->session->flashdata("error");?></p>
     <?php  echo form_open('Do_exam/exam_login/');?>
     <?php echo validation_errors('<p style ="color:#F29005;""> ','</p>');?>
     
      <label class="model-lable">Email</label><br>
      <input type="text" name="uname" placeholder="User Name" id="uname" class="model-input"><br>
      <label class="model-lable">Password</label><br>
      <input type="password" name="pwd" placeholder="Password" id="pwd" class="model-input"><br>
      <input type="hidden" name="subject" value="<?php echo $results;?>">
      <input type="submit" class="log-btn" id="submit" value="LOGIN" style="height: 40px;">
    </form>
  </div>
</div>
 
