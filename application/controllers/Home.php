<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct() 
    {
		parent::__construct();
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
		$numbers = array(
			'products' => 1000,
			'orders' => 15,
			'categories' => 30,
			'customers' => 1050,
		);
		//$this->categories->countAll("products");
		$this->view('home/home',$numbers);
	}
}
