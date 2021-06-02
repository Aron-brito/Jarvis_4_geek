<?php

    class Cartao{

        private $numero;
        private $nome;
        private $cvv;
        private $validade;


        public function __construct($numero,$nome,$cvv,$validade)
        {
            $this->numero = $numero;
            $this->nome = $nome;
            $this->cvv = $nome;
            $this->validade = $validade;
        }

        

        public function getNumero()
        {
                return $this->numero;
        }

        public function setNumero($numero)
        {
                $this->numero = $numero;

                return $this;
        }


        public function getNome()
        {
                return $this->nome;
        }


        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        public function getCvv()
        {
                return $this->cvv;
        }

        public function setCvv($cvv)
        {
                $this->cvv = $cvv;

                return $this;
        }

        public function getValidade()
        {
                return $this->validade;
        }

        public function setValidade($validade)
        {
                $this->validade = $validade;

                return $this;
        }
    }

?>