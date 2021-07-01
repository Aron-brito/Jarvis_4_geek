<?php

class Paginas extends Controller{
    
    public function home(){
            $dados = [
                'tituloPagina'=>'Pagina Inicial'
            ];

            $this->view('paginas/home',$dados);
    }
    
    public function carrinho(){
        $dados = [
            'tituloPagina'=>'Pagina Inicial'
        ];

        $this->view('paginas/carrinho',$dados);
    }

  



    
}