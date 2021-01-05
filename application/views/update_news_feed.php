

  <div class ="right">
    <div class="container">
      <h4>Add newsfeed event</h4>
        <div class="content">
         <div class="news-content">
          <center><table>
          <?php if(isset($error))echo $error;  echo form_open_multipart('upload/do_upload');?>
           
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
              <label class="para-newsfeed"> Description</label></td>
              <td>
                <input type="text" name="description" placeholder="Description" class="input-newsfeed">
              </td>
          </tr>
          <tr>
            <td><label class="para-newsfeed"> Image</label></td>
            <td><input type="file" name="img" id="file-input">
            <label for="file-input">Choose a file</label>
            </td></tr>

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
</div>




 