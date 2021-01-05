<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yf_register extends CI_Controller {



    public function do_upload(){
       
        $this->load->model('yf_registration');
        $pwd   = $this->input->post('password');
        $re_pwd = $this->input->post('re_pwd');

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('uname','User Name','required');
        $this->form_validation->set_rules('password','Password','required|max_length[10]');
        $this->form_validation->set_rules('re_pwd','Re-Enter Password','required|max_length[10]|matches[password]');


        if($this->form_validation->run()==FALSE){
        	$this->load->view('Yf_register');
        }else{

        $data = [
                'name'  => $this->input->post('name'),
                'uname'  => $this->input->post('uname'),
                'password'   => md5($pwd),
                're_pwd'   =>md5($re_pwd),
                ];

        $upload_data =  $this->upload->data();
        $last_id=$this->yf_registration->upload($data);

        redirect('Home/Yf_register');
        }
    
    }

    
}
