<!DOCTYPE html>
<html lang="pt-br">

<body>

    <!-- TABELA -->
    <div id="main" class="container-fluid">
        <div id="list" class="row">
            <div class="col-md-1"></div>
            <div class="table-responsive col-md-10 customTabela">
                <table class="table table-striped" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th class="tituloTabela">ID</th>
                            <th class="tituloTabela"> CPF/Cliente</th>
                            <th class="tituloTabela">Status</th>
                            <th class="tituloTabela actions">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dados as $pedi) {?>
                        <tr>
                            <td><?= $pedi->getId() ?></td>
                            <td><?= $pedi->getCliente()->getCpf()?> - <?= $pedi->getCliente()->getNome()?></td>
                            <td><?= $pedi->getStatus()?></td>
                            <td class="actions">
                                <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                                <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                                <a class="btn btn-danger btn-xs" href="<?=URL.'/pedidos/deletar/'.$pedi->getId();?>" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /#list -->
        <div class="col-md-1"></div>
        <div id="bottom" class="row">
            <div class="col-md-10">
                <ul class="pagination">
                    <li class="disabled"><a>&lt; Anterior</a></li>
                    <li class="disabled"><a>1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
                </ul>
                <!-- /.pagination -->
            </div>
        </div>
        <!-- /#bottom -->

    </div>
    <!-- /#main -->
    <!-- FIM DA TABELA -->


</body>

</html>