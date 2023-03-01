<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deliveryman extends CI_Controller {

	public function index()
	{
		$this->load->model('model_Deliveryman');
		$dados['entregas']=$this->model_Deliveryman->visualizarPedidos();
		$this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('pages/view_deliveryman',$dados);
		$this->load->view('template/footer');
	}
	
	public function confirmarPedido(){
		$idConfirmarPedido = $_POST['idPedido'];
		$this->load->model('model_Deliveryman');
        $this->model_Deliveryman->updatePedido($idConfirmarPedido);
	}
}
