<?php

class Upload extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            // $this->load->helper(array('form', 'url'));
            $this->load->library('upload');
    }
    public function do_upload()
    {
            
         $this->form_validation->set_rules('title', 'Event Title', 'required');
        if ($this->form_validation->run() == FALSE){
             redirect(base_url().'index.php/Home/update_newsfeed');
        }else{
                $config['upload_path']          = "./assests/img/event/"; #$this->config->item('base_url').
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
              
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                $data['title'] = $this->input->post('title', TRUE);
                $data['description'] = $this->input->post('description', TRUE);
                if ( ! $this->upload->do_upload('img'))
                {
                        $error = array('error' => $this->upload->display_errors('<p>','</p>'));
                        redirect(base_url().'index.php/Home/update_newsfeed',$error);
                }
                else
                {
                  $this->load->model('upload_news');
                        $upload_data =  $this->upload->data();
                        $data['img'] = $upload_data['file_name'];
                        $this->upload_news->upload_event($data);
                        redirect(base_url().'index.php/Home/update_newsfeed');

                }
            }     
        }
    }
    ?>
