<?php
require "Usuario.php";

class Funcionario extends Usuario{
  
  private funcao;

  public __construct($id, $nome, $cpf, $senha,$email,$funcao){
    parent:::__construct($id,$nome,$cpf,$senha);
    $this->funcao = $funcao;
  }

  public function Create_func(){
    // criação de conta necessita acesso ao banco para realizar !!
  }
}

?>