<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function index()
	{
		$this->load->model('model_Admin');
		$dados['entregadores']=$this->model_Admin->listDeliverymen();
		$dados['entregas']=$this->model_Admin->listDeliveries();
		$dados['clientes']=$this->model_Admin->listClients();
		$dados['frete']=$this->model_Admin->deliveryValues();
		$this->load->helper('url');
		$this->load->model('model_Admin');
		$this->load->view('template/header');
		$this->load->view('pages/view_admin',$dados);
		$this->load->view('template/footer');
	}
	public function cadastrarAdmin()
	{
		$this->load->model('Model_Admin');
		$nomeAdmin = $_POST['nome'];
		$emailAdmin = $_POST['email'];
		$cpfAdmin = $_POST['cpf'];
		$apelidoAdmin = $_POST['apelido'];
		$telefoneAdmin = $_POST['telefone'];
		$senhaAdmin = $_POST['senha'];
		$this->Model_Admin->cadastrarAdmin($nomeAdmin, $emailAdmin, $cpfAdmin,$apelidoAdmin, $telefoneAdmin, $senhaAdmin);
	}
}?>
