<?php class Model_Client extends CI_Model {
    public function get_entregas()
    {        	
        $query = $this->db->get('entregas');
        return $query->result();
    }
    public function get_acompanhamento(){       
            $this->db->where('entrega_status','aberto'); 	
        $query = $this->db->get('entregas');
        return $query->result();
    }
    public function inserir($largura, $altura,$cepretirada,$cepentrega,$peso,$observacao)
    {
        $this->entrega_status="ABERTO";
        $this->entrega_cepretirada=$cepretirada;
        $this->entrega_cep=$cepentrega;
        $this->entrega_peso=$peso;
        $this->entrega_observacao=$observacao;
        $this->db->insert('entregas', $this);
    }
    public function deletar_pedido($entregaDel){
        $this->db->where('entrega_id',$entregaDel);
        $this->db->delete('entregas');
    }
    public function cancelar_pedido($id_deletado)
    {
        $this->db->where('entrega_id', $id_deletado);
        $this->db->update('entregas', array('entrega_status' => "CANCELADO"));
    }
    public function calcular_valor($peso,$distancia,$tempo)
    {
        $valor=0;
        $valorp=0;
        $valord=0;
        $valort=0;
        $pesor=$peso;
        $distanciar=$distancia;
        $tempor=$tempo;
        switch ($pesor) {
            case $pesor < 1:
                    $valorp="3,00";
                break;
            case $peso > 1 and $peso <= 3:
                $valorp="3,00";
                break;
            case $peso >3 and $peso <= 8:
                $valorp="9,00";
                
                break;
            case $peso >8 and $peso <= 12:
                $valorp="12,00";
                
                break;
            default:
            $valorp="Transporte não autorizado pelo peso.";
        }
        echo $valorp;
        $valord=$distanciar*0.50;
        $valort=$tempor*0.30;
        $valor= $valorp+$valord+$valort;
    }
}?>