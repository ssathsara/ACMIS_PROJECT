<div class="question-container">
	<div class="content-display-timer">
		<div class="display-timer">
			<div id="box">
				<h5 style='padding-left: 20px;padding-top: 20px;'>Examination Guidelines</h5>
				<ul>
					<br><li>Exam will be automatically finished, after 30 minutes </li><br>
					<li>Make sure to save your answer for each question by clicking 'Save Answer' button</li><br>
					<li> If you get selected for the course module after the exam, you will receive an email within one week</li><br>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="question-content">
		<div class="exam-details-header">
			<h2><?php echo $this->session->userdata('exam_name'); ?></h2>
			<h5><?php echo $this->session->userdata('subject'); ?></h5>
			<h5>Duration - <?php echo $this->session->userdata('duration'); ?> minutes</h5>
		</div>

		<?php  echo form_open_multipart('Do_exam/store_answers');?>
		<?php
		$answered_ques = array();
		//var_dump($display_answer);
		foreach ($display_answer as $value) {
		 	if (!in_array($value->question_id, $answered_ques)) {
		 		array_push($answered_ques, $value->question_id);
		 	}
		 }
		 //var_dump($answered_ques);
		$i=0;
		foreach ($results as $results) {
			
		$ans_array= array($results->option_1,$results->option_2,$results->option_3,$results->option_4);
		

		if (in_array($results->id, $answered_ques)) {
			foreach ($display_answer as $value1) {
				if ($value1->question_id == $results->id) {
					if ($value1->answer == 1) {
						?>
							<center>
			<div class="questions">
				<p>Question <?php echo ++$i; ?></p>
				<p><?php echo $results->question;?></p>
				
				
				<div class="option">
					<table>
						
						<tr>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="1" checked>&nbsp &nbsp<?=$ans_array[0]?></td>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="2" >&nbsp &nbsp<?=$ans_array[1]?></td> 
						</tr>

						<tr>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="3" >&nbsp &nbsp<?=$ans_array[2]?></td>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="4" >&nbsp &nbsp<?=$ans_array[3]?><br></td>
						</tr>
						
					</table>
				</div>
					 
					<input type="hidden" name="question_id<?php echo $i;?>" value="<?php echo $results->id;?>">
					<input type="hidden" name="correct_answer<?php echo $i;?>" value="<?php echo $results->correct_answer;?>">
					<input type="hidden" name="student_id<?php echo $i;?>" value="<?php echo $this->session->userdata('userid'); ?>">
					<input type="hidden" name="exam_id<?php echo $i;?>" value="<?php echo $this->session->userdata('id'); ?>">
					<button type="submit" id="finish" name="finish" value="<?php echo $i;?>" class="attend-btn">Save Answer</button>
				
			</div>
		</center>

						<?php
					} elseif ($value1->answer == 2) {
						?>
							<center>
			<div class="questions">
				<p>Question <?php echo ++$i; ?></p>
				<p><?php echo $results->question;?></p>
				
				
				<div class="option">
					<table>
						
						<tr>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="1" >&nbsp &nbsp<?=$ans_array[0]?></td> 
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="2" checked>&nbsp &nbsp<?=$ans_array[1]?></td>
						</tr>

						<tr>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="3" >&nbsp &nbsp<?=$ans_array[2]?></td>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="4" >&nbsp &nbsp<?=$ans_array[3]?><br></td>
						</tr>
						
					</table>
				</div>
					 
					<input type="hidden" name="question_id<?php echo $i;?>" value="<?php echo $results->id;?>">
					<input type="hidden" name="correct_answer<?php echo $i;?>" value="<?php echo $results->correct_answer;?>">
					<input type="hidden" name="student_id<?php echo $i;?>" value="<?php echo $this->session->userdata('userid'); ?>">
					<input type="hidden" name="exam_id<?php echo $i;?>" value="<?php echo $this->session->userdata('id'); ?>">
					<button type="submit" id="finish" name="finish" value="<?php echo $i;?>" class="attend-btn">Save Answer</button>
				
			</div>
		</center>

						<?php
					} elseif ($value1->answer == 3) {
						?>
							<center>
			<div class="questions">
				<p>Question <?php echo ++$i; ?></p>
				<p><?php echo $results->question;?></p>
				
				
				<div class="option">
					<table>
						
						<tr>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="1" >&nbsp &nbsp<?=$ans_array[0]?></td>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="2" >&nbsp &nbsp<?=$ans_array[1]?></td>
						</tr>

						<tr>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="3" checked>&nbsp &nbsp<?=$ans_array[2]?></td>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="4" >&nbsp &nbsp<?=$ans_array[3]?><br></td>
						</tr>
						
					</table>
				</div>
					 
					<input type="hidden" name="question_id<?php echo $i;?>" value="<?php echo $results->id;?>">
					<input type="hidden" name="correct_answer<?php echo $i;?>" value="<?php echo $results->correct_answer;?>">
					<input type="hidden" name="student_id<?php echo $i;?>" value="<?php echo $this->session->userdata('userid'); ?>">
					<input type="hidden" name="exam_id<?php echo $i;?>" value="<?php echo $this->session->userdata('id'); ?>">
					<button type="submit" id="finish" name="finish" value="<?php echo $i;?>" class="attend-btn">Save Answer</button>
				
			</div>
		</center>

						<?php
					} else {
						?>
							<center>
			<div class="questions">
				<p>Question <?php echo ++$i; ?></p>
				<p><?php echo $results->question;?></p>
				
				
				<div class="option">
					<table>
						
						<tr>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="1" >&nbsp &nbsp<?=$ans_array[0]?></td>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="2" >&nbsp &nbsp<?=$ans_array[1]?></td>
						</tr>

						<tr>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="3" >&nbsp &nbsp<?=$ans_array[2]?></td>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="4" checked>&nbsp &nbsp<?=$ans_array[3]?><br></td>
						</tr>
						
					</table>
				</div>
					 
					<input type="hidden" name="question_id<?php echo $i;?>" value="<?php echo $results->id;?>">
					<input type="hidden" name="correct_answer<?php echo $i;?>" value="<?php echo $results->correct_answer;?>">
					<input type="hidden" name="student_id<?php echo $i;?>" value="<?php echo $this->session->userdata('userid'); ?>">
					<input type="hidden" name="exam_id<?php echo $i;?>" value="<?php echo $this->session->userdata('id'); ?>">
					<button type="submit" id="finish" name="finish" value="<?php echo $i;?>" class="attend-btn">Save Answer</button>
				
			</div>
		</center>

						<?php
					}
				}
			}
			
		} else {
			?>
							<center>
			<div class="questions">
				<p>Question <?php echo ++$i; ?></p>
				<p><?php echo $results->question;?></p>
				
				
				<div class="option">
					<table>
						
						<tr>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="1" >&nbsp &nbsp<?=$ans_array[0]?></td>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="2" >&nbsp &nbsp<?=$ans_array[1]?></td>
						</tr>

						<tr>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="3" >&nbsp &nbsp<?=$ans_array[2]?></td>
							<td><input type="radio" id="answer" name="answer<?=$i;?>" value="4" >&nbsp &nbsp<?=$ans_array[3]?><br></td>
						</tr>
						
					</table>
				</div>
					 
					<input type="hidden" name="question_id<?php echo $i;?>" value="<?php echo $results->id;?>">
					<input type="hidden" name="correct_answer<?php echo $i;?>" value="<?php echo $results->correct_answer;?>">
					<input type="hidden" name="student_id<?php echo $i;?>" value="<?php echo $this->session->userdata('userid'); ?>">
					<input type="hidden" name="exam_id<?php echo $i;?>" value="<?php echo $this->session->userdata('id'); ?>">
					<button type="submit" id="finish" name="finish" value="<?php echo $i;?>" class="attend-btn">Save Answer</button>
				
			</div>
		</center>

						<?php
		}
			
		}
		?>
		
		</form>	
		<a href="<?php echo base_url('index.php/Do_exam/finish_exam/');?>"><button class="attend-btn">FINISH EXAM</button>		
	</div>
	
</div>

