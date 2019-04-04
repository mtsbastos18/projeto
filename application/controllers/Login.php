<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		
		redirect('/login','refresh');
		
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
	public function decode($password)
	{
		$decrypted = $this->encryption->decrypt($password);
		return $decrypted;
	}
}
