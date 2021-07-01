<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5 col-sm-5">
            <div class="account-box" id="account-box">
                <div class="login_title">
                    <h3>Cadastre-se</h3>
                </div>
                <form name="cadastrar" method="post" action="<?= URL?>/usuarios/cadastro" class="mt-4">
                    <div class="form-group registro">
                        <label for="cpf"> CPF:<sup class="text-danger">*</sup></label>
                        <input type="number" name="cpf" placeholder="Digite seu cpf" id="cpf" value="<?= $dados['cpf'] ?>" class="form-control" required autofocus />
                    </div>
                    <div class="form-group registro">
                        <label for="nome">Nome completo:<sup class="text-danger">*</sup></label>
                        <input type="text" name="nome" placeholder="Digite seu nome" id="nome" value="<?= $dados['nome'] ?>" class="form-control" required autofocus />
                    </div>
                    <div class="form-group  registro">
                        <label for="en">Email:<sup class="text-danger">*</sup></label>
                        <input type="email" name="email" placeholder="Digite seu email" id="email" value="<?= $dados['email'] ?>" class="form-control" required autofocus />
                    </div>
                    <div class="checkbox_grupo">
                        <label for="sexo">Sexo<sup class="text-danger">*</sup></label>
                        <div class="inputs_radio_sexo">
                        
                            <div class="label_input_grupo">
                                <label for="masculino">
                                    <font color="black">Masculino</font>
                                    </label>
                                <input type="radio" name="sexo" id="masculino"value="masculino"/>
                            </div>
                            <div class="label_input_grupo">
                                <label for="feminino">
                                <font color="black">Feminino</font>
                                    </label>
                                </label>
                                <input type="radio" name="sexo" id="feminino"value="feminino"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group  registro">
                        <label for="data">Data de Nascimento:</label>
                        <input type="date" name="data" id="data" class="form-control" required autofocus />
                    </div>
                    <div class="form-group  registro">
                        <label for="telefone">Telefone:</label>
                        <input type="text" name="telefone" placeholder="(71) 99150-3871" id="telefone" value="<?= $dados['telefone'] ?>" class="form-control" required autofocus />
                    </div>
                    <div class="form-group  registro">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" placeholder="Senha" id="senha" value="<?= $dados['senha'] ?>" class="form-control" required autofocus />
                    </div>
                    <div class="form-group  registro">
                        <label for="confirma_senha">Confirmar Senha:</label>
                        <input type="password" name="confirme_senha" placeholder="Digite sua senha novamente" id="confirme_senha" value="<?= $dados['confirme_senha'] ?>" class="form-control" required autofocus />
                    </div>
                    <label class="checkbox" for="check1">
                        <input type="checkbox" id="accept_terms" name="check1" value="remember-me" />
                        Aceito todos os termos de condição explicitos nesse site.
                    </label>
                    <label class="checkbox" for="check2">
                        <input type="checkbox" name="check2" value="remember-me" />
                        Gostaria de receber nossas incríveis promoções em seu E-mail?
                    </label>
                    <input type="submit" value="Cadrastre-se" class="btn btn-lg btn-block purple-bg" id="purple-bg" type="submit">
                </form>
            </div>
        </div>
    </div>
</div>
</div>