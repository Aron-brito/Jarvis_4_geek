<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jarvis4Geek</title>
    <link rel="stylesheet" href="<?=URL.'/public/css/head_footer.css'?>">
    <link rel="stylesheet" href="<?=URL.'/public/css/login.css'?>">
    <link rel="stylesheet" href="<?=URL.'/public/css/conta.css'?>">
    <link rel="stylesheet" href="<?=URL.'/public/css/avaliar_pedido.css'?>">
    <link rel="stylesheet" href="<?=URL.'/public/css/cod.css'?>">
    
    <link rel="shortcut icon" href="<?=URL.'/public/img/favicon.ico'?>" />
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>

<body>
<header>
<nav class="navbar navbar-default custom">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon                -bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="tituloLogo">
          <a class="navbar-brand titulo" href="<?=URL.'/paginas/home';?>">Jarvis 4 Geek</a>
          <img class="imagemLogo" src="<?=URL.'/public/img/logoPag.svg'?>">
        </div>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="row">
          <ul class="nav navbar-nav">
            <li class="formularioHeader">
              <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="O que procura?" name="search">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                      <img class="botaoPesquisa" src="https://img.icons8.com/nolan/25/search.png" />
                    </button>
                  </div>
                </div>
              </form>
            </li>
          </ul>

          <!--LOGIN E CARRINHO DE COMPRA (LADO DIREITO DA HEADER)-->
          <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['usuario_cpf'])){?>
              <li class="login"><a class="iconLogin" href="<?=URL.'/usuarios/perfil';?>"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    class="bi bi-person" viewBox="0 0 16 16">
                    <path
                      d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                  </svg><?=$_SESSION['usuario_nome']?></a>
              </li>
              <?php } else{?>
            <li class="login"><a class="iconLogin" href="<?=URL.'/usuarios/login';?>"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                  class="bi bi-person" viewBox="0 0 16 16">
                  <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                </svg> Minha Conta</a>
            </li>
            <?php }?>
            <li>
              <a href="<?=URL.'/paginas/carrinho';?>"><img class="imgCart" src="https://img.icons8.com/pastel-glyph/40/ffffff/fast-cart.png" /></a>
            </li>
          </ul>
        </div>
        <!-- FIM LOGIN E CARRINHO DE COMPRA -->
        <!--COMEÇO DA SEGUNDA LINHA DA HEADER ONDE FICA OS ICONES DE COMPRA-->
        <div class="row">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-11">
            <ul class="nav navbar-nav navbar-form">
              <li>
                <a href="<?=URL.'/produtos/pdecoracao';?>" class="icon-show"> Decoração
                  <img class="iconNav" src="<?=URL.'/public/img/quadro-armacao.svg'?>">
                </a>
              </li>
              <li>
                <a href="<?=URL.'/produtos/pcanecas';?>" class="icon-show">Canecas
                  <img class="iconNav" src="<?=URL.'/public/img/caneca-de-cafe.svg'?>">
                </a>
              </li>
              <li>
                <a href="<?=URL.'/produtos/pcamisetas';?>" class="icon-show">Camisetas
                  <img class="iconNav" src="<?=URL.'/public/img/camisa-preta-de-manga-curta.svg'?>">
                </a>
              </li>
              <li>
                <a href="<?=URL.'/produtos/pcolecionaveis';?>" class="icon-show">Colecionáveis
                  <img class="iconNav" src="<?=URL.'/public/img/super-heroi.svg'?>">
                </a>
              </li>
              <li>
                <a href="<?=URL.'/produtos/pacessorios';?>" class="icon-show">Acessórios
                  <img class="iconNav" src="<?=URL.'/public/img/fone-de-ouvido-de-computador.svg'?>">
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!--FIM DOS ICONES DE COMPRA-->
      </div>
    </div>
  </nav>
  </header>