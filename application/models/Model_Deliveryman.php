<?php date_default_timezone_set('America/Sao_Paulo');class Model_Deliveryman extends CI_Model {
    // LISTAR PEDIDOS PENDENTES:
    public function viewPendingOrders()
    {
        // $this->db->where('entrega_responsavel',$session_entregador);
        $this->db->where('entrega_status','ABERTO');
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
        //select data
        $this->db->where('entrega_id',$idConfirmarPedido);
        $query = $this->db->get('entregas');
        $data= $query->result();
        // print_r($data);
        // calculo para tempo estimado
        foreach ($data as $value) {
            $tmp= $value->tempoEstimado;
        }
        // armazenando variaveis de tempo
        $agora = date('H:m');
        $Previsao= date('H:i:s', strtotime('+'.$tmp.' minute', strtotime($agora)));

        // update
        $this->entrega_status='ANDAMENTO';
        $this->tempoEstimado=$Previsao;
        // PRECISA DE TESTES AINDA:
        $this->entrega_responsavel= $_SESSION['usuario'];
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
