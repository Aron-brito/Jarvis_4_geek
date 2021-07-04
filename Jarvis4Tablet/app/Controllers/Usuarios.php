<?php

class Usuarios extends Controller
{

    public function __construct(){
        $this->usuarioModel = $this->model('Usuario');
    }

    public function cadastro()
    {
        
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        if (isset($formulario)) :
            $dados = [
                'cpf' => trim($formulario['cpf']),
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'telefone' => trim($formulario['telefone']),
                'sexo' =>trim($formulario['sexo']),
                'data' => trim($formulario['data']),
                'senha' => trim($formulario['senha']),
                'confirme_senha' => trim($formulario['confirme_senha']),
            ];

            $this->usuarioModel->setCpf($dados['cpf']);
            $this->usuarioModel->setNome($dados['nome']);
            $this->usuarioModel->setEmail($dados['email']);
            $this->usuarioModel->setTelefone($dados['telefone']);
            $this->usuarioModel->setSenha($dados['senha']);
            $this->usuarioModel->setData($dados['data']);
            $this->usuarioModel->setSexo($dados['sexo']);
            //var_dump($this->usuarioModel);
            
        if(!in_array("", $formulario)):
            if($this->usuarioModel->cemail()):
                //echo '<br>'.'email ja cadrastrado';

            elseif($this->usuarioModel->Cadastrar()): //
                sleep(1);
                echo "<script>alert('Cadrastro realizado!');</script>";
                sleep(1);
               // Url::redirecionar('paginas/login/');
               //var_dump(URL.'/usuarios/login');
              header('location:'.URL.'/usuarios/login', true, 302);
            else:
                die('Erro ao armazer usuario no banco de dados');
            endif;
        endif;
    
        else :
            $dados = [
                'cpf' => '',
                'nome' => '',
                'email' => '',
                'sexo' => '',
                'data' =>'',
                'telefone' => '',
                'senha' => '',
                'confirme_senha' => '',
            ];
        endif;
        

        $this->view('usuarios/cadastro', $dados);
    }

    public function login()
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
            ];
            
            $this->usuarioModel->setEmail($dados['email']);
            $this->usuarioModel->setSenha($dados['senha']);
        //var_dump($formulario);
            
            $usuario = $this->usuarioModel->clogin();
            if($usuario):
                //var_dump($usuario);
              $this->criarSessaoUsuario($usuario);
                
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

        $this->view('usuarios/login', $dados);
    }

    private function criarSessaoUsuario($usuario){
        $_SESSION['usuario_cpf'] = $usuario->cpf;
        $_SESSION['usuario_nome'] = $usuario->nome;
        $_SESSION['usuario_email'] = $usuario->email;
        $_SESSION['usuario_senha'] = $usuario->senha;
        $_SESSION['usuario_telefone'] = $usuario->telefone;
        $_SESSION['usuario_gastoTotal'] = $usuario->gastoTotal;
        $_SESSION['usuario_cartao_numero_cartao'] = $usuario->cartao_numero_cartao;
        $_SESSION['usuario_endereco_idendereco'] = $usuario->endereco_idendereco;
        $_SESSION['usuario_'] = $usuario->clientecol;
        $_SESSION['usuario_sexo'] = $usuario->sexo;
        $_SESSION['usuario_data'] = $usuario->data;

       Url::redirecionar('paginas/home');
    }

    public function deletar(){
        $this->usuarioModel->setCpf($_SESSION['usuario_cpf']);

        if($this->usuarioModel->delete())
        
        $this->sair();
    }

    public function sair(){
        unset($_SESSION['usuario_cpf']);
        unset($_SESSION['usuario_nome']);
        unset($_SESSION['usuario_email']);
        unset($_SESSION['usuario_senha']);
        unset($_SESSION['usuario_telefone']);
        unset($_SESSION['usuario_gastoTotal']);
        unset($_SESSION['usuario_cartao_numero_cartao']);
        unset($_SESSION['usuario_endereco_idendereco']);
        unset($_SESSION['usuario_clientecol']);
        unset($_SESSION['usuario_sexo']);
        unset($_SESSION['usuario_data']);
        
        session_destroy();
        Url::redirecionar('usuarios/login');
    }

    public function index(){
        $dados = [
            'tituloPagina'=>'Pagina Inicial',
        ];

        $this->view('usuarios/login',$dados);
    }

    public function perfil(){
        $dados = [
            'tituloPagina'=>'Pagina Inicial',
        ];

        $this->view('usuarios/perfil',$dados);
    }

    public function altSenha(){
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        if (isset($formulario)) :
            $dados = [
                'A_senha' => trim($formulario['A_senha']),
                'N_senha' => trim($formulario['N_senha']),
            ];
           
            if($_SESSION['usuario_senha'] == $dados['A_senha']){
                $this->usuarioModel->setCpf($_SESSION['usuario_cpf']);
                $this->usuarioModel->setSenha($dados['N_senha']);
                $this->usuarioModel->altsenha();
                $_SESSION['usuario_senha'] = $this->usuarioModel->getSenha();
                echo "<script>alert('Senha Atualizada!');</script>";

            }
            else {
                echo "<script>alert('Senha atual não confere!');</script>";
            }

        else :
            $dados = [
                'A_senha' => '',
                'N_senha' => '',
            ];

        endif;
    
    $this->view('usuarios/altSenha', $dados);
    }

    public function atualizar()
    {
        
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        if (isset($formulario)) :
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'telefone' => trim($formulario['telefone']),
                'data' => trim($formulario['data']),
            ];

     

            $this->usuarioModel->setCpf($_SESSION['usuario_cpf']);
            $this->usuarioModel->setNome($dados['nome']);
            $this->usuarioModel->setEmail($dados['email']);
            $this->usuarioModel->setTelefone($dados['telefone']);
            $this->usuarioModel->setData($dados['data']);
            

           if($this->usuarioModel->atual()): 
                sleep(1);
                echo "<script>alert('Atualização feita com sucesso!');</script>";
                $_SESSION['usuario_nome'] = $this->usuarioModel->getNome();
                $_SESSION['usuario_email'] = $this->usuarioModel->getEmail();
                $_SESSION['usuario_telefone'] = $this->usuarioModel->getTelefone();
                $_SESSION['usuario_data'] = $this->usuarioModel->getData();
                
            else:
                die('Erro ao armazer usuario no banco de dados');

        endif;
    
        else :
            $dados = [
                'nome' => '',
                'email' => '',
                'data' =>'',
                'telefone' => '',
            ];
        endif;
        

        $this->view('usuarios/perfil', $dados);
    }

}
