<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class yf_registration extends CI_Model{
 
  

	public function upload($data)
	{
		$insert_data['name']= $data['name']; 
        $insert_data['uname'] = $data['uname'];
        $insert_data['password']   = $data['password'];
        $insert_data['re_pwd']  = $data['re_pwd'];

       
        $query = $this->db->insert('user',$insert_data);
        

		
	}

}