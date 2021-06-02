<?php

    class Status{

        private $id;
        private $nomeStatus;
        private $dataPreparacao;
        private $dataEmbalagem;
        private $dataEntrega;
        private $dataFinalizado;


        public function __construct($id,$nome_status){
            $this->id = $id;
            $this->nome_status = $nome_status;
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

        

        /**
         * Get the value of nomeStatus
         */ 
        public function getNomeStatus()
        {
                return $this->nomeStatus;
        }

        /**
         * Set the value of nomeStatus
         *
         * @return  self
         */ 
        public function setNomeStatus($nomeStatus)
        {
                $this->nomeStatus = $nomeStatus;

                return $this;
        }

        /**
         * Get the value of dataPreparacao
         */ 
        public function getDataPreparacao()
        {
                return $this->dataPreparacao;
        }

        /**
         * Set the value of dataPreparacao
         *
         * @return  self
         */ 
        public function setDataPreparacao($dataPreparacao)
        {
                $this->dataPreparacao = $dataPreparacao;

                return $this;
        }

        /**
         * Get the value of dataEmbalagem
         */ 
        public function getDataEmbalagem()
        {
                return $this->dataEmbalagem;
        }

        /**
         * Set the value of dataEmbalagem
         *
         * @return  self
         */ 
        public function setDataEmbalagem($dataEmbalagem)
        {
                $this->dataEmbalagem = $dataEmbalagem;

                return $this;
        }

        /**
         * Get the value of dataEntrega
         */ 
        public function getDataEntrega()
        {
                return $this->dataEntrega;
        }

        /**
         * Set the value of dataEntrega
         *
         * @return  self
         */ 
        public function setDataEntrega($dataEntrega)
        {
                $this->dataEntrega = $dataEntrega;

                return $this;
        }

        /**
         * Get the value of dataFinalizado
         */ 
        public function getDataFinalizado()
        {
                return $this->dataFinalizado;
        }

        /**
         * Set the value of dataFinalizado
         *
         * @return  self
         */ 
        public function setDataFinalizado($dataFinalizado)
        {
                $this->dataFinalizado = $dataFinalizado;

                return $this;
        }
    }


?>