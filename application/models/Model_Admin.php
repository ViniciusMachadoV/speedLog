<?php
    class Model_Admin extends CI_Model {
 
        public function listDeliverymen()
        {
            // $this->db->where('usuario_nome',$userName);  
            // $query = $this->db->get('usuarios');  
            // return $query->result();

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
}
?>