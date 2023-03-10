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
    public function listReports()
    {
        // $this->db->where('denuncia_status','PENDENTE'); 	
        $query = $this->db->select('*')
        ->from('denuncias')
        ->join('entregas','entregas.entrega_id = denuncias.denuncia_id')
        // ->join('usuarios','usuario.usuario_id = entrega.entrega_responsavel')
        ->get();
        return $query->result();
    }
    public function deliveryVariables()
    {
        $query = $this->db->get('frete');  
        return $query->result();
    }
    public function timeoutAccount($userTimedOut)
	{
        $this->usuario_status = "SUSPENSO";
        $this->db->where('usuario_id', $userTimedOut);
        $this->db->update('usuarios', $this);
	}
    public function banAccount($userBanned)
	{
        $this->usuario_status = "BANIDO";
        $this->db->where('usuario_id', $userBanned);
        $this->db->update('usuarios', $this);
	}
    public function reactivateAccount($userReactivated)
	{
        $this->usuario_status = "ATIVO";
        $this->db->where('usuario_id', $userReactivated);
        $this->db->update('usuarios', $this);
	}
    public function cancelDelivery()
	{
		// 
	}
    public function registerAdmin($nomeAdmin, $emailAdmin, $cpfAdmin,$apelidoAdmin, $telefoneAdmin, $senhaAdmin)
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
    public function changeVariables()
	{
		//
	}
}?>
