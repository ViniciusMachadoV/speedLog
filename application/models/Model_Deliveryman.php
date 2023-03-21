<?php class Model_Deliveryman extends CI_Model {
    // LISTAR PEDIDOS PENDENTES:
    public function viewPendingOrders()
    {
        // $this->db->where('entrega_responsavel',$session_entregador);
        $this->db->where('entrega_status','PENDENTE');
        $query = $this->db->get('entregas');
        return $query->result();
    }
    // CARREGAR PERFIL DO MOTOBOY COM AS INFORMAÇÕES:
    public function deliverymanProfile($idDeliveryman)
    {
        $this->db->where('usuario_id',$idDeliveryman);
        $query = $this->db->get('usuarios');
        return $query->result();
    }
    // LISTAR PEDIDOS EM ANDAMENTO:
    public function viewOngoingOrders()
    {
        $this->db->where('entrega_status','ANDAMENTO');
        $query = $this->db->get('entregas');
        return $query->result();
    }
    // LISTAR PEDIDOS FINALIZADOS:
    public function viewFinishedOrders()
    {
        $this->db->where('entrega_status','CONCLUIDO');
        $query = $this->db->get('entregas');
        return $query->result();
    }
    // ACEITAR ENTREGA:
    public function takeOrder($idConfirmarPedido)
    {
        $this->entrega_status='ANDAMENTO';
        // $this->entrega_responsavel=$session_entregador;
        $this->db->where('entrega_id',$idConfirmarPedido);
        $this->db->update('entregas',$this);
    }
    // CANCELAR ENTREGA:
    public function cancelOrder($idCancelarPedido)
    {
        $this->entrega_status='PENDENTE';
        $this->db->where('entrega_id',$idCancelarPedido);
        $this->db->update('entregas',$this);
    }
    // CONCLUIR ENTREGA:
    public function finishOrder($idConcluirPedido)
    {
        $this->entrega_status='CONCLUIDO';
        $this->db->where('entrega_id',$idConcluirPedido);
        $this->db->update('entregas',$this);
    }
}?>
