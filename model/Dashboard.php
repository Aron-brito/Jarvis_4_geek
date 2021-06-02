<?php

require "./ContaCliente.php";
require "./Produto.php";
require "./Endereco.php";
require "./Preparacao.php";
require "./Embalagem.php";
require "./Entrega.php";

class Dashboard{

    protected $clientesVips = array();
    protected $produtosVips = array();
    protected $bairrosVips = array();
    protected $tempoTotalEntrega = array();

    public function __construct($clientesVips, $produtosVips, $bairrosVips)
    {
        $this->clientesVips = $clientesVips;
        $this->produtosVips = $produtosVips;
        $this->bairrosVips = $bairrosVips;
    }

    // Esses métodos abaixo vão chamar as classes DAO
    public function listarClientesVips(){
        // adicionar no array os 5 tops clientes que mais compram 
    }
    public function listarProdutosVips(){
        // adicionar no array os 5 tops produtos que mais é vendido
    }
    public function listarBairrosVips(){
        // adicionar no array os 5 tops bairros que mais compram 
    }

    //setter e getter
    public function getTempoTotalEntrega()
    {
        return $this->tempoTotalEntrega;
    }
    public function setTempoTotalEntrega($tempoTotalEntrega)
    {
        $this->tempoTotalEntrega = $tempoTotalEntrega;
        return $this;
    }
}