<?php

session_start();
include './../app/autoload.php';
include './../app/configuracao.php';

$db = new Database;
/*
$nome = 'marcia';
$email = 'mawqwe@test.com';
$senha = '12dsf';
$idtestes = 1;
// create

$db->query("INSERT INTO testes (nome, email, senha) VALUES(:nome, :email, :senha)");
$db->bind(":nome", $nome);
$db->bind(":email", $email);
$db->bind(":senha", $senha);
$db->executa();
echo '<hr>Total Resultados:'.$db->totalresultados();
echo '<hr> Ultimo id:'.$db->ultimoIdInserido();
*/
$rotas = new Rota();

    
    