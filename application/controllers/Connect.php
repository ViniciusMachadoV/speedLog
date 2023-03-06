<?php 
ob_start(); 
defined('BASEPATH') OR exit('No direct script access allowed');
class Connect extends CI_Controller {
	public function index()
	{
		// $this->load->model('model_Messages');
		// $dados['mensagens']=$this->model_Messages->selectMessages();
		$this->load->helper('url');
		$this->load->model('model_Connect');
		$this->load->view('template/header');
		$this->load->view('pages/view_connect');
	}
	public function logged()
	{
		if ($this->session->user_status('logged')) 
		{
		}
		else
		{
			redirect('index.php/connect/view_connect');
		}
	}
	public function connectUser()
	{
		$userName = $_POST['user'];
		$userPass = $_POST['pass'];
		// $this->load->helper('url');

		$this->load->model('model_Connect');
        $logged = $this->model_Connect->loginCredentials($userName, $userPass);

		// return redirect('/admin');
		if($logged){
			header('Location: '.base_url('index.php/admin'));
		}
		else {
			header('Location: '.base_url('index.php/client'));
			// header('Location: registerUser');
		}
	}
	public function registerUser()
	{
		$name_signUp = $_POST['name'];
		$email_SignUp = $_POST['email'];
		$cpf_signUp = $_POST['cpf'];
		$nickname_SignUp = $_POST['nick'];
		$phoneNumber_SignUp = $_POST['phone'];
		$pass_SignUp = $_POST['pass'];
		$this->load->model('model_Connect');
        $this->model_Connect->register($name_signUp,$email_SignUp,$cpf_signUp,$nickname_SignUp,$phoneNumber_SignUp,$pass_SignUp);
	}
	public function logout()  
    {  
        // $this->session->sess_destroy();  
        redirect(base_url().'speedlog/index.php/connect');  
    }  
}?>
