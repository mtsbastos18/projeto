<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Products extends MY_Model {

public function getAll(){
    $this->db->select('products.*, categories.name as category');
    $this->db->from('products');
    $this->db->join('categories', 'products.category_id = categories.id');
    $result = $this->db->get()->result_array();
    $products = array('products' => $result);

    return  $products;
}              



}
                        
/* End of file Products.php */
    
                        