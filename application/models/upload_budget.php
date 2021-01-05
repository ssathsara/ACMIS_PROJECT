<?php

class upload_budget extends CI_Model
{

	public function __construct()
	{
	    parent::__construct();
	}


	public function upload_budget($data) {

	    $insert_data['title'] = $data['title'];
	    $insert_data['proposed_decoration'] = $data['proposed_decoration'];
	    $insert_data['proposed_refreshment'] = $data['proposed_refreshment'];
	    $insert_data['proposed_equipment'] = $data['proposed_equipment'];
	    $insert_data['proposed_other'] = $data['proposed_other'];
	    $insert_data['proposed_total_cost'] =$data['proposed_decoration']+$data['proposed_refreshment']+$data['proposed_quipment']+$data['proposed_other'];

	    $query = $this->db->insert('budget_plan',$insert_data);
	   
	 } 	
}
?>