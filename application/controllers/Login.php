<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
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
		$password = $this->input->post('password');
		$user = $this->users->login($user, $password);

		if ($user) {
			$array = array(
				'name' => $user['name'],
				'user' => $user['username'],
				'permission' => $user['permission']
			);
			$this->session->set_userdata($array);

			redirect('/home', 'refresh');
		} else {
			redirect('/login?error=1');
		}
	}

	public function setPassword($email)
	{

		$email = str_replace("%40", "@", $email);
		$data['email'] = $email;
		if ($this->users->checkUser($email)) {
			$this->load->view("user/formNewUser", $data);
		} else {
			redirect('/login');
		}
	}

	public function activate()
	{
		$email = $this->input->post("email");
		$password = $this->input->post('password');

		$params['email'] = $email;
		$params['password'] = $password;

		if ($this->users->activate($params)) {
			redirect('/login?cod=1');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user');

		redirect('/login', 'refresh');
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

		if ($this->users->insert($user)) {
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
