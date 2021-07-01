
    <div class="col-md-1">
    </div>
    <div class="container tituloPag">
        <h3>Minha Conta</h3>
    </div>
    <div class="col-md-10 menu_perfil">
        <div class="menu_lateral">
            <h4>Menu</h4>

            <ul>
                <li>
                    <a class ="btn btn-sm btn-primary" href="">Pedidos</a>
                </li>
                <li>
                    <a class ="btn btn-sm btn-primary" href="<?=URL.'/usuarios/perfil';?>">Atualizar Dados</a>
                </li>

                <li>
                    <a class ="btn btn-sm btn-primary" href="<?=URL.'/usuarios/altSenha';?>">Alterar senha</a>
                </li>
                <li>
                    <?php if(isset($_SESSION['usuario_cpf'])) {?>
                        <a class ="btn btn-sm btn-danger" href="<?=URL.'/usuarios/deletar';?>">Delete</a>
                    <?php }?>
                </li>
                <li>
                    <?php if(isset($_SESSION['usuario_cpf'])) {?>
                        <a class ="btn btn-sm btn-warning" href="<?=URL.'/usuarios/sair';?>">Sair</a>
                    <?php }?>
                </li>
            </ul>
        </div>
    <div class="boxConta" id="account-box">

        <div>
            <div class="escopoPag">
                <h4>Meu Cadastro</h4>
            </div>
    
            <form name= "atualizar" method= "post" class= "formulario_perfil_cliente" action="<?= URL?>/usuarios/atualizar" class="mt-4">
                <div class="label_input_grupo">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" value="<?= $_SESSION['usuario_nome'] ?>"/>
                </div>
    
                <div class="label_input_grupo">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?= $_SESSION['usuario_email'] ?>"/>
                </div>

                <div class="label_input_grupo">
                    <label for="data">Data de nascimento</label>
                    <input type="date" name="data" id="data" value="<?= $_SESSION['usuario_data'] ?>"/>
                </div>
    
                <div class="label_input_grupo">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone" value="<?= $_SESSION['usuario_telefone'] ?>"/>
                </div>
    
                <button type="submit" id="botao_salvar_alteracoes">Salvar Alterações</button>
    
    
            </form>
        </div>

    </div>
</div>


    