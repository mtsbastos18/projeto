<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	
	public function __construct() {
		parent:: __construct();
		// Load encryption library
		$this->load->model('users');
		$this->load->library('encryption');
	}
       

	public function newUser(){
		$this->view('user/formUser');
	}

	public function create(){
		$params = array(
			'name' => $this->input->post("name"), 
			'username' => $this->input->post("username"), 
			'email' => $this->input->post("email"), 
			'permission' => $this->input->post("permission"), 
		);

		if($this->users->insert($params)){
			if($this->sendEmail($params['email'],$params['name'])){	
				redirect('/criar-usuario?msg=1');
			} else {
				redirect('/criar-usuario?msg=3');
			}
		} else {
		 	redirect('/criar-usuario?msg=2');
		 }
	}

	private function sendEmail($email,$name){
		 // Load PHPMailer library
		 $this->load->library('phpmailer_lib');
        
		 // PHPMailer object
		 $mail = $this->phpmailer_lib->load();
		 
		 // SMTP configuration
		 $mail->isSMTP();
		 $mail->Host     = 'smtp.gmail.com';
		 $mail->SMTPAuth = true;
		 $mail->Username = 'frameworksapis2019@gmail.com';
		 $mail->Password = 'senac2019';
		 $mail->SMTPSecure = 'tls';
		 $mail->Port     = 587;
		 $mail->CharSet = 'UTF-8';
		 $mail->setFrom('frameworksapis2019@gmail.com', 'Administrador do sistema');
		 
		 // Add a recipient
		 $mail->addAddress($email);
		 
		 // Email subject
		 $mail->Subject = 'Cadastro novo no sistema';
		 $email = str_replace("@","%40",$email);
		 // Set email format to HTML
		 $mail->isHTML(true);
		 // Email body content
		 $mailContent = "<h1>Foi criado um acesso para você no sistema</h1>
			 <p>Clique no <a href='".base_url('login/setPassword/').$email."'>link</a> para configurar sua senha</p>";

		 $mail->Body = $mailContent;
		 
		 // Send email
		 if(!$mail->send()){
			 return false;
		 }else{
			 return true;
		 }
	}
}
?>