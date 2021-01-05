
  <div class ="right">
    <div class="container">
      <h4>Add Event Budget</h4>
        <div class="content">
         <div class="news-content">
          <center><table>
          <?php if(isset($error))echo $error;  echo form_open_multipart('budget/do_upload');?>
           
          <tr>
            <td>
              <label class="para-newsfeed"> Event Title</label>
            </td>
            <td>
              <input type="text" name="title" placeholder="Event Title" class="input-newsfeed">
            </td>
          </tr>

          <tr>
            <td>
              <label class="para-newsfeed"> Decoration Cost</label></td>
              <td>
                <input type="text" name="decoration" placeholder="1000.00" class="input-newsfeed">
              </td>
          </tr>
          
          <tr>
            <td>
              <label class="para-newsfeed"> Refreshment Cost</label></td>
              <td>
                <input type="text" name="refreshment" placeholder="1000.00" class="input-newsfeed">
              </td>
          </tr>


          <tr>
            <td>
              <label class="para-newsfeed"> Equipment Cost</label></td>
              <td>
                <input type="text" name="equipment" placeholder="1000.00" class="input-newsfeed">
              </td>
          </tr>

          <tr>
            <td>
              <label class="para-newsfeed"> other Cost</label></td>
              <td>
                <input type="text" name="other" placeholder="1000.00" class="input-newsfeed">
              </td>
          </tr>
            <tr>
              <td colspan="2"><center><input type="submit" name="submit" class="upload-btn" value="UPLOAD"><input type="reset" name="submit" class="upload-btn" value="CANCEL"></center>
                </td>
              </tr>
         </form>
         </table>
        </center>   
      </div>
    </div>
  </div>
      
       <table border="1px" class="table-format">
            <tr>
              <th class="table_event_title" >Event title</th>
              <th>Assigned Decoration Cost</th>
              <th class="table-header-actual">Actual Decoration Cost</th>
              <th>Assigned Refreshment Cost</th>
              <th class="table-header-actual">Actual Refreshment Cost</th>
              <th>Assigned Equipment Cost</th>
              <th class="table-header-actual">Actual Equipment Cost</th>
              <th>Assigned Other Cost</th>
              <th class="table-header-actual">Actual Other Cost</th>
              <th>Assigned Total Cost</th>
              <th class="table-header-actual">Actual Total Cost</th>
            </tr>

            <tbody id="ajax_table">

            </tbody>
            <!-- <?php //$i=1; 
              //foreach($post AS $row){
              ?>
          <tr>
              <td  class="table_event_title"><?=$row->title;?></td>
              <td><?=$row->decoration?></td>
              <td  class="table-header-actual"><?=$row->actual_decoration?></td>
              <td><?=$row->refreshment?></td>
              <td  class="table-header-actual"><?=$row->actual_refreshment?></td>
              <td><?=$row->equipment?></td>
              <td  class="table-header-actual"><?=$row->actual_equipment?></td>
              <td><?=$row->other?></td>
              <td  class="table-header-actual"><?=$row->actual_other?></td>
              <td><?=$row->total_assigned_price?></td>
              <td  class="table-header-actual"><?=$row->actual_total_price?></td>
            </tr> 
            --><?php// }?>
          </table>

          <button class="form-btn" id="load_more" data-val="0"> LORD MORE </button>
    </div>
 </div>



 
