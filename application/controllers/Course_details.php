<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_details extends CI_Controller {

    public function get_ard_student_details(){
        $this->load->model("login_model");
        $data['results'] = $this->login_model->count_mesaage(); 
        $this->load->view('ADMIN/header',$data);
        
        $this->load->model('course');
        $results = $this->course->fetch_student_details() ;

        $this->load->view('Course_details/ard_student_details',['results' => $results]);
        $this->load->view('ADMIN/footer');
    }

    public function remove_details(){
        $this->load->model('course');
        $results = $this->course->delete();
        redirect('Course_details/get_ard_student_details');
    }

 public function get_be_student_details(){
        $this->load->model("login_model");
        
        $data['results'] = $this->login_model->count_mesaage(); 
        $this->load->view('ADMIN/header',$data);
        $this->load->model('course');
        $results = $this->course->fetch_be_student_details() ;

        $this->load->view('Course_details/be_student_details',['results' => $results]);
        $this->load->view('ADMIN/footer');
    }

    public function remove_be_details(){
        $this->load->model('course');
        $results = $this->course->delete_be();
        redirect('Course_details/get_be_student_details');
    }


     public function get_ee_student_details(){
        $this->load->model("login_model");
        
        $data['results'] = $this->login_model->count_mesaage(); 
        $this->load->view('ADMIN/header',$data);
        $this->load->model('course');
        $results = $this->course->fetch_ee_student_details() ;

        $this->load->view('Course_details/ee_student_details',['results' => $results]);
        $this->load->view('ADMIN/footer');
    }

    public function remove_ee_details(){
        $this->load->model('course');
        $results = $this->course->delete_ee();
        redirect('Course_details/get_ee_student_details');
    }


     public function get_sp_student_details(){
        $this->load->model("login_model");
        
        $data['results'] = $this->login_model->count_mesaage(); 
        $this->load->view('ADMIN/header',$data);
        $this->load->model('course');
        $results = $this->course->fetch_sp_student_details() ;

        $this->load->view('Course_details/sp_student_details',['results' => $results]);
        $this->load->view('ADMIN/footer');
    }

    public function remove_sp_details(){
        $this->load->model('course');
        $results = $this->course->delete_sp();
        redirect('Course_details/get_sp_student_details');
    }

    public function view_email_form($data){
        $this->load->model('course');

        $results=array(
            'results'=>$this->course->fetch_data($data),
            'data' => $data);
        
        $this->load->view('ADMIN/header');
        $this->load->view('Course_Details/send_email_view',$results);
    }

    

    // public function email_form($id){
    //     $this->load->model('course');
    //     $data = [
    //             'subject'  => $this->input->post('subject'),
    //             ];
    //     $results=$this->course->fetch_student_email_data($id,$data);

    //     $this->load->view('ADMIN/header');
    //     $this->load->view('Course_Details/send_email_form',['results'=>$results]);
    // }


    public function send_mails_exam($data){
        
        
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
        $config['newline']='\r\n';
        //$config['crlf']='/r/n';

        $this->load->library('email', $config);

        $exam_link="http://localhost/ACMIS_WEB/index.php/Do_exam/load_active_exam";
        $from_email = "sathsarasammani@gmail.com";
        
        $this->load->library('email');
        $this->email->initialize($config);

        $this->load->model('course');
        $data_email=$this->course->fetch_student_email_data($data);

        //validation 
        //$this->form_validation->set_rules('Mail', 'Mail Type', 'required');

        //if ($this->form_validation->run())
        //{  
           // echo "validated";
            $option = $this->input->post('mail');

            if ($option == 1) {
                $log_details=array();
                $users=array();
                foreach ($data_email as $email) {
                    array_push($log_details, $email->password);
                    array_push($users, $email->email);  
                }

                $this->email->from($from_email, 'american corner matara');
                $this->email->to(implode(', ', $users));

                $subject = "THIS IS A TEST EMAIL";
                $this->email->subject($subject);

                $i=0;
                
                for ($i=0; $i <sizeof($log_details) ; $i++) { 
                   $this->email->message('Dear student ,'."  ". "\r\n" .'Examination Link :'.$exam_link. "\r\n" ."  ".'Login details:   '. "\r\n" .'Use your email address as email and password is  '.$log_details[$i]);
                }

                //Send mail
                if($this->email->send()){
                   $this->session->set_flashdata('email','Email has been sent successfully.....!!!');
                   redirect(base_url().'index.php/Home/course_details');
                }
                else
                  show_error($this->email->print_debugger());
            }

            if ($option == 2) {
                
                $users=array();
                foreach ($data_email as $email) {
                    
                    array_push($users, $email->email);  
                }

                $this->email->from($from_email, 'american corner matara');
                $this->email->to(implode(', ', $users));

                $subject = "THIS IS A TEST EMAIL";
                $this->email->subject($subject);

                $this->email->message('Dear student , You have selected the course you have applied in American Corner Matara');
                

                //Send mail
                if($this->email->send()){
                  $this->session->set_flashdata('email','Email has been sent successfully.....!!!');
                   redirect(base_url().'index.php/Home/course_details');
               }
                else
                  show_error($this->email->print_debugger());
            }
    
    }

// public function send_mails_exam($data){
//         $this->load->model('course');
//         $results=$this->course->fetch_student_email_data($data);

//         $config['useragent'] = 'CodeIgniter';
//         $config['protocol'] = 'https';
//         $config['smtp_host'] = 'smtp.gmail.com';
//         $config['smtp_port'] = '587';
//         $config['smtp_user'] = 'sathsarasammani@gmail.com';
//         $config['smtp_pass'] = '19960821';
//         $config['wrapchars'] = 76;
//         $config['mailtype'] = 'html';
//         $config['charset'] = 'iso-8859-1';
//         $config['newline']='/r/n';
//         $config['crlf']='/r/n';

        
//         $this->load->library('email', $config);
//         $exam_link="http://localhost/ACMIS_WEB/index.php/Do_exam/load_active_exam";
//         $from_email = "sathsarasammani@gmail.com";
//         $to_email ="eshmini@gmail.com";
//         //$subject = $this->input->post('subject');
//         //$name=$this->input->post('name');
//         //$message =$this->input->post('message');

//                 //Load email library
//         $this->load->library('email');
//         $this->email->initialize($config);
//         //$this->load->library('email', $config);

//         $this->email->from($from_email, 'american corner matara');
//         $this->email->to($to_email);
//         $this->email->subject('hhguyfkuyf');
//         $this->email->message('Dear '.','."  ".'Examination Link :'.$exam_link."  ".'Login details');
//         //Send mail
//         if($this->email->send())
//            echo "mail sent";
//         else
//           show_error($this->email->print_debugger());
        
    
//     }

    
}
