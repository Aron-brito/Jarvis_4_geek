<?php

    require "Produto.php";

    class Item{
        private $quantidade;
        private $produto;
        private $total_item;

        public function __construct($produto, $quantidade)
        {
            $this->produto = $produto;
            $this->quantidade = $quantidade;
        }


        public function calc_total_item(Produto $produto){
            $this->total_item = $produto->getPreco() * $this->quantidade;
            return $this->total_item;
        }

        public function getQuantidade()
        {
                return $this->quantidade;
        }

        public function setQuantidade($quantidade)
        {
                $this->quantidade = $quantidade;

                return $this;
        }

        public function getProduto()
        {
                return $this->produto;
        }
 
        public function setProduto($produto)
        {
                $this->produto = $produto;

                return $this;
        }
        

        /**
         * Get the value of total_item
         */ 
        public function getTotal_item()
        {
                return $this->total_item;
        }

        /**
         * Set the value of total_item
         *
         * @return  self
         */ 
        public function setTotal_item($total_item)
        {
                $this->total_item = $total_item;

                return $this;
        }
    }

?>