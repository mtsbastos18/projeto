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
		$categories = $this->categories->getAll();
		$this->view('products/formProduct',$categories);
	}

  public function listProducts()
  {
		$products = $this->products->getAll();
    $this->view('products/listProducts',$products);
	}
	
	public function create()
	{
		$name = $this->input->post("name");
		$price = $this->input->post("price");
		$category_id = $this->input->post("category");
		$description = $this->input->post("description");

		$product = array(
			"name" => $name,
			"price" => $price,
			"category_id" => $category_id,
			"description" => $description,
		);

		if($this->products->insert($product)){
			echo "produto cadastrado";
		}
	}
}
