<?php

    require "Carrinho.php";
    require "Status.php";


    class Pedido{

        private $id;
        private $cliente;
        private $carrinho;
        private $data;  // usar uma função para definir a data
        private $endereco;
        private $forma_pagamento; //sempre vai ser cartão
        private $avaliacao;   //A principio vai ser nula pois a avaliação só é feita dps da entrega
        private $status;     // é iniciado sempre como em preparação


        public function __construct($id,$cliente,$carrinho,$endereco,$forma_pagamento)
        {
            $this->id = $id;
            $this->cliente = $cliente;
            $this->carrinho = $carrinho;
            $this->endereco = $endereco;
            $this->forma_pagamento = $forma_pagamento;
            $this->avaliacao = null;
            $this->status = null;
            
        }


        public function data_atual($data){
            //aqui é só uma função pra pegar do sistema qual a data atual e setar na nossa variavel
            $this->data = $data;
        }
        public function fechar_compra(){
            //fechar a compra seria mudar o status do pedido para em preparação?
        }

        
        public function getData()
        {
                return $this->data;
        }

        public function setData($data)
        {
                $this->data = $data;

                return $this;
        }

        public function getEndereco()
        {
                return $this->endereco;
        }

        public function setEndereco($endereco)
        {
                $this->endereco = $endereco;

                return $this;
        }

        public function getForma_pagamento()
        {
                return $this->forma_pagamento;
        }

        public function setForma_pagamento($forma_pagamento)
        {
                $this->forma_pagamento = $forma_pagamento;

                return $this;
        }

        public function getAvaliacao()
        {
                return $this->avaliacao;
        }

        public function setAvaliacao($avaliacao)
        {
                $this->avaliacao = $avaliacao;

                return $this;
        }
    }


?>