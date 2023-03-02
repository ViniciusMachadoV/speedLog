<?php class Model_Connect extends CI_Model {
    public function loginCredentials($userName , $userPass)
    {
        $this->db->where('usuario_nome',$userName);  
        $this->db->where('usuario_senha',$userPass);  
        $query = $this->db->get('usuarios');  

        if ($query->num_rows() == 1) return true; 
        else return false;  
    }
}?>