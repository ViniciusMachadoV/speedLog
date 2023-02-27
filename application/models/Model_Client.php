<?php

	class Model_client extends CI_Model {

        public $entrega_id;
        public $entrega_endereco;
        public $entrega_cep;
        public $entrega_peso;
        public $entrega_status;
        public $entrega_dataPedido;
        public $entrega_dataTransporte;
        public $entrega_responsavel;
        public $entrega_cepretirada;
        public $entrega_observacao;


        public function get_entregas(){        	
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
            // $this->$largura
            // $this->$altura
            // $this->$comprimento
            
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
      


    }

?>