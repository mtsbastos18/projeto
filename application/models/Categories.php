<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Categories extends MY_Model {
                        
    public function getAll(){
        $result = $this->db->get('categories')->result_array();
        $categories = array('categories' => $result);
        return  $categories;
    }                         
                        
}
                        
/* End of file Categories.php */
    
                        