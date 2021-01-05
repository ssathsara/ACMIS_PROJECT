 <div class ="right">
    <center>
      <div class="container" style="height: 700px;">
        <h4>Chat</h4>
       

        <div class="chat_container" >

         <?php foreach ($results as $results) { ?>
          <div class="msg_body">
              <?= $results->message;?>
              <div class="user-id">
                <?= $results->user_id;?><br>
                <?= $results->timestamp;?>   
              </div>
          </div>
          <?php } ?>
          </div>
          

          <div class="type-msg" id="messageBody"> 
          <?php  echo form_open('Chat/chat_save');?>
           <table>
          <tr>
            <td> <input class="chat_form" type="text" id="msg" name="msg"></td>
         
           <td><button class="chat_btn" type="submit" >SEND</button></td>
           </tr>

             <!--  <td><script>
              $(document).ready(function(){
                  $('#msg').emojioneArea({
                    pickerPosition:"right"
                  });
              })
            </script></td> -->
         
          </table>

         </form></div>
         </center>
       <!-- <script type="text/javascript">
         var objDiv = document.getElementById("messageBody");
objDiv.scrollTop = objDiv.scrollHeight;
       </script> -->
        </div> 
    </div>  
  </div>