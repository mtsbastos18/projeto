<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Products extends CI_Model {
                        
public function insert($product){
    $result = $this->db->insert("products", $product);
    return $result;                            
}
                        
public function getAll(){
    $this->db->select('*');
    $this->db->from('products');
    $this->db->join('categories', 'products.category_id = categories.id');
    $result = $this->db->get()->result_array();
    $products = ['products' => $result];
    exit(json_encode($products));
    return  $products;
}              
                        
}
                        
/* End of file Products.php */
    
                        