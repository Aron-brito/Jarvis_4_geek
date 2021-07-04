
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
                    <a class ="btn btn-sm btn-primary" href=" ">Pedidos</a>
                </li>
                <li>
                    <a class ="btn btn-sm btn-primary" href="<?=URL.'/usuarios/perfil';?>">Atualizar Dados</a>
                </li>

                <li>
                    <a class ="btn btn-sm btn-primary" href="<?=URL.'/usuarios/altSenha';?>">Alterar Senha</a>
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
                <h4>Alterar Senha</h4>
            </div>
    
            <form name= "atualizar" method= "post" class= "formulario_perfil_cliente" action="<?= URL?>/usuarios/altSenha" class="mt-4">
                <div class="label_input_grupo">
                    <label for="senha_atual">Senha Atual</label>
                    <input type="password" name="A_senha" id="A_senha" value=""/>
                </div>
    
                <div class="label_input_grupo">
                    <label for="nova_senha">Nova senha</label>
                    <input type="password" name="N_senha" id="N_senha" value=""/>
                </div>

                <button type="submit" id="botao_salvar_alteracoes">Salvar Alterações</button>
    
    
            </form>
        </div>

    </div>
</div>


    