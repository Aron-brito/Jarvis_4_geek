<?php
require_once '../app/Models/UsuarioDAO.php';

Class Usuario{
  private $id;
  private $nome;
  private $cpf;
  private $senha;
  private $telefone;
  private $email; 
  private $sexo;
  private $data;
  

 

  public function Create_usr(){
    // criação do usuario necessita acesso ao banco para realizar !!
  }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of senha
     */ 
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */ 
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

  /**
   * Get the value of numero
   */ 
  public function getTelefone()
  {
    return $this->telefone;
  }

  /**
   * Set the value of numero
   *
   * @return  self
   */ 
  public function settelefone($telefone)
  {
    $this->telefone = $telefone;

    return $this;
  }

  public function cadastrar(){
    $usuarioD = new UsuarioDAO();

    return $usuarioD->cadastro($this);
    
  }
  public function clogin(){
    $usuarioD = new UsuarioDAO();

    return $usuarioD->checarlogin($this);
    
  }
  public function cemail(){
    $usuarioD = new UsuarioDAO();

    return $usuarioD->checaremail($this);
    
  }

  public function atual(){
    $usuarioD = new UsuarioDAO();

    return $usuarioD->Atualizar($this);
    
  }

  public function altsenha(){
    $usuarioD = new UsuarioDAO();

    return $usuarioD->AltSenha($this);
    
  }

  public function delete(){
    $usuarioD = new UsuarioDAO();

    return $usuarioD->Delete($this);
    
  }


  /**
   * Get the value of sexo
   */ 
  public function getSexo()
  {
    return $this->sexo;
  }

  /**
   * Set the value of sexo
   *
   * @return  self
   */ 
  public function setSexo($sexo)
  {
    $this->sexo = $sexo;

    return $this;
  }

  /**
   * Get the value of data
   */ 
  public function getData()
  {
    return $this->data;
  }

  /**
   * Set the value of data
   *
   * @return  self
   */ 
  public function setData($data)
  {
    $this->data = $data;

    return $this;
  }
}
