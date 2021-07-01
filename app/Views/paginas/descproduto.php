<div class="row prod_box">
        <div class="col-lg-5">
            <div class="box_p img_p ">
                <img src="<?=URL.'/public/img/canecas.png'?>" alt="">
            </div>

            <div class="itens_prod">
                <img src="<?=URL.'/public/img/canecas.png'?>" alt="">
                <img src="<?=URL.'/public/img/canecas.png'?>" alt="">
                <img src="<?=URL.'/public/img/canecas.png'?>" alt="">
            </div>
            <!-- Controls -->
            <nav>
                <ul class="control-box pager">
                    <li>
                        <a data-slide="prev" href="#Carousel" class="">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                        </a>
                    </li>
                    <li>
                        <a data-slide="next" href="#Carousel" class="">
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-7">
            <div class="product-information">
                <!--/product-information-->
                <h1><?= $dados->getNome() ?></h1><br>
                <h2> ID Produto:<?= $dados->getId() ?></h2> 
                <h4> Fornecedor: <?=$dados->getFornecedor()?></h4>
                <h3> R$ <?= $dados->getPreco() ?></h3>
                <form>
                    <div class="row qtd-row">
                        <div class="col-md-3 qtd-row">
                            <label for="fname"></label>
                            <input type="number" id="qtd-input" name="quant" size="4">
                        </div>
                        <div class="col-md-9">
                            <button type="submit" class="botaocomprar">COMPRAR</button>
                        </div>
                    </div>

                    <div class="row frete-row">
                        <div class="col-md-4">
                            <p>Calcular Frete:</p>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="cep-entry" name="name" placeholder="9999999999" size="11">
                            <buttom class="h3 ok-btn" value="OK">OK</buttom>
                        </div>
                    </div>
                </form>
            </div>
            <!--/product-information-->
        </div>

    </div>
    <!--/product-details-->
    <div class="row prod_box">
        <hr>
        <div class="container descricao">
            <h3>Descrição</h3>
            <h4>	
                <?= $dados->getDescricao() ?>
            </h4>
        </div>
    </div>