<?php

class Yf_function extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            // $this->load->helper(array('form', 'url'));
            $this->load->library('upload');
    }

    
    public function view_update_newsfeed(){
        $this->load->view('Youth_forum/update_newsfeed_yf');
        $this->load->view('ADMIN/footer');
    }

    public function do_upload()
    {
            
         $this->form_validation->set_rules('title', 'Event Title', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('Youth_forum/update_newsfeed_yf');
        }else{
            
                 $config['upload_path']          = "./assests/img/event/"; #$this->config->item('base_url').
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                $data['title'] = $this->input->post('title', TRUE);
                $data['description'] = $this->input->post('description', TRUE);

                
                if ( ! $this->upload->do_upload('img'))
                {
                        $error = array('error' => $this->upload->display_errors('<p>','</p>'));
                        $this->load->view('view_update_newsfeed',$error);
                }

                else
                {

                        $this->load->model('upload_news');
                        $upload_data =  $this->upload->data();
                        $data['img'] = $upload_data['file_name'];

                        
                        $this->upload_news->upload_event($data);

                         #base_url().'upload/'.
                        redirect(base_url().'Yf_function');

                }
            }     
        }

        public function update_event(){
            $this->load->model('Edit_budget_model');
            $key=$this->input->post('title');
            $data['results']=$this->Edit_budget_model->search($key);
            $this->load->view('Youth_forum/update_event_yf',$data);
            $this->load->view('ADMIN/footer');
        }

        public function update($event_id){
       
        $this->load->model('Edit_budget_model');
        $data = [
                'proposed_decoration'  => $this->input->post('proposed_decoration'),
                'proposed_refreshment'  => $this->input->post('proposed_refreshment'),
                'proposed_equipment'   => $this->input->post('proposed_equipment'),
                'proposed_other'   => $this->input->post('proposed_other'),
                ];
        $this->Edit_budget_model->update_actual($event_id) ;
        redirect('Yf_function/update_event');

    
        }


    public function getBudget(){
        $page =  $_GET['page'];
        $this->load->model('Edit_budget_model');
        $row= $this->Edit_budget_model->edit_budget($page);
        
         foreach($row as $data){
             echo "<tr><td class='table_event_title'>".$data->title."</td><td class='assigned'>".$data->proposed_decoration."</td><td class='table-header-actual'>".$data->assigned_decoration."</td><td class='assigned'>".$data->proposed_refreshment."</td><td class='table-header-actual'>".$data->assigned_refreshment."</td><td class='assigned'>".$data->proposed_equipment."</td><td class='table-header-actual'>".$data->assigned_equipment."</td><td class='assigned'>".$data->proposed_other."</td><td class='table-header-actual'>".$data->assigned_other."</td><td class='assigned'>".$data->proposed_total_cost."</td><td class='table-header-actual'>".$data->assigned_total_budget."</td> 

            <td>
            <a href='../Yf_function/edit/$data->event_id'><button class='edit-btn' name='edit_btn' >EDIT </button></td> 

             </tr>



             ";
        }
        exit;
    }

    public function edit($event_id){
        $this->load->model('Edit_budget_model');
        $results = $this->Edit_budget_model->view_a_record($event_id) ;
        $this->load->view('Youth_forum/update_event_yf',['results' => $results]);      
    

    }

    public function propose_event_budget(){
        $this->load->view('Youth_forum/propose_budget_view');
         $this->load->view('ADMIN/footer');
    }

     public function proposed_budget_upload()
    {
            
        $this->form_validation->set_rules('title', 'Event Title', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('Youth_forum/propose_budget_view');
        }else{

                $data['title'] = $this->input->post('title', TRUE);
                $data['proposed_decoration'] = $this->input->post('decoration', TRUE);
                $data['proposed_refreshment'] = $this->input->post('refreshment', TRUE);
                $data['proposed_equipment'] = $this->input->post('equipment', TRUE);
                $data['proposed_other'] = $this->input->post('other', TRUE);


             
                        $this->load->model('upload_budget');
                        $upload_data =  $this->upload->data();
                        

                        
                        $this->upload_budget->upload_budget($data);

                         #base_url().'upload/'.
                        redirect(base_url().'/');

                
            }     
        }

}
    ?>