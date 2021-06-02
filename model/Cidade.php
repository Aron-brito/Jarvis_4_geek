<?php


    class Cidade{
        private $id;
        private $nomeCidade;

        public function __construct($id, $nomeCidade)
        {
            $this->id = $id;
            $this->nomeCidade = $nomeCidade;            
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
         * Get the value of nomeCidade
         */ 
        public function getNomeCidade()
        {
                return $this->nomeCidade;
        }

        /**
         * Set the value of nomeCidade
         *
         * @return  self
         */ 
        public function setNomeCidade($nomeCidade)
        {
                $this->nomeCidade = $nomeCidade;

                return $this;
        }
    }

?>