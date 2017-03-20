<?php
class Auth_model extends CI_Model {

  public function __construct(){
        parent::__construct();
    }

  public function validate() {

       // Prep the query
       $this->db->where('username', $this->input->post('username'));
       $this->db->where('password', md5($this->input->post('password')));
       $query = $this->db->get("users");

       if($query->num_rows() > 0)  {
         $data = array(
               'is_logged_in' => '1'
            );
            $this->db->where('username', $this->input->post('username'));
            $this->db->update('users', $data);
          return $query->result();
       } else {
         return false;
       }

  }
}
?>
