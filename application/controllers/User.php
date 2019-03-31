<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		// Load encryption library
		$this->load->library('encryption');
		$this->load->model('users');
	}
		
	public function index()
	{	
		$this->load->view('user/formLogin');
	}

	public function authenticate()
	{
		$user = $this->input->post("user");
		$password =  $this->input->post('password');

		$user = $this->users->login($user, $password);
		
		if ($user) {
			$array = array(
				'name' => $user['name'],
				'user' => $user['username'],
			);
			$this->session->set_userdata( $array );
			
			redirect('/home','refresh');
		} else {
			redirect('/login?error=1');
		}

	}

	public function logout()
	{
		$this->session->unset_userdata('user');
		
		redirect('/user','refresh');
		
	}

	public function new()
	{
		$this->load->view('user/formNewUser');
	}

	public function create()
	{
		$name = $this->input->post('name');
		$userName = $this->input->post("user");
		$password = $this->encode($this->input->post('password'));

		$user = array(
			'name' => $name,
			'username' => $userName,
			'password' => $password
		);
		
		if($this->users->insert($user)){
			echo "usuario cadastrado";
		}
	}	

	public function encode($password)
	{
		$encrypted = $this->encryption->encrypt($password);
		return $encrypted;	
	}
	public function decode($password = "332b52c8c32006ce6d8a4bcbe40f546bcf392091fc2e6584b97057e7a87769d4f82ce3488f06eecd1013589bc5f119ebc2491af12c0467e44fd676fe5f127549Q+ByTxUPirGqD3shQVYzKiqJZHAHh5qEGzVpkWAD2Rc=")
	{
		$decrypted = $this->encryption->decrypt($password);
		return $decrypted;
	}
}
