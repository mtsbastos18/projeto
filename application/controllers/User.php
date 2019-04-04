<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	
	public function __construct() {
		parent:: __construct();
		// Load encryption library
		$this->load->model('users');
	}
       

}




?>