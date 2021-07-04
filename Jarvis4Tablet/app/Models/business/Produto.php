<?php
    //require "Categoria.php";
    require_once '../app/Models/ProdutoDAO.php';
    class Produto{
        private $id;
        private $nome;
        private $descricao;
        private $img;
        private $preco;
        private $desconto;
        private $categoria;
        private $fornecedor;
        private $promo;
        

        // CRUD categoria
        
        // Esses métodos abaixo vão chamar as classes DAO
        public function adiciona_produto(){
                // adicionar produto no banco
        }
        public function remove_produto(){
                // remove produto no banco
        }
        public function altera_produto(){

        }

         // Gets e sets de todos os atributos
        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

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
 
        public function getDescricao()
        {
                return $this->descricao;
        }

        public function setDescricao($descricao)
        {
                $this->descricao = $descricao;

                return $this;
        }
 
        public function getImg()
        {
                return $this->img;
        }

        public function setImg($img)
        {
                $this->img = $img;

                return $this;
        }

        
        public function getPreco()
        {
                return $this->preco;
        }

        public function setPreco($preco)
        {
                $this->preco = $preco;

                return $this;
        }

       
        public function getDesconto()
        {
                return $this->desconto;
        }

        public function setDesconto($desconto)
        {
                $this->desconto = $desconto;

                return $this;
        }

        
        public function getFornecedor()
        {
                return $this->fornecedor;
        }

        public function setFornecedor($fornecedor)
        {
                $this->fornecedor = $fornecedor;

                return $this;
        }

        public function Vprod($categoria){
                $list = new ProdutoDAO();
    
                return $list->visualizarProdutos($categoria);
        
        }
        public function Promocoes($promo){
                $list = new ProdutoDAO();
    
                return $list->selepromo($promo);
        
        }

        public function Dprod($produto){
                $prod = new ProdutoDAO();
    
                return $prod->descProd($produto);
        
        }

        /**
         * Get the value of categoria
         */ 
        public function getCategoria()
        {
                return $this->categoria;
        }

        /**
         * Set the value of categoria
         *
         * @return  self
         */ 
        public function setCategoria($categoria)
        {
                $this->categoria = $categoria;

                return $this;
        }

        /**
         * Get the value of promo
         */ 
        public function getPromo()
        {
                return $this->promo;
        }

        /**
         * Set the value of promo
         *
         * @return  self
         */ 
        public function setPromo($promo)
        {
                $this->promo = $promo;

                return $this;
        }
} 
?>