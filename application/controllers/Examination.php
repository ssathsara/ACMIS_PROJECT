<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examination extends CI_Controller {

    public function view_exam(){
        $this->load->model("login_model");
        $data['results'] = $this->login_model->count_mesaage(); 
        $this->load->view('ADMIN/header',$data);

        $this->load->view('add_exam');
        $this->load->view('ADMIN/footer');
    }

    public function add_exam(){
       
        $this->load->model('exam_model');
        $this->form_validation->set_rules('name', 'Examination Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('duration', 'Duration', 'trim|required|xss_clean');
        
        //run validation check
        if ($this->form_validation->run() == FALSE)
        {   //validation fails
            $this->load->view('add_exam');
            
        }
        else
        {
        	
          $data = [
                'subject'  => $this->input->post('subject'),
                'name'  => $this->input->post('name'),
                'duration'   => $this->input->post('duration'),
                
                ];
          $this->exam_model->add_new($data);
          redirect('home/upload_exam');      

       		 }        
        }
   
    public function edit_exam($id)
    {
        $this->load->model("login_model");
        $data['results'] = $this->login_model->count_mesaage(); 
        $this->load->view('ADMIN/header',$data);
        
        $this->load->model('exam_model');
        $results = $this->exam_model->view_a_record($id) ;
        $this->load->view('edit_exam',['results' => $results]);
    }

    public function update($id)
    {
       $this->load->model('exam_model');
        $data = [
            'subject'  => $this->input->post('subject'),
            'name'  => $this->input->post('name'),
            'duration'   => $this->input->post('duration'),
            'status'   => $this->input->post('status'),
        ];
        $this->exam_model->update($id) ;
        redirect('home/upload_exam');
    }
    
    public function delete($id)
    {
        $this->load->model('exam_model');
        $results = $this->exam_model->delete($id);
        redirect('home/upload_exam');
    }

    public function view_questions($id){
        $this->load->model("login_model");
        $data['results'] = $this->login_model->count_mesaage(); 
        $this->load->view('ADMIN/header',$data);

        $subject = $this->exam_model->get_subject_id($id);
        
        $this->load->model('exam_model');
        $results = $this->exam_model->view_all_questions($id) ;
        $this->load->view('add_question',['results' => $results]);
        
       
        $data = array(
                    'examid' => $id,
                    'validated' => true
                    );
        $this->session->set_userdata($data);
       
    }

    public function add_question()
    { 

        $this->load->model('exam_model');
        $this->form_validation->set_rules('question', 'Question', 'trim|required|xss_clean');
        $this->form_validation->set_rules('op1', 'Option 1', 'trim|required|xss_clean');
        $this->form_validation->set_rules('op2', 'Option 2', 'trim|required|xss_clean');
        $this->form_validation->set_rules('op3', 'Option 3', 'trim|required|xss_clean');
        $this->form_validation->set_rules('op4', 'Option 4', 'trim|required|xss_clean');
        $this->form_validation->set_rules('correct', 'Correct Answer', 'trim|required|xss_clean');
       
        
        //run validation check
        if ($this->form_validation->run() == FALSE)
        {   //validation fails

           redirect('Examination/view_questions/'.$this->session->userdata('examid'));
            
        }
        else
        {
            
        $data = [
            'question'  => $this->input->post('question'),
            'exam_id'   => $this->session->userdata('examid'),
            'option_1'  => $this->input->post('op1'),
            'option_2'   => $this->input->post('op2'),
            'option_3'   => $this->input->post('op3'),
            'option_4'   => $this->input->post('op4'),
            'answer'      =>$this->input->post('correct'),
        ];
        $this->exam_model->add_question($data);
        redirect('Examination/view_questions/'. $this->session->userdata('examid'));
        }
    }

    public function finish(){
        $this->session->unset_userdata('examid');
        redirect('home/upload_exam');
    } 

     public function see_questions($id){
        $this->load->model("login_model");
        $data['results'] = $this->login_model->count_mesaage(); 
        $this->load->view('ADMIN/header',$data);

        $this->load->model('exam_model');
        $results = $this->exam_model->view_all_questions($id) ;
        $this->load->view('see_questions',['results' => $results]);
        
        $data = array(
                    'examid' => $id,
                    'validated' => true
                    );
        $this->session->set_userdata($data);    
    }

    public function edit_question($id)
    {
        $this->load->model("login_model");
        $data['results'] = $this->login_model->count_mesaage(); 
        $this->load->view('ADMIN/header',$data);

        $this->load->model('exam_model');
        $results = $this->exam_model->view_a_question($id) ;
        $this->load->view('edit_question',['results' => $results]);
    }

    public function update_question($id)
    {
       $this->load->model('exam_model');
        $data = [
            'question'  => $this->input->post('question'),
            'option_1'  => $this->input->post('option_1'),
            'option_2'  => $this->input->post('option_2'),
            'option_3'  => $this->input->post('option_3'),
            'option_4'  => $this->input->post('option_4'),
            'correct'  => $this->input->post('correct'),
        ];
        $this->exam_model->update_question($id) ;
        redirect('Examination/see_questions/'. $this->session->userdata('examid'));
    }
    
    public function delete_question($id)
    {
        $this->load->model('exam_model');
        $results = $this->exam_model->delete_question($id);
        redirect('Examination/see_questions/'. $this->session->userdata('examid'));
    }

    public function view_results($id){
        $this->load->model("login_model");
        $data['results'] = $this->login_model->count_mesaage(); 
        $this->load->view('ADMIN/header',$data);

        $this->load->model('exam_model');
        $results = $this->exam_model->view_result($id);
        
        $this->load->view('ADMIN/view_course_result',['results' =>$results]);
    }

    public function send_mail($UserID){
        $this->load->model('exam_model');
        $result=$this->exam_model->get_student_email($UserID);

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
        //$config['crlf']='/r/n';
       $this->load->library('email');
        $this->email->initialize($config);
        $users=array();
                foreach ($result as $email) {
                    
                    array_push($users, $email->email);  
                }
      

        //$this->load->library('email', $config);
        
        $from_email = "sathsarasammani@gmail.com";
        $this->email->to(implode(', ', $users));
       // echo $to_email;
        $subject = $this->input->post('American Corner Matara');
        //$name=$this->input->post('name');
       // echo $name;
       // $message =$this->input->post('message');

                //Load email library
        
        //$this->load->library('email', $config);

        $this->email->from($from_email, 'american corner matara');
        //$this->email->to($to_email);
        $this->email->subject("Selecting student for courses");
        $this->email->message("You are selected to course which you apply American Corner Matara");
        //Send mail
        if($this->email->send()){
          $this->session->set_flashdata('result','Message has been sent successfully.....!!!');
                  redirect(base_url().'index.php/Examination/view_results/'. 2);
        }
       else
         show_error($this->email->print_debugger());
        
    
    }
    

}
