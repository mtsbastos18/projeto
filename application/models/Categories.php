<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Categories extends CI_Model {
                        
    public function getAll(){
        $result = $this->db->get('categories')->result_array();
        $categories = ['categories' => $result];
        return  $categories;
    }                         
                        
}
                        
/* End of file Categories.php */
    
                        