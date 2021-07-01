<div class="produtos row text-center imgs">
    <?php foreach ($dados as $prod) { ?>
        <div class="col-lg-4 col-sm-6">
            <div class="produto">
                <h3 class="prod-title"><?= $prod->getNome() ?></h3>
                <img src="../img/canecas.png" alt="canecas marvel" />
                <h2><?= $prod->getPreco() ?></h2>
                <a href="<?=URL.'/produtos/descricaoP/'.$prod->getId();?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Detalhes</a>
            </div>
        </div>
    <?php } ?>
</div>