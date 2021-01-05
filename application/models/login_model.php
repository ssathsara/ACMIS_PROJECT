<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class login_model extends CI_Model{
 
  

	public function validate($uname,$pwd)
	{
		$this->db->where('uname',$uname);
		$this->db->where('password',md5($pwd));
		$query =$this->db->get('user');
		if ($query->num_rows()==1) {
		
			$row = $query->row();
            $data = array(
                    'userid' => $row->id,
                    'uname' => $row->uname,
                    'name' => $row->name,
                    
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;		
			
		}

		return false;
        
	}

	public function count_mesaage(){
		$query =  $this->db->get_where('contact_message',['status' => 'New']);
    	return $query->num_rows();
	}


}