<?php
    class Model_Deliveryman extends CI_Model {

    public function visualizarPedidos()
    {
        $this->db->where('entrega_status','ABERTO');
        $query = $this->db->get('entregas');
        return $query->result();
    }
    public function visualizarPedidosA()
    {
        $this->db->where('entrega_status','ANDAMENTO');
        $query = $this->db->get('entregas');
        return $query->result();
    }

    public function visualizarPedidosC()
    {
        $this->db->where('entrega_status','CONCLUIDO');
        $query = $this->db->get('entregas');
        return $query->result();
    }

    public function updatePedido($idConfirmarPedido){
        $id_responsavel=$_SESSION['usuario'];
        $this->entrega_status='ANDAMENTO';
        $this->entrega_responsavel=$id_responsavel;
        $this->db->where('entrega_id',$idConfirmarPedido);
        $this->db->update('entregas',$this);
    }

    public function mudarPedido($idCancelarPedido){
        $this->entrega_status='PENDENTE';
        $this->db->where('entrega_id',$idCancelarPedido);
        $this->db->update('entregas',$this);
    }

    public function fecharPedido($idConcluirPedido){
        $this->entrega_status='CONCLUIDO';
        $this->db->where('entrega_id',$idConcluirPedido);
        $this->db->update('entregas',$this);
    }

    // public function visualizarLucro(){
    // public function visualizarLucro($idMostrarlucro){
        // $this->entrega_status='CONCLUIDO';
        // $this->db->where('entrega_id','213');
        // $this->db->where('entrega_id',$idMostrarLucro);
    // }

    // public function delete($msgDel){
    //     $this->db->where('message_id',$msgDel);
    //     $this->db->delete('messages');
    // }
    
    // public function register($name_signUp,$email_SignUp,$cpf_signUp,$nickname_SignUp,$phoneNumber_SignUp,$pass_SignUp){
    //     $this->usuario_nome = $name_signUp;
    //     $this->usuario_email = $email_SignUp;
    //     $this->usuario_cpf = $cpf_signUp;
    //     $this->usuario_apelido = $nickname_SignUp;
    //     $this->usuario_senha = $pass_SignUp;
    //     $this->usuario_tipo = "CLIENTE";
    //     $this->usuario_telefone = $phoneNumber_SignUp;
    //     $this->db->insert('usuarios',$this);
    // }
}
?>
