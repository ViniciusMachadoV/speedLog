<?php 
ob_start(); 
defined('BASEPATH') OR exit('No direct script access allowed');
class Connect extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('pages/view_connect');
	}
	public function connectUser()
	{
		$userName = $_POST['user'];
		$userPass = $_POST['pass'];
		$this->load->model('model_Connect');
        $dados['logged'] = $this->model_Connect->loginCredentials($userName,$userPass);

		if ($dados['logged'] == true) {
			return true;
		}
		else{
			return false;
		}
		
		$this->load->view('pages/view_connect',$dados);

		// if($userName == 'admin' && $userPass == '123'){
			// $this->session->set_userdata(array('user'=>$userName));
			// $this->load->view('pages/view_admin');
			
            // $data['loginError'] = 'Your Account is valid';  
            // $this->load->view('pages/view_admin', $data); 
		// }
		// else {
        //     $data['loginError'] = 'Your Account is Invalid';  
        //     $this->load->view('pages/view_client', $data);  
		// }
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
        // $this->session->unset_userdata('userName');  
        redirect("pages/view_connect");  
    }  
}?>
