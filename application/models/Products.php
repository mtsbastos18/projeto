<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Products extends CI_Model {
                        
public function insert($product){
    $result = $this->db->insert("products", $product);
    return $result;                            
}

public function update($product){
    $result = $this->db->update('products',$product, array('id' => $product['id'])); 
    return $result;
}

public function delete($id){
    $result = $this->db->delete('products', array('id' => $id));
    return $result;
}
                        
public function getAll(){
    $this->db->select('products.*, categories.name as category');
    $this->db->from('products');
    $this->db->join('categories', 'products.category_id = categories.id');
    $result = $this->db->get()->result_array();
    $products = ['products' => $result];

    return  $products;
}              

public function getById($id){
    $this->db->select('*')->from("products")->where('id',$id);
    $product = $this->db->get()->result();
    return $product;
}

}
                        
/* End of file Products.php */
    
                        