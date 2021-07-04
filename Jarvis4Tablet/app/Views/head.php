<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Jarvis 4 Geek</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=URL.'/public/css/tablet-Pedidos.css'?>">
    <link rel="stylesheet" href="<?=URL.'/public/css/tablet-Preparacao.css'?>">

    <link rel="shortcut icon" href="<?=URL.'/public/img/favicon.ico'?>" />

    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>

<body>

    <!-- INICIO DA HEADER-->
    <nav class="navbar navbar-default custom">
        <div class="container-fluid">
            <div class="container linhaHeader">
                <div class="collapse navbar-collapse " id="myNavbar">
                    <div class="navbar-header col-md-6">
                        <div class="tituloLogo">
                            <a class="navbar-brand titulo" href="<?=URL.'/pedidos/vpedidos';?>">Jarvis 4 Geek</a>
                            <a href="<?=URL.'/pedidos/vpedidos';?>"><img class="imagemLogo" src="../img/logoPag.svg"></a>
                        </div>
                    </div>
                    <ul class="nav navbar-nav navbar-form">
                        <li>
                            <a href="<?=URL.'/pedidos/vpreparacao';?>" class="icon-show"> PREPARAÇÃO</a>
                        </li>
                        <li>
                            <a href="<?=URL.'/pedidos/vembalagem';?>" class="icon-show">EMBALAGEM</a>
                        </li>
                        <li>
                            <a href="<?=URL.'/pedidos/ventrega';?>" class="icon-show">ENTREGA</a>
                        </li>
                        <li>
                            <a id="botaoGerente" href="tablet-Relatorio.html" class="icon-show">GERENTE</a>
                        </li>
                        <li>
                            <?php if(isset($_SESSION['funcionario_cpf'])) {?>
                                <a id="botaoSair" class="icon-show" href="<?=URL.'/funcionarios/sair';?>">Sair</a>
                            <?php }?>
                        </li>
                        <li>
                            <?php if(isset($_SESSION['funcionario_cpf'])) {?>  
                                <p class="nomefuncionario"><?=$_SESSION['funcionario_nome']?></p>
                            <?php } else{?>
                                <p class="nomefuncionario">Funcionario</p>
                            <?php }?>    
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- FIM DA HEADER -->