
<div class="right">
  <h4>Update Event Budget</h4>
    <center>
    <div style="width: 100%;">
      
            <form action="<?php echo site_url('Home/update_event');?>" method="post">
                <input type="text" class="input-search" name="title" style="text-align: center;" placeholder="Enter Event Title">
                <input type="submit" class="search-btn" name="search_btn" value="SEARCH">
            </form>

        <center><table>
         
          <?php 
          foreach($results as $post){
            echo form_open('Edit_budget/update/'.$post->event_id);  ?>
          <tr>
            <td>
              <label class="para-budget"> Event Title</label>
            </td>
            <td>
              <input type="text" name="title" placeholder="Event Title" class="input-budget" value="<?php echo $post->title;?>">
            </td>
        </tr>

    
         <tr>
            <td>
              <label class="para-budget"> Decoration Cost</label></td>
              <td>
                <input type="text" name="assigned_decoration" placeholder="1000.00" class="input-budget"  value="<?php echo $post->assigned_decoration;?>">
              </td>
        </tr>
        <tr> 
            <td>
              <label class="para-budget"> Refreshment Cost</label></td>
              <td>
                <input type="text" name="assigned_refreshment" placeholder="1000.00" class="input-budget"  value="<?php echo $post->assigned_refreshment;?>">
              </td>
        </tr>
        <tr>
            <td>
              <label class="para-budget"> Equipment Cost</label></td>
              <td>
                <input type="text" name="assigned_equipment" placeholder="1000.00" class="input-budget"  value="<?php echo $post->assigned_equipment;?>">
              </td>
         </tr>
         <tr>
            <td>
              <label class="para-budget"> other Cost</label></td>
              <td>
                <input type="text" name="assigned_other" placeholder="1000.00" class="input-budget" value="<?php echo $post->assigned_other;?>">
              </td>
          </tr>
          
            <tr>
              <td colspan="2"><center><input type="submit" name="submit" class="search-btn" value="UPLOAD"><input type="reset" name="submit" class="search-btn" value="CANCEL"></center>
                </td>
              </tr>
         </form>
         <?php }?>
         </table>
            <table class="table">
                <thead>
                    <tr>
                      <th class="table_event_title" >Event title</th>
                      <th class="assigned">Proposed Decoration Cost</th>
                      <th class="table-header-actual">Assigned Decoration Cost</th>
                      <th class="assigned">Proposed Refreshment Cost</th>
                      <th class="table-header-actual">Assigend Refreshment Cost</th>
                      <th class="assigned">Proposed Equipment Cost</th>
                      <th class="table-header-actual">Assigned Equipment Cost</th>
                      <th class="assigned">Proposed Other Cost</th>
                      <th class="table-header-actual">Assigned Other Cost</th>
                      <th class="assigned">Proposed Cost</th>
                      <th class="table-header-actual">Assigned Total Cost</th>
                      <th class="assigned">Edit</th>
                    </tr>
                </thead>
         
                <tbody id="ajax_table">
                    
                </tbody>
            </table>
            <div class="container" style="text-align: center"><button class="upload-btn" id="load_more" data-val = "0">Load more.. </button>
          </div>
        </div>
      </div>
    </div>
  </center>
</div>
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 
<script>
    $(document).ready(function(){
        getBudget(0);
 
        $("#load_more").click(function(e){
            e.preventDefault();
            var page = $(this).data('val');
            getBudget(page);
 
        });
 
    });
 
    var getBudget = function(page){
        $("#loader").show();
        $.ajax({
            url:"<?php echo base_url() ?>index.php/Edit_budget/getBudget",
            type:'GET',
            data: {page:page}
        }).done(function(response){
            $("#ajax_table").append(response);
            $('#load_more').data('val', ($('#load_more').data('val')+1));
            
        });
    };
 
   
</script>
