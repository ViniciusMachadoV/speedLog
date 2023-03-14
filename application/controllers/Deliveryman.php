<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Deliveryman extends CI_Controller {
	public function index()
	{
		if($this->session->userdata('tipo') == 'ENTREGADOR'){
			$dados['sessao']=$this->session->userdata('usuario');
			$this->load->model('model_Deliveryman');
			$dados['entregas']=$this->model_Deliveryman->visualizarPedidos();
			$this->load->helper('url');
			$this->load->view('template/header');
			$this->load->view('template/view_header');
			$this->load->view('pages/view_deliveryman',$dados);
			$this->load->view('template/view_footer');
			$this->load->view('template/footer');
		}
		else redirect('connect');
	}
	public function confirmarPedido()
	{
		$idConfirmarPedido = $_POST['idPedido'];
		$this->load->model('model_Deliveryman');
        $this->model_Deliveryman->updatePedido($idConfirmarPedido);
	}
	public function cancelarPedido()
	{
		$idCancelarPedido = $_POST['entregaId'];
		$this->load->model('model_Deliveryman');
        $this->model_Deliveryman->mudarPedido($idCancelarPedido);
	}
	public function concluirPedido()
	{
		$idConcluirPedido = $_POST['entregaId'];
		$this->load->model('model_Deliveryman');
        $this->model_Deliveryman->fecharPedido($idConcluirPedido);
	}
}?>
