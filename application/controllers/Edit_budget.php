<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_budget extends CI_Controller {

	
	public function getBudget(){
        $page =  $_GET['page'];
        $this->load->model('Edit_budget_model');
        $row= $this->Edit_budget_model->edit_budget($page);
        
         foreach($row as $data){
             echo "<tr><td class='table_event_title'>".$data->title."</td><td class='assigned'>".$data->proposed_decoration."</td><td class='table-header-actual'>".$data->assigned_decoration."</td><td class='assigned'>".$data->proposed_refreshment."</td><td class='table-header-actual'>".$data->assigned_refreshment."</td><td class='assigned'>".$data->proposed_equipment."</td><td class='table-header-actual'>".$data->assigned_equipment."</td><td class='assigned'>".$data->proposed_other."</td><td class='table-header-actual'>".$data->assigned_other."</td><td class='assigned'>".$data->proposed_total_cost."</td><td class='table-header-actual'>".$data->assigned_total_budget."</td> 

           	<td>
            <a href='../Home/edit/$data->event_id'><button class='edit-btn' name='edit_btn' >EDIT </button></td> 

             </tr>



             ";
        }
        exit;
    }

    public function update($event_id){
       
        $this->load->model('Edit_budget_model');
        $data = [
                'assigned_decoration'  => $this->input->post('assigned_decoration'),
                'assigned_refreshment'  => $this->input->post('assigned_refreshment'),
                'assigned_equipment'   => $this->input->post('assigned_equipment'),
                'assigned_other'   => $this->input->post('assigned_other'),
                ];
        $this->Edit_budget_model->update($event_id) ;
        redirect('Home/update_event');

    
    }
    

    
}
