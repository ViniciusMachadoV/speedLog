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
      


    }

?>