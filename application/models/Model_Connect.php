<?php class Model_Connect extends CI_Model {
    public function loginCredentials($userName , $userPass)
    {
        $this->db->where('usuario_nome',$userName);  
        $this->db->where('usuario_senha',$userPass);  
        $query = $this->db->get('usuarios');  

        if($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function register($name_signUp,$email_SignUp,$cpf_signUp,$nickname_SignUp,$phoneNumber_SignUp,$pass_SignUp){
        $this->usuario_nome = $name_signUp;
        $this->usuario_email = $email_SignUp;
        $this->usuario_cpf = $cpf_signUp;
        $this->usuario_apelido = $nickname_SignUp;
        $this->usuario_senha = $pass_SignUp;
        $this->usuario_tipo = "CLIENTE";
        $this->usuario_telefone = $phoneNumber_SignUp;
        $this->db->insert('usuarios',$this);
    }
}?>