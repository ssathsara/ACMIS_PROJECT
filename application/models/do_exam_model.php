<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class do_exam_model extends CI_Model{
 
  	private $lastQuery = '';

	public function validate_arduino($user_name,$Password,$subject)
	{
		$this->db->where('email',$user_name);
		$this->db->where('password',$Password);

		if($subject =='Arduino and 3D Printing'){
		$query =$this->db->get('arduino_and_3D_printing');
		}

		elseif($subject == 'Business English') {
			$query =$this->db->get('business_english');
		} 

		elseif($subject == 'English Enrichment') {
			$query =$this->db->get('english_enrichment');
		} 

		elseif($subject == 'Scratch Programming') {
			$query =$this->db->get('scratch_programming');
		} 

		$row =$query->row();
		$id =$row->id;

		$query2 = $this->db->get_where('student_answer',['user_id'=>$id]);

		if (($query->num_rows()==1)&&($query2->num_rows()==0)) {
			
            $data = array(
                    'userid' => $row->id,
                    'name' => $row->Name,
                    'email' => $row->email,
                    
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;		
			
		}
		else{
			return false;
		}
		
        
	}

	public function get_exam_details(){
		$query= $this->db->get_where('exam_details', ['status' => 'Active']);
		$row= $query->row();
		$subject= array(
			'id' => $row->id,
			'subject' => $row->subject,
			'exam_name'=>$row->exam_name,
			'duration' =>$row->duration
		);
		
		$this->session->set_userdata($subject);
		return $query->result();
	}

	public function get_questions(){
		
		$query=$this->db->get_where('question',['status'=>'Active','exam_id'=>$this->session->userdata('id')]);
	//echo var_dump($query);
		return $query->result();	
	}

	public function store_answers_model($data){
		
		//echo var_dump($data);
		$answer=$data['answer'];
		$correct_answer = $data['correct_answer'];
		$match = "";
		if($answer == $correct_answer){
			$match="true";
			
		}
		else{
			$match="false";
		}


		$q_id=$data['question_id'];

		$get_questions_query=$this->db->get_where('student_answer',['question_id'=>$q_id,'user_id'=>$data['student_id']]);
		
		$num_rows = $get_questions_query->num_rows();
		
		 if ($num_rows == 0 ) {

		 	$insert_data['exam_id'] = $data['exam_id']; 
			$insert_data['user_id'] = $data['student_id'];
			$insert_data['subject'] = $data['subject'];
			$insert_data['question_id'] = $data['question_id'];
			$insert_data['correct_answer'] = $data['correct_answer'];
			$insert_data['answer'] = $data['answer'];
			$insert_data['match_answer'] = $match;

		// 	// echo var_dump($insert_data);
		 	$query = $this->db->insert('student_answer',$insert_data);

		 }else{

			$this->answer = $data['answer']; 
			$this->match_answer=$match;
			$this->db->where(['question_id' => $q_id])->update('student_answer', $this);
		 }

		
	}


	public function get_answer_into_radio($question_id){
		$query = $this->db->get_where('student_answer',['exam_id' =>$question_id,'user_id'=>$this->session->userdata('userid')]);

		return $query->result();
	}

// $this->db->select('*');
// 		$this->db->from('question q');
// 		$this->db->join('student_answer stu_ans','stu_ans.question_id=q.id','left');
// 		$this->db->where(['a.id'=>$question_id,'a.status'=>'Active','a.exam_id'=>$this->session->userdata('id')]);
// 		$query =$this->db->get();

// 		return $query->result();
	public function getTotalRow(){
		$query=$this->db->get_where('question',['status'=>'Active','exam_id'=>$this->session->userdata('id')]);
		$numrows= $query->num_rows();
		return $numrows;
	}
 

}