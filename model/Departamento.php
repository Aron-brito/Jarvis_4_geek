<?php

    require "./Funcionario.php";
    require "./Pedido.php";

   abstract class Departamento{

        protected $acessoFuncionario;
        protected $pedido = array();
        protected $tempoMedioGasto;

        public function __construct($acessoFuncionario, $pedido, $tempoMedioGasto, $tempoEntrada)
        {
            $this->acessoFuncionario = $acessoFuncionario;
            $this->tempoMedioGasto = $tempoMedioGasto;
            $this->pedido = $pedido;   
            $this->tempoEntrada = $tempoEntrada;
        }

        // CRUD pedido
        public function adiciona_pedido($objPedido){
            array_push($this->pedidos, $objPedido);
        }
        public function remove_pedido($nomePedido){
            $key = array_search($nomePedido, $this->pedido);
            if($key != false){
                unset($this->pedido[$key]);
            }
        }
        public function listar_pedido(){
            for($i=0; $i < count($this->pedido); $i++){
                echo $this->pedido[$i]->getNome();
            }
        }

        //  chamar as classe DAO (manipulação no sql)
        public function calcularTempoMedio(){

             /*essa função irá calcular quanto tempo medio leva em cada setor atraves do horario/data de
               entrada com a horario/data do setor seguinte - MEDIA */
        }
    

        //Getter e Setter        
        public function getAcessoFuncionario()
        {
                return $this->acessoFuncionario;
        }
        public function setAcessoFuncionario($acessoFuncionario)
        {
                $this->acessoFuncionario = $acessoFuncionario;
                return $this;
        }
        public function getTempoMedioGasto()
        {
                return $this->tempoMedioGasto;
        }
        public function setTempoMedioGasto($tempoMedioGasto)
        {
                $this->tempoMedioGasto = $tempoMedioGasto;
                return $this;
        }

   }