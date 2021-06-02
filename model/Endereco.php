<?php

    require "Cidade.php";
    require "Estado.php";

    class Endereco{

        private $estado;
        private $cidade;
        private $distrito;
        private $rua;
        private $numero;
        private $descricao;


        public function __construct($estado,$cidade,$distrito,$rua,$numero,$descricao)
        {
            $this->estado = $estado;
            $this->cidade = $cidade;
            $this->distrito = $distrito;
            $this->rua = $rua;
            $this->numero = $rua;
            $this->descricao = $descricao;
        }

        //Crud do banco para enderecos


        // sets e gets
        public function adiciona_estado($obj_estado){
            $this->estado = $obj_estado;
        }
        
        public function adiciona_cidade($obj_cidade){
            $this->estado = $obj_cidade;
        }

        public function getDistrito()
        {
                return $this->distrito;
        }

        public function setDistrito($distrito)
        {
                $this->distrito = $distrito;

                return $this;
        }

        public function getRua()
        {
                return $this->rua;
        }
 
        public function setRua($rua)
        {
                $this->rua = $rua;

                return $this;
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

        public function getDescricao()
        {
                return $this->descricao;
        }

        public function setDescricao($descricao)
        {
                $this->descricao = $descricao;

                return $this;
        }
    }

?>