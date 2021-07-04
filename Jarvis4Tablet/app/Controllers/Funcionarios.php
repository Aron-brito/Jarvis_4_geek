<?php

class Funcionarios extends Controller{


    public function __construct()
    {
        $this->funcionarioModel = $this->model('Funcionario');
    }

    public function index(){
        $dados = [
            'tituloPagina'=>'Pagina Inicial',
        ];

        $this->view('paginas/tabletLogin',$dados);
    }

    public function login()
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
            ];
            
            $this->funcionarioModel->setEmail($dados['email']);
            $this->funcionarioModel->setSenha($dados['senha']);
        //var_dump($formulario);
            
            $funcionario = $this->funcionarioModel->clogin();
            if($funcionario):
                //var_dump($usuario);
                  
              $this->criarSessaoFuncionario($funcionario);
                
            else:
                //echo "<script>alert('Erro ao Logar!');</script>";
                //Sessao::mensagem('usuario','Usuario ou senha invalidos','alert alert-danger');
            endif;
        
        else :
            $dados = [
                'email' => '',
                'senha' => '',
            ];

        endif;

        $this->view('paginas/tabletLogin', $dados);
    }

    private function criarSessaoFuncionario($funcionario){    
        $_SESSION['funcionario_cpf'] = $funcionario->cpf;
        $_SESSION['funcionario_nome'] = $funcionario->nome;
        $_SESSION['funcionario_email'] = $funcionario->email;
        $_SESSION['funcionario_senha'] = $funcionario->senha;
        $_SESSION['funcionario_funcao'] = $funcionario->funcao;
    
       Url::redirecionar('pedidos/vpedidos');
    }

    public function sair(){
        unset($_SESSION['funcionario_cpf']);
        unset($_SESSION['funcionario_nome']);
        unset($_SESSION['funcionario_email']);
        unset($_SESSION['funcionario_senha']);
        unset($_SESSION['funcionario_funcao']);
        
        session_destroy();
        Url::redirecionar('funcionarios/login');
    }
}


?>