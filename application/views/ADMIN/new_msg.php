
<div class="right"> 
       
      <div class="contact_content">
        <p style="text-align: center; font-size:20px; color: green;"><?php echo $this->session->flashdata('message');?></p>
        <?php foreach($results as $row){
          $i=0;?>
          <center> 
            <div class="view_message">
              <?php  echo form_open_multipart('Contact/send_mail');?>
             
                <table class="msg-table">
                  <tr>
                    <th colspan="2">NEW MESSAGE  <p style="float: right"></p></th>
                  </tr>
                 
                  <tr>
                    <td>FROM: </td>
                    <td><input type="text" name="name" value="<?php echo $row->name;?>"></td>
                    <input type="hidden" name="to_email" value="<?php echo $row->email;?>"></td>
                  </tr>
                  <tr>
                    <td>MESSAGE:</td>
                    <td><textarea> <?php echo $row->message;?></textarea> </td>
                  </tr>

                  <tr>
                    <td>REPlY: </td>
                    <td><textarea name="reply" required placeholder="Type here your reply" ></textarea></td>
                  </tr>

                  <tr>
                     <td colspan="2"><button type="submit" name="submit" class="msg_submit">SEND REPLY</button></td>
                  </tr>
                </table>
               </form>
            </div>
          </center>
        
      </div>
      <?php }?>
</div>
