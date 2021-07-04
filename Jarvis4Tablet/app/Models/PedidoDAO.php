<?php

    class PedidoDAO{

        private $db;


        public function __construct()
        {
            $this->db = new Database();
        }

        public function delete($pedido){
             $this->db->query("DELETE from pedido where idpedido = :id");
             $this->db->bind(":id",$pedido);
             $this->db->executa();
        }

        public function visualizarPedidosByStatus($status){

            $this->db->query("SELECT * FROM status WHERE nome_status = :nome");
            $this->db->bind(":nome",$status);
            $stat = $this->db->resultado();

            $listaPedidos = array();
            $this->db->query("SELECT * FROM pedido INNER JOIN cliente ON pedido.cpf_cliente=cliente.cpf WHERE status_idstatus = :state");
            $this->db->bind(":state",$stat->idstatus);
            $res = $this->db->resultados();

            foreach($res as $pedi){
                $cliente = new Usuario();
                $cliente->setCpf($pedi->cpf);
                $cliente->setNome($pedi->nome);
                $cliente->setSenha($pedi->senha);
                $cliente->setEmail($pedi->email);
                $cliente->settelefone($pedi->telefone);
                $cliente->setSexo($pedi->sexo);


                $pedido = new Pedido();
                $pedido->setId($pedi->idpedido);
                $pedido->setEndereco($pedi->endereco_idendereco);
                $pedido->setData($pedi->data);
                $pedido->setNumeroCartao($pedi->cartao_numero_cartao);
                $pedido->setAvaliacao($pedi->avaliacao);
                //$pedido->setStatus($pedi->nome_status);
                $pedido->setCliente($cliente);
                array_push($listaPedidos,$pedido);
                //echo $prod->nome.'<br>';
               // echo $prod->categoria_idcategoria.'<br>';
               // echo $prod-
            
            return $listaPedidos;
        }

        }

        public function visualizarPedidos(){
         
            //$this->db->query("SELECT * FROM categoria WHERE nome = :nome");
            //$this->db->bind(":nome",$categoria);
            //$cat = $this->db->resultado();
    
            $listaPedidos = array();       
            $this->db->query("SELECT * from pedido INNER JOIN status INNER JOIN cliente ON pedido.status_idstatus=status.idstatus and pedido.cpf_cliente=cliente.cpf;");
            //$this->db->bind(":categoria",$cat->idcategoria);
            $res = $this->db->resultados();
            
            
            foreach($res as $pedi){
                    $cliente = new Usuario();
                    $cliente->setCpf($pedi->cpf);
                    $cliente->setNome($pedi->nome);
                    $cliente->setSenha($pedi->senha);
                    $cliente->setEmail($pedi->email);
                    $cliente->settelefone($pedi->telefone);
                    $cliente->setSexo($pedi->sexo);


                    $pedido = new Pedido();
                    $pedido->setId($pedi->idpedido);
                    $pedido->setEndereco($pedi->endereco_idendereco);
                    $pedido->setData($pedi->data);
                    $pedido->setNumeroCartao($pedi->cartao_numero_cartao);
                    $pedido->setAvaliacao($pedi->avaliacao);
                    $pedido->setStatus($pedi->nome_status);
                    $pedido->setCliente($cliente);
                    array_push($listaPedidos,$pedido);
                    //echo $prod->nome.'<br>';
                   // echo $prod->categoria_idcategoria.'<br>';
                   // echo $prod-
            }
            //for($i=0; $i<sizeof($listaProdutos); $i++){
                    //echo $listaProdutos[$i]->getNome().'<br>';
            //}
            return $listaPedidos;
    
        }
    }


?>