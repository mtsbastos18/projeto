<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Model extends CI_Model
{

   public function insert($table,$params){
       $result = $this->db->insert($table, $params);
       return $result;
   }

    public function update($table, $params){
        $result = $this->db->update($table,$params, array('id' => $params['id']));
        return $result;
    }

    public function delete($table,$id){
        $result = $this->db->delete($table, array('id' => $id));
        return $result;
    }

    public function getById($table,$id){
        $this->db->select('*')->from($table)->where('id',$id);
        $result = $this->db->get()->result();
        return $result;
    }

}
