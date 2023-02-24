<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model('Model_Client');
		$dados['acompanhar']=$this->Model_Client->get_acompanhamento();
		$dados['historico']=$this->Model_Client->get_entregas();

		$this->load->view('template/header');
		$this->load->view('pages/view_client',$dados);
		$this->load->view('template/footer');
	}
	
	
}
