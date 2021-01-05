<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Do_exam extends CI_Controller {

	public function load_active_exam(){
		$this->load->view('Examination/header');
		$this->load->model('do_exam_model');
        $results = $this->do_exam_model->get_exam_details() ;
		$this->load->view('Examination/active_exam',['results' => $results]);
		$this->load->view('Examination/footer');

	}
	public function load_questions(){
		$this->load->view('Examination/header');
		$this->load->model('do_exam_model');

		// $this->load->library('pagination');

		// $config['base_url'] = base_url().'index.php/Do_exam/load_questions';
		// $config['uri_segement'] = 3;
		// $config['per_page'] =1;
		// $config['total_rows'] =$this->do_exam_model->getTotalRow();
		// $this->pagination->initialize($config);
		
		// $page = $this->uri->segment(3,0);
		// $data['pagination'] = $this->pagination->create_links();

		$data['results']=$this->do_exam_model->get_questions();
		
		$display_answer =$this->do_exam_model->get_answer_into_radio($data['results'][0]->exam_id);
		$this->load->view('Examination/load_question_view',['results'=>$data['results'],'display_answer'=>$display_answer]);
		$this->load->view('Examination/footer');
	}



	public function view_login($subject){
		$this->load->view('Examination/header');
		$decode_subject = urldecode($subject);
		$data['results'] = $decode_subject;
		$this->load->view('Examination/exam_login',$data);

		$this->load->view('Examination/footer');
	
	}



	public function exam_login(){

		$this->load->model('do_exam_model');

        
        $this->form_validation->set_rules('uname', 'User Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('pwd', 'Password', 'trim|required|xss_clean');
        
        //run validation check
        if ($this->form_validation->run())
        {   //validation fails
            
            $user_name = $this->input->post('uname');
            $Password = $this->input->post('pwd');
        	$subject = $this->input->post('subject');
        	$this->load->model('do_exam_model');

		    if ($this->do_exam_model->validate_arduino($user_name,$Password,$subject)){

				 	redirect('Do_exam/load_questions');

		    }
		        
		    else{
		    	$this->session->set_flashdata('error','Invalid login details or You cannot attend exam again');
		    	redirect(base_url().'index.php/Do_exam/view_login/'.$this->session->userdata('subject'));

		    }
        }
        else
        {
        	
		   redirect(base_url().'index.php/Do_exam/view_login/'.$this->session->userdata('subject'));         
        }
	}

	public function store_answers(){
		$this->load->model('do_exam_model');
		$id =$this->input->post('finish');
		$answer =$this->input->post('answer' . $id);
		$correct_answer=$this->input->post('correct_answer' . $id);
		$question_id =$this->input->post('question_id' . $id);
		//echo $answer;
		//echo $this->input->post('student_id' . $id);

		$data =[
			'exam_id' =>$this->input->post('exam_id' . $id),
			'student_id'=> $this->session->userdata('userid'),
			'question_id'=>$this->input->post('question_id' . $id),
			'answer' => $answer,
			'correct_answer'=>$this->input->post('correct_answer' . $id),
			'subject' => $this->input->post('subject'),
		];
		
		$this->do_exam_model->store_answers_model($data);
		
		$this->load->view('Examination/header');
		$display_answer =$this->do_exam_model->get_answer_into_radio($data['exam_id']);
		$results=$this->do_exam_model->get_questions();
		//echo var_dump($display_answer);
		$this->load->view('Examination/load_question_view',['results'=>$results,'display_answer'=>$display_answer]);

		//echo var_dump($data);
	}

	public function view_answer(){
		
	}

	public function finish_exam(){
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');

		redirect('Do_exam/load_active_exam');
	}

	
}
?>