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
        public function avaliar_compra($nota){
             // definir um valor de 1 a 5 para o pedido
             $this->avaliacao = $nota;   
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

        /**
         * Get the value of cliente
         */ 
        public function getCliente()
        {
                return $this->cliente;
        }

        /**
         * Set the value of cliente
         *
         * @return  self
         */ 
        public function setCliente($cliente)
        {
                $this->cliente = $cliente;

                return $this;
        }

        /**
         * Get the value of carrinho
         */ 
        public function getCarrinho()
        {
                return $this->carrinho;
        }

        /**
         * Set the value of carrinho
         *
         * @return  self
         */ 
        public function setCarrinho($carrinho)
        {
                $this->carrinho = $carrinho;

                return $this;
        }

        /**
         * Get the value of status
         */ 
        public function getStatus()
        {
                return $this->status;
        }

        /**
         * Set the value of status
         *
         * @return  self
         */ 
        public function setStatus($status)
        {
                $this->status = $status;

                return $this;
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
    }


?>