<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deliveryman extends CI_Controller {

	public function index()
	{
		// $this->load->model('model_Messages');
		// $dados['mensagens']=$this->model_Messages->selectMessages();
		$this->load->helper('url');
		$this->load->model('model_Deliveryman');
		$this->load->view('template/header');
		$this->load->view('pages/view_deliveryman');
		$this->load->view('template/footer');
	}
}
