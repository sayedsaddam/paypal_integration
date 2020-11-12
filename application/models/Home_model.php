<?php defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 * All the database queries will be written here in this class.
 */
class Home_model extends CI_Model{
    // Create user
    public function sign_up($data){
        $this->db->insert('users', $data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    public function signin($username, $password){
        $this->db->select('id, name, username, password');
        $this->db->from('users');
        $this->db->where(array('username' => $username, 'password' => $password));
        return $this->db->get()->row();
    }
}
