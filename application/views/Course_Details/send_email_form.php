
<div class="right"> 
    <h4>Send Emails</h4>
      <div class="content">
         <div class="email-content">
         

          <center><table>
          <?php  echo form_open_multipart('Course_details/send_mails_exam');?>
            <?php echo validation_errors('<p style ="color:#F29005;"> ','</p>');
              foreach ($results as $row) {
              
            ?>

          <tr>
            <td>
              <label class="para-newsfeed">  To :</label></td>
              <td>
                <input type="text" name="email" value=" <?php echo  $row->email;?>" class="input-newsfeed" style="width: 350px;  margin-left: 0px;">
              </td>
          </tr>

          <tr>
            <td>
              <label class="para-newsfeed" style="margin-right: 0px;"> Subject :</label>
            </td>
            <td>
              <input type="text" name="subject" placeholder="Enter email subject here" class="input-newsfeed" style="width: 350px; margin-left: 0px;">
            </td>
          </tr>

          
          <tr>
            <td>
              <label class="para-newsfeed" style="margin-right: 0px;"> Message: </label>
            </td>
            <td>
              <textarea rows="5" name="message" style="width: 350px; margin-left: 0px;" required=""> 
                Password: <?php echo  $row->password;?>   
                email :<?php echo $row->email;?> 
              </textarea>
              
            </td>
          </tr>
            <?php
              }?>
            <tr>
              <td colspan="2"><center><input type="submit" name="submit" class="upload-btn" value="SEND" style="width: 200px; padding: 10px;"><input type="reset" name="submit" class="upload-btn" value="CANCEL" style="width: 200px; padding: 10px;"></center>
                </td>
              </tr>

               <input type="hidden" name="name" value="<?= $row->Name;?>">
         </form>
         </table>
         </center>   
       </div>
      </div>
    </div>
  



 
