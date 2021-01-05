<?php

class Budget extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            // $this->load->helper(array('form', 'url'));
            $this->load->library('upload');
            $this->load->model('upload_budget');
    }
   
    public function do_upload()
    {        
        $this->form_validation->set_rules('title', 'Event Title', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('event_planning');
        }else{
            $data['title'] = $this->input->post('title', TRUE);
            $data['decoration'] = $this->input->post('decoration', TRUE);
            $data['refreshment'] = $this->input->post('refreshment', TRUE);
            $data['equipment'] = $this->input->post('equipment', TRUE);
            $data['other'] = $this->input->post('other', TRUE);

                $this->load->model('upload_budget');
                $upload_data =  $this->upload->data();
                $this->upload_budget->upload_budget($data);

                redirect(base_url().'/');     
        }     
    }  
}

?>
