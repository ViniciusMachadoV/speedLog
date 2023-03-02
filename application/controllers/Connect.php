<?php
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
			$this->load->view('view_client');
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
		$this->load->model('model_Connect');
        $this->model_Connect->loginCredentials($userName, $userPass);

	}

	public function registertUser()
	{

	}

	public function logout()  
    {  
        // $this->session->sess_destroy();  
        redirect(base_url().'speedlog/index.php/connect');  
    }  
}
