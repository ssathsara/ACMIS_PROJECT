<div class="question-container">
	<div class="content-display-timer">
		<div class="display-timer">
			<div id="box">
				
			</div>
		</div>
	</div>
	<div class="question-content">
		<div class="exam-details-header">
			<h2><?php echo $this->session->userdata('exam_name'); ?></h2>
			<h5><?php echo $this->session->userdata('subject'); ?></h5>
			<h5>Duration - <?php echo $this->session->userdata('duration'); ?> minutes</h5>
		</div>

		
		<?php 
		$i=0;
		foreach ($results as $results) {
			
		$ans_array= array($results->option_1,$results->option_2,$results->option_3,$results->option_4);
	
			?>
		<center>
			<div class="questions">
				<p>Question <?php echo ++$i; ?></p>
				<p><?php echo $results->question;?></p>
				<?php  echo form_open_multipart('Do_exam/store_answers/'.$i);?>
				<?php echo $i;?>
				<div class="option">
					<table>
						<?php foreach ($display_answer as $row) {
								echo var_dump($display_answer);							?>

						<tr>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="1" required <?php if ($row->answer==1) echo "checked";?>>&nbsp &nbsp<?=$ans_array[0];?></td><?php echo $i;?>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="2" required <?php if ($row->answer==2) echo "checked";?>>&nbsp &nbsp<?=$ans_array[1]?><?php echo $i;?></td><?php echo $i;?>
						</tr>

						<tr>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="3" required <?php if ($row->answer==3) echo "checked";?>> &nbsp &nbsp<?=$ans_array[2]?></td>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="4" required <?php if ($row->answer==4) echo "checked";?>> &nbsp &nbsp<?=$ans_array[3]?><br></td>
						</tr>
						<?php } ?>
					</table>
				</div>
					 
					<input type="hidden" name="question_id" value="<?php echo $results->id;?>">
					<input type="hidden" name="correct_answer" value="<?php echo $results->correct_answer;?>">
					<input type="hidden" name="student_id" value="<?php echo $this->session->userdata('userid'); ?>">
					<input type="hidden" name="exam_id" value="<?php echo $this->session->userdata('id'); ?>">
					<input type="submit" id="finish" name="finish" value="Save Answer" class="attend-btn">
				</form>
			</div>
		</center>

		<?php 

		}
		?>
		<a href="<?php echo base_url('index.php/Do_exam/finish_exam/');?>"><button class="attend-btn">FINISH EXAM</button>
					
	</div>
	
</div>

