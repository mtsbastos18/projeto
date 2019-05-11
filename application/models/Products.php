<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Products extends MY_Model
{

    public function getAll()
    {
        $this->db->select('products.*, categories.name as category, stock.amount');
        $this->db->from('products');
        $this->db->join('categories', 'products.category_id = categories.id');
        $this->db->join('stock','products.id = stock.product_id');
        $result = $this->db->get()->result_array();
        $products = array('products' => $result);

        return  $products;
    }

    public function save($params, $amount)
    {
        $this->db->insert('products', $params);
        $id = $this->db->insert_id();
        $stock = array(
            "product_id" => $id,
            "amount"     => $amount,
        );
        $this->insert("stock", $stock);
        return true;
    }

    public function getProductById($id){
        $this->db->select('products.*, stock.amount');
        $this->db->from('products');
        $this->db->join('stock','products.id = stock.product_id');
        $this->db->where('products.id',$id);

        $result = $this->db->get()->result_array();
        return $result;
    }

    public function updateProduct($table,$params,$amount){
        $this->db->update($table,$params, array('id' => $params['id']));
        $stock = array("product_id" => $params['id'],"amount" => $amount);
        $this->db->update('stock',$stock);
        return true;
    }
}
                        
/* End of file Products.php */
