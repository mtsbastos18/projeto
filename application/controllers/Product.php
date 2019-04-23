<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {
	
	public function __construct() {
		parent:: __construct();
		// Load encryption library
		$this->load->model('categories');
		$this->load->model('products');
	}
		
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['categories'] = $this->getCategories();
		$data['product'] = [
			'id'=> '',
			'name' => '',
			'price' => '',
			'category' => '',	
			'description' => '',	
		];
		$this->view('products/formProduct',$data);
	}

  public function listProducts()
  {
		$products = $this->products->getAll();

    $this->view('products/listProducts',$products);
	}

	public function edit($id){
		$product = $this->products->getById($id);
		$data['product'] = [
			'id'=> $product[0]->id,
			'name' => $product[0]->name,
			'price' => $product[0]->price,
			'category' => $product[0]->category_id,	
			'description' => $product[0]->description,	
		];
		$data['categories'] = $this->getCategories();
		$this->view('products/formProduct',$data);
	}

	private function getCategories(){
		$categories = $this->categories->getAll();
		return $categories;
	}

	public function delete($id){
		if($this->products->delete($id)){
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

		$product = array(
			'id' => $id,
			"name" => $name,
			"price" => $price,
			"description" => $description,
			"category_id" => $category_id,
		);

		if ($id != "") {
			if ($this->products->update($product)){
				redirect('/listar-produtos');
			}
		} else {
			if($this->products->insert($product)){
				redirect('/listar-produtos');
			}
		}
	}
}
