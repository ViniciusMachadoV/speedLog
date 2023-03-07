<?php class Model_Connect extends CI_Model {
    public function loginCredentials($userLogin , $userPass)
    {
        // $this->db->where('usuario_nome',$userName);  
        // $this->db->where('usuario_senha',$userPass); 
        $sql = "SELECT * FROM usuarios WHERE usuario_apelido = '$userLogin' OR usuario_email = '$userLogin' AND usuario_senha = '$userPass'"; 
        $query = $this->db->query($sql);  

        if($query->num_rows() > 0) echo base_url('index.php/admin');
        else echo base_url('index.php/client');
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
