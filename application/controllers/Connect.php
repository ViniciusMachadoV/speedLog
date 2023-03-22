<?php 
ob_start(); 
defined('BASEPATH') OR exit('No direct script access allowed');
class Connect extends CI_Controller {
	public function index()
	{
		if($this->session->userdata('tipo') == NULL){
			$this->load->helper('url');
			$this->load->model('model_Connect');
			$this->load->view('template/header');
			$this->load->view('pages/view_connect');
		}
		else switch ($this->session->userdata('tipo')) {
                case 'ADMINISTRADOR':
                    redirect('admin');
                    break;
                case 'CLIENTE':
                    redirect('client');
                    break;
                case 'ENTREGADOR':
                    redirect('deliveryman');
                    break;
		}
	}
	public function connectUser()
	{
		$userName = $_POST['user'];
		$userPass = $_POST['pass'];
		$this->load->model('model_Connect');
        $this->model_Connect->loginCredentials($userName, $userPass);
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
		$this->model_Connect->loginCredentials($email_SignUp,$pass_SignUp);
	}
	public function logout()  
    {  
        $this->session->sess_destroy();  
        redirect('connect');
		// header("Location: http:/localhost/speedlog");  
    }  
}?>
