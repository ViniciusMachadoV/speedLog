<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->model('model_Admin');
		$dados['entregadores']=$this->model_Admin->listDeliverymen();
		$dados['entregas']=$this->model_Admin->listDeliveries();
		$this->load->helper('url');
		$this->load->model('model_Admin');
		$this->load->view('template/header');
		$this->load->view('pages/view_admin',$dados);
		$this->load->view('template/footer');
	}
}
