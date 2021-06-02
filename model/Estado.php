<?php

    class Estado{

        private $id;
        private $nomeEstado;

        public function __construct($id,$nomeEstado)
        {
            $this->id = $id;
            $this->nomeEstado = $nomeEstado;
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
         * Get the value of nomeEstado
         */ 
        public function getNomeEstado()
        {
                return $this->nomeEstado;
        }

        /**
         * Set the value of nomeEstado
         *
         * @return  self
         */ 
        public function setNomeEstado($nomeEstado)
        {
                $this->nomeEstado = $nomeEstado;

                return $this;
        }
    }


?>