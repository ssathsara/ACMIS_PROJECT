 <?php  
 class Main_model extends CI_Model  
 {  
      function can_login($username, $password)  
      {  
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('arduino_and_3d_printing');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }

      function save_message_data($data){
        $insert_data['name'] = $data['name'];
        $insert_data['email'] = $data['email'];
        $insert_data['phone'] = $data['phone'];
        $insert_data['message'] = $data['message'];
        $insert_data['status'] ='New';

         $query = $this->db->insert('contact_message',$insert_data);

      }

 }  