<?php

class Produtos extends Controller{

    public function __construct(){

        $this->produtoModel = $this->model('Produto');
    }
  
    public function pdecoracao(){
           
            $list = $this->produtoModel->Vprod('decoracao');

            $this->view('paginas/pdecoracao',$list);
    }

    public function pcanecas(){
           
        $list = $this->produtoModel->Vprod('canecas');

       $this->view('paginas/pcanecas',$list);
    }

    public function pacessorios(){
           
        $list = $this->produtoModel->Vprod('acessorios');

       $this->view('paginas/pacessorios',$list);
    }
    public function pcamisetas(){
           
        $list = $this->produtoModel->Vprod('camisetas');

       $this->view('paginas/pcamisetas',$list);
    }
    public function pcolecionaveis(){
           
        $list = $this->produtoModel->Vprod('colecionaveis');

       $this->view('paginas/pcolecionaveis',$list);
    }

    public function descricaoP($prod){
         
        $Dproduto = $this->produtoModel->Dprod($prod);
        //var_dump($Dproduto);

       $this->view('paginas/descproduto',$Dproduto);
    }

    public function selectPromo(){
        $list = $this->produtoModel->promocoes('0.5');

        $this->view('paginas/home',$list);

    }


}