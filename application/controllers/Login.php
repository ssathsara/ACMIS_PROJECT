<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


    public function verify(){
       
        $this->load->model('login_model');

        
        $this->form_validation->set_rules('uname', 'User Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('pwd', 'Password', 'trim|required|xss_clean');
        
        //run validation check
        if ($this->form_validation->run() == FALSE)
        {   //validation fails
            $this->load->view('home');
            
        }
        else
        {
        	$user_name = $this->input->post('uname');
        	
		    $result = $this->login_model->validate($this->input->post('uname'),$this->input->post('pwd'));
		        
		        if(! $result){
           			 
            		redirect('Home/index');
       			 }else{
           
       			 	if ($user_name == 'ADMIN') {
       			 		redirect('home/admin_load');
       			 	}
            	else{
            			redirect('home/yf_dashboard');
            		}
       		 }        
        }
   
    }

    public function logout(){
      $this->session->unset_userdata('name');
      redirect('home');
    } 

    
}
