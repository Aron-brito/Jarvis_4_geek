<?php

require "Cliente.php";
require "Endereco.php";
require "Cartao.php";
require "Pedidos.php";

class ContaCliente
{

  private $cliente;
  private $cartao = array();
  private $endereco = array();
  private $pedidos = array();
  private $gasto_total;


  public function __construct($gasto_total, Cliente $cliente)
  {
    $this->cliente = $cliente;
  }

  public function Create_conta()
  {
    // criação de conta necessita acesso ao banco para realizar !!
  }

  public function Cal_gastos_total()
  {
    for ($i = 0; $i < count($this->pedidos); $i++) {
      $this->gasto_total += $this->pedidos[$i]->getCarrinho()->getPreco_total();
    }
    return $this->gasto_total;
  }
  public function Historico_pedidos()
  {
    for ($i = 0; $i < count($this->pedidos); $i++) {
      echo "O pedido {this->pedidos[$i]->id} foi comprado na data {this->pedidos[$i]->getData()}.";
    }
  }
}
