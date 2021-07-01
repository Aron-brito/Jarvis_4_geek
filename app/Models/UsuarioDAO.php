<?php
class UsuarioDao{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }
    
    public function checarEmail($usuario){
        $this->db->query("SELECT email FROM cliente WHERE email = :e");
        $email= $usuario->getEmail();
        $this->db->bind(":e",$email);

        if($this->db->resultado()):
            return true;
        else:
            return false;
        endif;
    }

    public function AltSenha($usuario){
        $this->db->query("UPDATE cliente SET senha = :senha WHERE cpf = :cpf");
        $cpf = $usuario->getCpf();
        $senha= $usuario->getSenha();

        $this->db->bind(":cpf",$cpf);
        $this->db->bind(":senha",$senha);

        if($this->db->resultado()):
            return true;
        else:
            return false;
        endif;
    }

    public function Delete($usuario){
        $this->db->query("UPDATE cliente SET c_ative = 0 WHERE cpf = :cpf");
        $cpf = $usuario->getCpf();
        
        $this->db->bind(":cpf",$cpf);
        
        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }

    public function Cadastro($usuario){

        $this->db->query("INSERT INTO cliente (cpf, nome, email, telefone, senha, sexo, data) VALUES(:cpf, :nome, :email,:telefone, :senha, :sexo, :data)");

        $cpf = $usuario->getCpf();
        $nome = $usuario->getNome();
        $email = $usuario->getEmail();
        $telefone = $usuario->getTelefone();
        $senha = $usuario->getSenha();
        $sexo = $usuario->getSexo();
        $data = $usuario->getData();

        $this->db->bind("cpf", $cpf);
        $this->db->bind("nome", $nome);
        $this->db->bind("email", $email);
        $this->db->bind("telefone", $telefone);
        $this->db->bind("senha", $senha);
        $this->db->bind("sexo", $sexo);
        $this->db->bind("data", $data);

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;


    }
    public function validar(){
        echo " validei";
    }

    public function checarlogin($usuario){
        $this->db->query("SELECT *  FROM cliente WHERE email = :e and senha = :s ");
        $email = $usuario->getEmail();
        $senha = $usuario->getSenha();
        
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

    public function Atualizar($usuario){

        $this->db->query("UPDATE cliente SET nome = :nome,  email = :email, telefone = :telefone WHERE cpf = :cpf");

        $cpf = $usuario->getCpf();
        $nome = $usuario->getNome();
        $email = $usuario->getEmail();
        $telefone = $usuario->getTelefone();

        $this->db->bind("cpf", $cpf);
        $this->db->bind("nome", $nome);
        $this->db->bind("email", $email);
        $this->db->bind("telefone", $telefone);

        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;


    }
}