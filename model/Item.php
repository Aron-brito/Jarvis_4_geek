<?php

    require "Produto.php";

    class Item{
        private $quantidade;
        private $produto;

        public function __construct($produto, $quantidade)
        {
            $this->produto = $produto;
            $this->quantidade = $quantidade;
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
        
    }

?>