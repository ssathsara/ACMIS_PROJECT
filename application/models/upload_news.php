<?php

class upload_news extends CI_Model
{

	public function __construct()
	{
	    parent::__construct();
	}
	public function upload_event($data) {

	    $insert_data['title'] = $data['title'];
	    $insert_data['description'] = $data['description'];
	    $insert_data['img'] = $data['img'];
	    $query = $this->db->insert('newsfeed',$insert_data);
	   
	 } 

	public function fetch_data(){
	    //$query = $this->db->get('newsfeed');

	    //return $query;

	$this->db->select('*');
	$this->db->from('newsfeed');
	$this->db->limit(10);
	$query_result = $this->db->get();

	return $query_result;
	}

	

}
?>