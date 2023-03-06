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
    public function inserir($largura, $altura,$cepretirada,$cepentrega,$peso,$observacao,$valor)
    {
        $this->entrega_status="ABERTO";
        $this->entrega_cepOrigem=$cepretirada;
        $this->entrega_cepDestino=$cepentrega;
        $this->entrega_peso=$peso;
        $this->entrega_valor=$valor;
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
        // QUERY PARA DEFINIR VALORES DE CALCULO
        $this->db->where('config_tipo','PADRAO'); 	
        $query = $this->db->get('configs');
        $resultados=$query->result();
        // ALIMENTANDO VARIAVEIS COM VALORES PARA CALCULO
        foreach ($resultados as $key => $value) {
            $calculo_distancia = $value->valor_km;
            $calculo_tempo = $value->valor_minuto;
            //peso
            $peso1 = $value->valor_kg;
            $peso2 = $value->valor_kg1;
            $peso3 = $value->valor_kg3;
            $peso4 = $value->valor_kg8;
        } 
        $valor=0;
        $valorp=0;
        $valord=0;
        $valort=0;
        $pesor=$peso;
        $distanciar=$distancia;
        $tempor=$tempo;
        switch ($pesor) {
            case $pesor < 1:
                    $valorp=$peso1;
                break;
            case $peso > 1 and $peso <= 3:
                $valorp=$peso2;
                break;
            case $peso >3 and $peso <= 8:
                $valorp=$peso3;
                
                break;
            case $peso >8 and $peso <= 12:
                $valorp=$peso4;
                
                break;
            default:
            $valorp="Transporte não autorizado pelo peso.";
        }
        // echo $valorp;
        $valord=$distanciar*$calculo_distancia;
        $valort=$tempor*$calculo_tempo;
        $valor= $valorp+$valord+$valort;
        echo $valor;
              
        
    }
}?>