
<div class="right"> 
    <h4>YF registration</h4>
    <div class="container" style="width: 600px;">
    
         <div class="news-content">
          <center><table>
          <?php  echo form_open_multipart('Yf_register/do_upload');?>
            <?php echo validation_errors('<p style ="color:#F29005;"> ','</p>');?>

          <tr>
            <td>
              <label class="para-newsfeed">  Name </label></td>
              <td>
                <input type="text" name="name" placeholder="Kaushan Silva" class="input-newsfeed" style="width: 350px;  margin-left: 0px;">
              </td>
          </tr>

          <tr>
            <td>
              <label class="para-newsfeed" style="margin-right: 0px;"> User Name</label>
            </td>
            <td>
              <input type="text" name="uname" placeholder="ard01" class="input-newsfeed" style="width: 350px; margin-left: 0px;">
            </td>
          </tr>

          <tr>
            <td>
              <label class="para-newsfeed"> Password</label></td>
              <td>
                <input type="password" name="password" placeholder="ard01" class="input-newsfeed" style="width: 350px;  margin-left: 0px;" required="">
              </td>
          </tr>
          
          <tr>
            <td>
              <label class="para-newsfeed" style="margin-right: 0px;"> Confirm password</label>
            </td>
            <td>
              <input type="password" name="re_pwd" placeholder="Please Re-enter Password" class="input-newsfeed" style="width: 350px; margin-left: 0px;" required="">
            </td>
          </tr>

            <tr>
              <td colspan="2"><center><input type="submit" name="submit" class="upload-btn" value="REGISTER" style="width: 200px; padding: 10px;"><input type="reset" name="submit" class="upload-btn" value="CANCEL" style="width: 200px; padding: 10px;"></center>
                </td>
              </tr>
         </form>
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
 
