<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Edit_budget_model extends CI_Model{
 
    public function edit_budget($page){
        $offset = 10*$page;
        $limit = 5;
        $sql = "select * from budget_plan ORDER BY event_id DESC limit $offset ,$limit ";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    public function view_a_record($id)
	{
		return $this->db->get_where('budget_plan', ['event_id' => $id])->result();
	}

	public function search($key){
		return $this->db->get_where('budget_plan', ['title' => $key])->result();
	}

	public function update($event_id)
	{
		$this->assigned_decoration = $_POST['assigned_decoration']; 
        $this->assigned_refreshment = $_POST['assigned_refreshment'];
        $this->assigned_equipment  = $_POST['assigned_equipment'];
        $this->assigned_other  = $_POST['assigned_other'];
		return $this->db->where(['event_id' => $event_id])->update('budget_plan', $this);
	}


	public function update_actual($event_id)
	{
		$proposed_decoration =$_POST['proposed_decoration'];
		$proposed_refreshment=$_POST['proposed_refreshment'];
		$proposed_equipment=$_POST['proposed_equipment'];
		$proposed_other= $_POST['proposed_other'];
		$proposed_total_cost = $proposed_decoration+$proposed_refreshment+$proposed_equipment+$proposed_other;

		$this->proposed_decoration = $_POST['proposed_decoration']; 
        $this->proposed_refreshment = $_POST['proposed_refreshment'];
        $this->proposed_equipment  = $_POST['proposed_equipment'];
        $this->proposed_other  = $_POST['proposed_other'];
        $this->proposed_total_cost = $proposed_total_cost;
		return $this->db->where(['event_id' => $event_id])->update('budget_plan', $this);
	}

}