 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class contact_model extends CI_Model{
 
  public function view_new_msg(){
    return $this->db->get_where('contact_message',['status'=>'new'])->result();
  }

}