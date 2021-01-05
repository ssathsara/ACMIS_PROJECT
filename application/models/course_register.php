<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class course_register extends CI_Model{
 
  

	public function upload($data)
	{
		$insert_data['Name']= $data['Name']; 
        $insert_data['email'] = $data['email'];
        $insert_data['contact']   = $data['contact'];
        $insert_data['password']    =  random_string('unique');
        $insert_data['status']  = 'new';

        $course_name=$data['course_name'];

        if ($course_name==0) {
        	$query = $this->db->insert('arduino_and_3d_printing',$insert_data);
        }

         if ($course_name==1) {
        	$query = $this->db->insert('business_english',$insert_data);
        }

         if ($course_name==2) {
        	$query = $this->db->insert('english_enrichment',$insert_data);
        }

         if ($course_name==3) {
        	$query = $this->db->insert('scratch_programming',$insert_data);
        }
		
	}

	}