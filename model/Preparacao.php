<?php

require "./Departamento.php";
require "./Pedido.php";
require "./Embalagem.php";

class Preparacao extends Departamento{


    public function enviarEmbalagem($pedido){
   
       $this->pedido->status->nomeStatus = "Embalagem";
       $this->pedido->status->dataAtualizacao = $pedido->status->dataAtual();
    }   

    
}