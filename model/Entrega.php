<?php

require "./Departamento.php";
require "./Pedido.php";

class Entrega extends Departamento{



    
    public function entregarPedido($pedido){
   
       $this->pedido->status->nomeStatus = "Finalizado";
       $this->pedido->status->dataAtualizacao = $pedido->status->dataAtual();
    }   

    
    public function calcularTempoMedioEntrega(){

        /*essa função irá calcular quanto tempo medio leva para o produto ser entregue atraves dos horarios/datas de
          entrada dos produtos em preparação ate o horario de entrega(saida) - MEDIA */
   }
}