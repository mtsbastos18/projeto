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
        if ($password == $this->encryption->decrypt($user['password']) && $user['active'] == 1){
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

    public function activate($params){
        $this->db->where("email",$params['email']);
        $this->db->where("active",0);
        
        $user = $this->db->get('users')->row_array();

        if ($user) {
            $password = $this->encryption->encrypt($params['password']);
            $this->db->set('password',$password);
            $this->db->set('active', 1);
            $this->db->where('id', $user['id']);
            if($this->db->update('users')){
                return true;
            }
        }
    
    }

    public function checkUser($email){
        $user = $this->db->where("email",$email)->get('users')->row_array();
        if ($user['password'] == "") {
            return true;
        }
        return false;
    }

}
?>