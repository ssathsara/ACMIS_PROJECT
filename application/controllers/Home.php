<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model("upload_news");
		//$data_left["fetch_data"]=$this->upload_news->fetch_data();
		$data["fetch_data"]=$this->upload_news->fetch_data();
		$this->load->view('home',$data);	
	}

	
	public function admin_load(){
		$this->load->model("login_model");
		$data['results'] = $this->login_model->count_mesaage(); 
		$this->load->view('ADMIN/header',$data);
		
		$this->load->view('admin_home');
		$this->load->view('ADMIN/footer');
	}


	public function yf_dashboard(){
		$this->load->view('yf_dashboard');
	}

	
	public function edit($event_id){
		$this->load->model("login_model");
		$data['results'] = $this->login_model->count_mesaage(); 
		$this->load->view('ADMIN/header',$data);

        $this->load->model('Edit_budget_model');
        $results = $this->Edit_budget_model->view_a_record($event_id) ;
        $this->load->view('update_event',['results' => $results]); 
    }
    public function free_courses(){
		$this->load->view('free_courses');
		
	}

	public function yf_register(){
		$this->load->model("login_model");
		
		$data['results'] = $this->login_model->count_mesaage(); 
		$this->load->view('ADMIN/header',$data);
		$this->load->view('yf_register');
		
	}
	


	public function update_event(){
		$this->load->model("login_model");
		
		$data['results'] = $this->login_model->count_mesaage(); 
		$this->load->view('ADMIN/header',$data);

		$this->load->model('Edit_budget_model');
    	$key=$this->input->post('title');
    	$data['results']=$this->Edit_budget_model->search($key);
    	$this->load->view('update_event',$data);
    	


	}


	public function update_newsfeed(){
		$this->load->model("login_model");	
		$data['results'] = $this->login_model->count_mesaage(); 
		$this->load->view('ADMIN/header',$data);
		$this->load->view('update_news_feed');
		
	}

	public function upload_exam(){
		$this->load->model("login_model");
		
		$data['results'] = $this->login_model->count_mesaage(); 
		$this->load->view('ADMIN/header',$data);
		$this->load->model('exam_model');
		$results = $this->exam_model->view_all_records() ;
      	$this->load->view('upload_exam',['results' => $results]);
      	
	}

	public function course_details(){
		$this->load->model("login_model");
		
		$data['results'] = $this->login_model->count_mesaage(); 
		$this->load->view('ADMIN/header',$data);
		$this->load->model('course');
		$data['results'] = $this->course->countRow(); 
		$this->load->view('course_details',$data);
	}

	public function save_message(){
		$this->load->model('main_model');

		$this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email Address','required|valid_email');
        $this->form_validation->set_rules('phone','Contact Number','required');
        $this->form_validation->set_rules('message','Message','required');

        if($this->form_validation->run()==FALSE){
        $this->load->model("upload_news");
        $data["fetch_data"]=$this->upload_news->fetch_data();
		$this->load->view('home',$data);	
        	
        }else{

        $data = [
                
                'name'  => $this->input->post('name'),
                'email'   => $this->input->post('email'),
                'phone'   => $this->input->post('phone'),
                'message'  => $this->input->post('message'),
                ];


        $this->main_model->save_message_data($data);
       	redirect('Home/index');
        }


	}

	public function exam_result_dash(){
		$this->load->model("login_model");
		$data['results'] = $this->login_model->count_mesaage(); 
		$this->load->view('ADMIN/header',$data);

		$this->load->model('exam_model');
		$results['results_data'] = $this->exam_model->view_all_records(); 
		$this->load->view('ADMIN/results_dash',$results);
		$this->load->view('ADMIN/footer');
	}

	public function tell_more(){
		
		$this->load->view('tell_more');
		
	}

	public function chat()
	{
		$this->load->model('chat_model');
		$this->load->model("login_model");
		$data['results'] = $this->login_model->count_mesaage(); 
		$this->load->view('ADMIN/header',$data);
		
		$results=$this->chat_model->get_messages();
		$this->load->view('chat_view',['results'=>$results]);

	}

}
