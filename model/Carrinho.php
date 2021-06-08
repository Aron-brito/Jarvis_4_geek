<?php

    require "Item.php";

    class Carrinho{
        private $id;
        private $itens = array();
        private $precoTotal;

        public function __construct($id)
        {
            $this->id = $id;            
        }


        public function adiciona_item($objItem){
            array_push($this->itens, $objItem);
        }

        public function calcula_total_carrinho(){
            for($i=0; $i < count($this->itens); $i++){
                $this->precoTotal += $this->itens[$i]->getTotal_item();
            }
            return $this->precoTotal;
        }

        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        public function getPreco_total()
        {
                return $this->precoTotal;
        }

        public function setPreco_total($precoTotal)
        {
                $this->precoTotal = $precoTotal;

                return $this;
        }
    }

?>