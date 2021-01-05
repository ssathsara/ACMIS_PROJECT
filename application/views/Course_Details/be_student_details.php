 <div class ="right">
    
      <div class="container"  style="height: 700px;">
        <h4>Business English- Student Details</h4>
          <center>
            <table class="student-table">
             <tr>
              <th class="student-header">No.</th>
               <th class="student-header">Name</th>
               <th class="student-header">Email</th>
               <th class="student-header">Contact Number</th>
               <th class="student-header">Status</th>
             </tr>
           <?php
            $i = 1;
            foreach ($results as $result):?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $result->Name; ?></td>
                <td><?= $result->email; ?></td>
                <td><?= $result->contact; ?></td>
                <td><?= $result->status; ?></td>
                
              </tr>
            <?php endforeach;?>
         </table>
          <a href="<?php echo base_url('index.php/Course_details/remove_be_details');?>"><button class="course-btn">Clear Table</button></a>
         </center>   

        </div>
        </div> 
    </div>  
  </div>