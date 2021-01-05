
<div class="right"> 
    <h4>Student details List</h4>

        <div class="email-details">
          <table>
              <tr>
                <th>Student Name</th>
                <th>Email</th>
                <th>Send Mails</th>
              </tr>
              <?php foreach($results as $row){?>
              
              <tr>
                <td><?php echo $row->Name;?></td>
                <td><?php echo $row->email;?></td>
                <td>
                  <?php  echo form_open_multipart('Course_details/email_form/'.$row->id);?>
                  <input type="hidden" name="subject" value="<?php echo $data;?>">
                  <button type="submit" name="submit" class="send-btn"><img src="<?php echo base_url('assests/img/cutom/email.png')?>" heigth="20px" width="20px"></button>
                </td>
               
              </tr>
              <?php }?>
            </table>
          </div>
      </div>
    </div>
  </div>



 
