<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function index()
	{
		// $this->load->model('model_Messages');
		// $dados['mensagens']=$this->model_Messages->selectMessages();
		$this->load->helper('url');
		$this->load->model('model_Client');
		$this->load->view('template/header');
		$this->load->view('pages/view_client');
		$this->load->view('template/footer');
	}
	public function trocartela($tela)
	{
		$this->load->helper('url');

		
			$i=$tela;
			$this->load->view('view_topo');
			$this->load->view('view_home');
			$this->load->view(''. $i .'');
			$this->load->view('view_rodape');
		
		
	}
	
}
