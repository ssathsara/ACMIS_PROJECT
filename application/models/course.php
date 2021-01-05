 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class course extends CI_Model{
 
  
public function countRow(){
    $query1 =  $this->db->get_where('arduino_and_3d_printing',['status' => 'new']);
    $ard = $query1->num_rows();
    $query2 =  $this->db->get_where('business_english',['status' => 'new']);
    $be = $query2->num_rows();
    $query3 =  $this->db->get_where('english_enrichment',['status' => 'new']);
    $ee = $query3->num_rows();
    $query4 =  $this->db->get_where('scratch_programming',['status' => 'new']);
    $sp = $query4->num_rows();
    

    $array = array( $ard,$be,$ee, $sp);

    return $array;
}


public function fetch_student_details(){
    return $this->db->get_where('arduino_and_3d_printing',['status' => 'new'])->result();
}

public function delete(){
    return $this->db->where(['status' => 'new'])->update('arduino_and_3d_printing', ['status'=> 'Deleted']);
}

public function fetch_be_student_details(){
    return $this->db->get_where('business_english',['status' => 'new'])->result();
}

public function delete_be(){
    return $this->db->where(['status' => 'new'])->update('business_english', ['status'=> 'Deleted']);
}

public function fetch_ee_student_details(){
    return $this->db->get_where('english_enrichment',['status' => 'new'])->result();
}

public function delete_ee(){
    return $this->db->where(['status' => 'new'])->update('english_enrichment', ['status'=> 'Deleted']);
}

public function fetch_sp_student_details(){
    return $this->db->get_where('scratch_programming',['status' => 'new'])->result();
}

public function delete_sp(){
    return $this->db->where(['status' => 'new'])->update('scratch_programming', ['status'=> 'Deleted']);
}

public function fetch_data($data){
    if ($data == 1) {
         return $this->db->get_where('arduino_and_3d_printing',['status' => 'new'])->result();
    }

    if ($data==2) {
       return $this->db->get_where('business_english',['status' => 'new'])->result();
    }

    if ($data==3) {
       return $this->db->get_where('english_enrichment',['status' => 'new'])->result();
    }

    if ($data==4) {
       return $this->db->get_where('scratch_programming',['status' => 'new'])->result();
    }

}

public function fetch_student_email_data($data){
   $subject = $data;

   if ($subject == 1) {
        $sql = "SELECT `email`,`password` FROM `arduino_and_3d_printing` WHERE `status`='new'";
        $query = $this->db->query($sql);
       return $query->result(); 
    } 

    if ($subject == 2) {
        $sql = "SELECT `email`,`password` FROM `business_english` WHERE `status`='new'";
        $query = $this->db->query($sql);
       return $query->result(); 
    } 

    if ($subject == 3) {
        $sql = "SELECT `email`,`password` FROM `english_enrichment` WHERE `status`='new'";
        $query = $this->db->query($sql);
       return $query->result(); 
    } 

    if ($subject == 4) {
        $sql = "SELECT `email`,`password` FROM `scratch_programming` WHERE `status`='new'";
        $query = $this->db->query($sql);
       return $query->result(); 
    } 
}
}