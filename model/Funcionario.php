<?php
require "Usuario.php";

class Funcionario extends Usuario{
  
  private $funcao;

  public function __construct($id, $nome, $cpf, $senha,$email,$funcao){
    parent::__construct($id,$nome,$cpf,$senha, $email);
    $this->funcao = $funcao;
  }

  public function Create_func(){
    // criação de conta necessita acesso ao banco para realizar !!
  }

    /**
     * Get the value of funcao
     */ 
    public function getFuncao()
    {
        return $this->funcao;
    }

    /**
     * Set the value of funcao
     *
     * @return  self
     */ 
    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;

        return $this;
    }
}


?>