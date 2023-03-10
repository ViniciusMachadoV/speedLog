<?php class Model_Deliveryman extends CI_Model {
    public function visualizarPedidos()
    {
        // $this->db->where('entrega_responsavel',$session_entregador);
        $this->db->where('entrega_status','PENDENTE');
        $query = $this->db->get('entregas');
        return $query->result();
    }
    public function updatePedido($idConfirmarPedido){
        $this->entrega_status='ANDAMENTO';
        // $this->entrega_responsavel=$session_entregador;
        $this->db->where('entrega_id',$idConfirmarPedido);
        $this->db->update('entregas',$this);
    }
}?>
