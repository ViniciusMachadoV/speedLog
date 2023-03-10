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
    //list clients
    
    public function deliveryValues()
    {
        $query = $this->db->get('frete');  
        return $query->result();
    }
}?>
