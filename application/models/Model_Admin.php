<?php class Model_Admin extends CI_Model {
    public function listDeliverymen()
    {
        $query = $this->db->select('*')
        ->from('entregadores')
        ->join('usuarios','usuarios.usuario_id = entregadores.entregador_id')
        ->get();
        return $query->result();
    }
    public function listDeliveries()
    {
        $query = $this->db->get('entregas');  
        return $query->result();
    }
    public function listClients()
    {
        $this->db->where('usuario_tipo','CLIENTE'); 	
        $query = $this->db->get('usuarios');  
        return $query->result();
    }
    
    public function deliveryValues()
    {
        $query = $this->db->get('frete');  
        return $query->result();
    }
    public function cadastrarAdmin($nomeAdmin, $emailAdmin, $cpfAdmin,$apelidoAdmin, $telefoneAdmin, $senhaAdmin)
        {
            $this->usuario_nome = $nomeAdmin;
            $this->usuario_email = $emailAdmin;
            $this->usuario_cpf = $cpfAdmin;
            $this->usuario_apelido = $apelidoAdmin;
            $this->usuario_senha = $senhaAdmin;
            $this->usuario_tipo = "ADMINISTRADOR";
            $this->usuario_telefone = $telefoneAdmin;
            $this->usuario_status = "ATIVO";
            $this->db->insert('usuarios',$this);

        }
}?>
