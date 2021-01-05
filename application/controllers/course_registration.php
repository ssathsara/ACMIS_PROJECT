<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class course_registration extends CI_Controller {

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


    public function do_upload(){
       
        $this->load->model('course_register');
        $this->form_validation->set_rules('course_name','Course Name','required');
        $this->form_validation->set_rules('Name','Name','required');
        $this->form_validation->set_rules('email','Email Address','required|valid_email');
        $this->form_validation->set_rules('contact','Contact Number','required');


        if($this->form_validation->run()==FALSE){

        	redirect('home/free_courses');
        }else{

        $data = [
                'course_name'  => $this->input->post('course_name'),
                'Name'  => $this->input->post('Name'),
                'email'   => $this->input->post('email'),
                'contact'   => $this->input->post('contact'),
                ];

        $upload_data =  $this->upload->data();
        $this->course_register->upload($data);
        redirect('Home/free_courses');
        }
    
    }

    
}
