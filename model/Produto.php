<?php
    require "Categoria.php";

    class Produto{
        private $id;
        private $nome;
        private $descricao;
        private $img;
        private $preco;
        private $desconto;
        private $categoria = array();
        private $fornecedor;

        public function __construct($id,$nome,$descricao,$img,$preco,$desconto,$fornecedor){
            $this->id = $id;
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->img = $img;
            $this->preco = $preco;
            $this->desconto = $desconto;
            $this->fornecedor = $fornecedor;
        }
        
        // CRUD categoria
        public function adiciona_categoria($obj_categoria){
            array_push($this->categoria, $obj_categoria);
        }
        public function remove_categoria($nome_categoria){
            $key = array_search($nome_categoria, $this->categoria);
            if($key != false){
                unset($this->categoria[$key]);
            }
        }
        public function listar_categorias(){
            for($i=0; $i < count($this->categoria); $i++){
                echo $this->nome;
            }
        }

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
    } 
?>