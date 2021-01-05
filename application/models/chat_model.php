<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class chat_model extends CI_Model{
 
 public function send_data($data){
 	 $insert_data['user_id'] = $data['id'];
	    $insert_data['message'] = $data['msg'];
	    //$this->load->helper('date');
	    //$format = "%Y-%m-%d %h:%i %A";
	    //$insert_data['timestamp'] =mdate($format);
	    $query = $this->db->insert('chat_messages',$insert_data);
 }

 public function get_messages(){
 	return $this->db->get('chat_messages')->result();
 	
 }

	
}
?>