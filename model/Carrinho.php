<?php

    require "Item.php";

    class Carrinho{
        private $id;
        private $itens = array();
        private $preco_total;

        public function __construct($id)
        {
            $this->id = $id;            
        }


        public function adiciona_item($obj_item){
            array_push($this->itens, $obj_item);
        }

        public function calcula_total_carrinho(){
            for($i=0; $i < count($this->itens); $i++){
                $this->preco_total += $this->itens[$i]->getTotal_item();
            }
            return $this->preco_total;
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
                return $this->preco_total;
        }

        public function setPreco_total($preco_total)
        {
                $this->preco_total = $preco_total;

                return $this;
        }
    }

?>