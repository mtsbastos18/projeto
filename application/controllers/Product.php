<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

    private $table = "products";

	public function __construct() {
		parent:: __construct();
		// Load encryption library
		$this->load->model('categories');
		$this->load->model('products');
	}

	public function index()
	{
		$data['categories'] = $this->getCategories();
		$data['product'] = array(
			'id'=> '',
			'name' => '',
			'price' => '',
			'category' => '',	
			'description' => '',	
			'amount' => ''
        );
		$this->view('products/formProduct',$data);
	}

    public function listProducts()
    {
		$products = $this->products->getAll();
        $this->view('products/listProducts',$products);
	}

	public function edit($id){
		$product = $this->products->getProductById($id);

		$data['product'] = array(
			'id'=> $product[0]['id'],
			'name' => $product[0]['name'],
			'price' => $product[0]['price'],
			'category' => $product[0]['category_id'],	
			'description' => $product[0]['description'],	
			'amount' => $product[0]['amount']
		);
		$data['categories'] = $this->getCategories();
		$this->view('products/formProduct',$data);
	}

	private function getCategories(){
		$categories = $this->categories->getAll();
		return $categories;
	}

	public function delete($id){
		if($this->products->delete($this->table,$id)){
			redirect('/listar-produtos');
		}
	}
	
	public function save()
	{	
		$id = $this->input->post("id");
		$name = $this->input->post("name");
		$price = $this->input->post("price");
		$category_id = $this->input->post("category");
		$description = $this->input->post("description");
		$amount = $this->input->post("amount");

		$product = array(
			'id' => $id,
			"name" => $name,
			"price" => $price,
			"description" => $description,
			"category_id" => $category_id,
		);

		if ($id != "") {
			if ($this->products->updateProduct($this->table,$product,$amount)){
				redirect('/listar-produtos');
			}
		} else {
			if($this->products->save($product, $amount)){
				redirect('/listar-produtos');
			}
		}
	}
}
