<?php


    class Pedidos extends Controller{

        public function __construct()
        {
            $this->pedidoModel = $this->model('Pedido');
        }

        public function vpedidos(){

                $list = $this->pedidoModel->Vpedido();
                //$listNomes = $this->pedidoModel->Vcliente();
                $this->view('paginas/tabletPedidos',$list);
        }

        public function deletar($idpedido){
            
                $this->pedidoModel->deletarPedido($idpedido);
                Url::redirecionar('pedidos/vpedidos');

        }

        public function vpreparacao(){
                
                $list = $this->pedidoModel->Vstatus('preparacao');
                $this->view('paginas/tablet-Preparacao');

        }
        public function vembalagem(){

                //$list = $this->pedidoModel->Vstatus('embalagem');
                $this->view('paginas/tablet-Embalagem');

        }
        public function ventrega(){
            
                //$list = $this->pedidoModel->Vstatus('entrega');
                $this->view('paginas/tablet-Entrega');

        }
    }


?>