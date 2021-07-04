<?php

class FuncionarioDao{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function checarlogin($funcionario){
        $this->db->query("SELECT *  FROM funcionario WHERE email = :e and senha = :s ");
        $email = $funcionario->getEmail();
        $senha = $funcionario->getSenha();
        
        $this->db->bind(":e",$email);
        $this->db->bind(":s",$senha);
        if($this->db->resultado()):
            $resultado = $this->db->resultado();
            if($resultado->c_ative == 1){
                return $resultado;
            }else{
                echo "<script>alert('Usuario inexistente ou excluido!');</script>";
                return false;
            }
        else:
            return false;
        endif;
    }
}


?>