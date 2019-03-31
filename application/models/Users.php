<?php

class Users extends CI_Model
{
    public function __construct() {
		parent:: __construct();
		// Load encryption library
		$this->load->library('encryption');
	}
		
    public function insert($user)
    {   
        $result = $this->db->insert("users", $user);
        return $result;
    }   

    public function login($user, $password)
    {
        $where = ['username' => $user];
        $user = $this->find(NULL, $where);
        if ($password == $this->encryption->decrypt($user['password'])){
            return $user;
        }
        return false;
    }

    public function find($field = NULL,$where = NULL)
    {
        $user = [];
        $this->db->where($where);
        if($this->db->get('users')->num_rows() == 1) {
            $this->db->where($where);
            $user = $this->db->get('users')->row_array();
        }
        return $user;
    }
}
?>