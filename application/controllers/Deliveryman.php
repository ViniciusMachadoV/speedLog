<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deliveryman extends CI_Controller {

	public function index()
	{
		$this->load->model('model_Deliveryman');
		$dados['entregas']=$this->model_Deliveryman->visualizarPedidos();
		$dados['atuais']=$this->model_Deliveryman->visualizarPedidosA();
		$dados['concluidos']=$this->model_Deliveryman->visualizarPedidosC();
		// $dados['lucro']=$this->model_Deliveryman->visualizarLucro();
		$this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('pages/view_deliveryman',$dados);
		$this->load->view('template/footer');
	}
	
	public function confirmarPedido(){
		$idConfirmarPedido = $_POST['entregaId'];
		$this->load->model('model_Deliveryman');
        $this->model_Deliveryman->updatePedido($idConfirmarPedido);
	}

	public function cancelarPedido(){
		$idCancelarPedido = $_POST['entregaId'];
		$this->load->model('model_Deliveryman');
        $this->model_Deliveryman->mudarPedido($idCancelarPedido);
	}

	public function concluirPedido(){
		$idConcluirPedido = $_POST['entregaId'];
		$this->load->model('model_Deliveryman');
        $this->model_Deliveryman->fecharPedido($idConcluirPedido);
	}

	public function mostrarLucro(){
		$idMostrarLucro = $_POST['entregaId'];
		$this->load->model('model_Deliveryman');
        $this->model_Deliveryman->visualizarLucro($idMostrarLucro);
	}
}