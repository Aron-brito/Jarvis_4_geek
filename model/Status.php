<?php

    class Status{

        private $id;
        private $nome_status;
        private $data_atualizacao;


        public function __construct($id,$nome_status){
            $this->id = $id;
            $this->nome_status = $nome_status;
        }
        
        public function data_atual($data){
            //aqui é só uma função pra pegar do sistema qual a data atual e setar na nossa variavel
            $this->data_atualizacao = $data;
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

        public function getNome_status()
        {
                return $this->nome_status;
        }

        public function setNome_status($nome_status)
        {
                $this->nome_status = $nome_status;

                return $this;
        }
    }


?>