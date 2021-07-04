<?php

require_once '../app/Models/PedidoDAO.php';
require_once '../app/Models/business/Usuario.php';
    class Pedido {

        private $id;
        private $endereco;
        private $data;
        private $numeroCartao;
        private $avaliacao;
        private $status;
        private $cliente;
        //private $nomeCliente;

        
        public function Vpedido(){
                $list = new PedidoDAO();

                return $list->visualizarPedidos();
        }
        public function deletarPedido($pedido){
                $dao = new PedidoDAO();
                $dao->delete($pedido);
        }

        public function Vstatus($status){
                $list = new PedidoDAO();
                
                return $list->visualizarPedidosByStatus($status);
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
         * Get the value of endereco
         */ 
        public function getEndereco()
        {
                return $this->endereco;
        }

        /**
         * Set the value of endereco
         *
         * @return  self
         */ 
        public function setEndereco($endereco)
        {
                $this->endereco = $endereco;

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

        /**
         * Get the value of numeroCartao
         */ 
        public function getNumeroCartao()
        {
                return $this->numeroCartao;
        }

        /**
         * Set the value of numeroCartao
         *
         * @return  self
         */ 
        public function setNumeroCartao($numeroCartao)
        {
                $this->numeroCartao = $numeroCartao;

                return $this;
        }

        /**
         * Get the value of avaliacao
         */ 
        public function getAvaliacao()
        {
                return $this->avaliacao;
        }

        /**
         * Set the value of avaliacao
         *
         * @return  self
         */ 
        public function setAvaliacao($avaliacao)
        {
                $this->avaliacao = $avaliacao;

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
    }


?>