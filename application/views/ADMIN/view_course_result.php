
<div class="right"> 
       <?php  echo form_open_multipart('Contact/send_mail');?>
      <div class="contact_content">
       
        
          <center> 
            <div style="width: 60%">
              <p style="text-align: center; font-size:20px; color: green;"><?php echo $this->session->flashdata('reply');?></p>
                <table class="result-table">
                  <tr>
                    <th>Name </th>
                    <th>Result</th>
                    <th>Send Email</th>
                  </tr>
                 <?php foreach($results as $row){
                    $i=0;?>
                  <tr>
                    <td><?php echo $row->Name;?></td>
                    <td><?php echo $row->result;?></td>
                    <td><a href="<?= base_url('index.php/Examination/send_mail/'.$row->id);?>" class="edit-btn" ><img src="<?php echo base_url('assests/img/cutom/email.png')?>" heigth="20px" width="20px"></td>
                  </tr>
                  <?php }?>

                 
                </table>
               
            </div>
          </center>
        
      </div>
     
</div>
