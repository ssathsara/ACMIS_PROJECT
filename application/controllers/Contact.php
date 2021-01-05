<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function send_reply(){
        $this->load->model("login_model");
        $data['results'] = $this->login_model->count_mesaage(); 
        $this->load->view('ADMIN/header',$data);

        $this->load->model('contact_model');
        $results = $this->contact_model->view_new_msg();

        $this->load->view('ADMIN/new_msg',['results' => $results]);
        $this->load->view('ADMIN/footer');
    }

public function send_mail(){
        
   
        
        $config['useragent'] = 'CodeIgniter';
        $config['protocol'] = 'mail';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = 587;
        $config['smtp_user'] = 'sathsarasammani@gmail.com';
        $config['smtp_pass'] = '19960821';
        $config['wrapchars'] = 76;
         //$config['mailpath'] = '/usr/sbin/sendmail';
         //$config['smtp_timeout']='30';
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['newline']='/r/n';
    
        
        $this->load->library('email', $config);
        
        $from_email = "sathsarasammani@gmail.com";
        $to_email = $this->input->post('to_email');
        echo $to_email;
        $subject = $this->input->post('American Corner Matara ');
        $name=$this->input->post('name');
        echo $name;
        $message =$this->input->post('message');

                //Load email library
        $this->load->library('email');
        $this->email->initialize($config);
        //$this->load->library('email', $config);

        $this->email->from($from_email, 'american corner matara');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message('Dear '.$name.','.$message);
        //Send mail
        if($this->email->send()){
           $this->session->set_flashdata('message','Message has been sent successfully.....!!!');
                   redirect(base_url().'index.php/Contact/send_reply');
        }
        else
          show_error($this->email->print_debugger());
        
    
    }

    
}
