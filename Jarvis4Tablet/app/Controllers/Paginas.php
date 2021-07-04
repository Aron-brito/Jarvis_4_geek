<?php

class Paginas extends Controller{
    
    public function home(){
            $dados = [
                'tituloPagina'=>'Pagina Inicial'
            ];
            //include URL.'Controllers/funcionarios/login';
            //$this->view('paginas/tabletLogin',$dados);
    }
    
    /*public function pedidos(){
            $dados = [
                'tituloPagina'=>'Pagina Inicial'
            ];

            $this->view('paginas/tabletPedidos',$dados);
    }*/

    public function carrinho(){
        $dados = [
            'tituloPagina'=>'Pagina Inicial'
        ];

        $this->view('paginas/carrinho',$dados);
    }

  



    
}