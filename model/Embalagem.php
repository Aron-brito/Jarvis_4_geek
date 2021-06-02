<?php

require "./Departamento.php";
require "./Pedido.php";

class Embalagem extends Departamento{


    public function enviarEntrega($pedido){
   
       $this->pedido->status->nomeStatus = "Entrega";
       $this->pedido->status->dataAtualizacao = $pedido->status->dataAtual();
    }   

    public function devolverEmbalagem($pedido){
   
        $this->pedido->status->nomeStatus = "Embalagem";
        $this->pedido->status->dataAtualizacao = $pedido->status->dataAtual();
    }  
}