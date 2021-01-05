<?php

class Chat extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
        
            $this->load->model('chat_model');
    }
   

    public function chat_save(){
        $data=[
            'msg'=>$this->input->POST('msg'),
            'id'=>$this->session->userdata('name')
        ];
        $this->chat_model->send_data($data);
        redirect('Home/chat');
    }
    
}

    

    ?>
