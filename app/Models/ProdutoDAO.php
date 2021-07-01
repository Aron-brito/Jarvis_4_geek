<?php


class ProdutoDAO{

    private $db;
    
    public function __construct(){
        $this->db = new Database();
        
    }
        
        
    public function visualizarProdutos($categoria){
         
        $this->db->query("SELECT * FROM categoria WHERE nome = :nome");
        $this->db->bind(":nome",$categoria);
        $cat = $this->db->resultado();

        $listaProdutos = array();       
        $this->db->query("SELECT * FROM produto WHERE categoria_idcategoria = :categoria");
        $this->db->bind(":categoria",$cat->idcategoria);
        $res = $this->db->resultados();
        
        
        foreach($res as $prod){
                $produto = new Produto();
                $produto->setId($prod->idproduto);
                $produto->setNome($prod->nome);
                $produto->setDescricao($prod->descricao);
                $produto->setCategoria($prod->categoria_idcategoria);
                $produto->setPreco($prod->preco);
                $produto->setFornecedor($prod->fornecedor);
                $produto->setImg($prod->img_url);
                array_push($listaProdutos,$produto);
                //echo $prod->nome.'<br>';
               // echo $prod->categoria_idcategoria.'<br>';
               // echo $prod-
        }
        for($i=0; $i<sizeof($listaProdutos); $i++){
                //echo $listaProdutos[$i]->getNome().'<br>';
        }
        return $listaProdutos;

    }

    public function descProd($prod){
        $this->db->query("SELECT * FROM Produto WHERE idproduto = :produto");
        $this->db->bind(":produto",$prod);

        $resultado = $this->db->resultado();

        if($resultado){
            $produto = new Produto();
            $produto->setId($resultado->idproduto);
            $produto->setNome($resultado->nome);
            $produto->setDescricao($resultado->descricao);
            $produto->setCategoria($resultado->categoria_idcategoria);
            $produto->setPreco($resultado->preco);
            $produto->setFornecedor($resultado->fornecedor);
            $produto->setImg($resultado->img_url);
        
            return $produto;
        }
        else{
            echo 'produto invalido';
        }
    }

    public function selepromo($promo){
        $listaProdutos = array(); 
        $this->db->query("SELECT * FROM Produto WHERE promocao >= :promo");
        $this->db->bind(":promo",$promo);

        $resultados = $this->db->resultados();

        foreach($resultados as $prod){
            $produto = new Produto();
            $produto->setId($prod->idproduto);
            $produto->setNome($prod->nome);
            $produto->setDescricao($prod->descricao);
            $produto->setCategoria($prod->categoria_idcategoria);
            $produto->setPreco($prod->preco);
            $produto->setFornecedor($prod->fornecedor);
            $produto->setImg($prod->img_url);
            $produto->setPromo($prod->promo);
            array_push($listaProdutos,$produto);
           
        }
        return $listaProdutos;
    }


}