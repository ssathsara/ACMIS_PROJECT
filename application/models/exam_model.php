<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class exam_model extends CI_Model{
 
	public function add_new($data)
	{
		$insert_data['subject']= $data['subject']; 
        $insert_data['exam_name'] = $data['name'];
        $insert_data['duration']   = $data['duration'];
        $insert_data['status']  = 'Deactive';

       
        $query = $this->db->insert('exam_details',$insert_data);	
	}


	public function view_all_records()
	{
		return $this->db->get_where('exam_details',['status!='=>'Deleted'])->result();
         
	}

	public function update($id)
	{
		$this->subject = $_POST['subject']; 
        $this->exam_name = $_POST['name'];
        $this->duration  = $_POST['duration'];
        $this->status = $_POST['status'];
		return $this->db->where(['id' => $id])->update('exam_details', $this);
	}

	public function view_a_record($id)
	{
		return $this->db->get_where('exam_details', ['id' => $id])->result();
	}

	public function delete($id)
	{
		return $this->db->where(['id' => $id])->update('exam_details', ['status'=> 'Deleted']);
	}

	public function add_question($data){
		$insert_data['exam_id']=$data['exam_id']; 
       	$insert_data['question']= $data['question']; 
        $insert_data['option_1'] = $data['option_1'];
        $insert_data['option_2']   = $data['option_2'];
        $insert_data['option_3']  = $data['option_3'];
        $insert_data['option_4']  = $data['option_4'];
        $insert_data['correct_answer']  = $data['answer'];

        $query = $this->db->insert('question',$insert_data);
	}

	public function get_subject_id($id){
		return $this->db->get_where('exam_details', ['id' => $id])->result();
	}

	public function view_all_questions($id)
	{
		return $this->db->get_where('question',['exam_id' => $id,'status'=> 'Active'])->result();
         
	}

	public function update_question($id)
	{
		$this->question = $_POST['question']; 
        $this->option_1 = $_POST['option_1'];
        $this->option_2 = $_POST['option_2'];
        $this->option_3 = $_POST['option_3'];
        $this->option_4 = $_POST['option_4'];
        $this->correct_answer = $_POST['correct'];
		return $this->db->where(['id' => $id])->update('question', $this);
	}	

	public function delete_question($id)
	{
		return $this->db->where(['id' => $id])->update('question', ['status'=> 'Deleted']);
	}

	public function view_a_question($id)
	{
		return $this->db->get_where('question', ['id' => $id])->result();

	}

	public function view_result($id){
		$query= $this->db->get_where('exam_details', ['id'=>$id]);
		$row= $query->row();
		$subject = $row->subject;

		if ($subject == 'Arduino and 3D Printing') {
			return $this->db->get_where('arduino_and_3D_printing',['exam_id'=>$id,'status' => 'New'])->result();
		}
		//return $this->db->get_where('',['Exam_ID'=>$id])->result();
	
	}

	public function get_student_email($UserID){
		return  $this->db->get_where('arduino_and_3D_printing', ['id'=> $UserID])->result();
	}

}