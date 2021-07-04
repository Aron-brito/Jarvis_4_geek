
<div class="container">
    <div class="row">
      <div class="col-md-3"></div>
        <div class="col-md-5 col-sm-5">
            <div class="account-box">
                <div class="login_title">
                    <h3>Login</h3>
                </div>
                <form name="login" class="form-signin" method="post" action="<?=URL?>/usuarios/login" class="mt-4">
                <div class="form-group">
                    <label for="email"> <sup class="text-danger"></sup></label>
                    <input type="email" class="form-control"  name="email" id="email_login" value="<?=$dados['email']?>" class="form-control" placeholder="Email" required autofocus />
                </div>
                <div class="form-group">
                    <label for="senha"><sup class="text-danger"></sup></label>
                    <input type="password" name="senha"  id="form_with_toggle" value="<?=$dados['senha']?>" placeholder="Senha"  class="form-control" required />                
                    <i class="far fa-eye" id="eye"></i>
                  </div>
                
                <label class="checkbox">
                    <input type="checkbox" value="remember-me" />
                    Me mantenha conectado
                </label>
                <button class="btn btn-lg btn-block purple-bg" type="submit">
                    Login</button>
                </form>
                <a class="forgotLnk" href="http://www.jquery2dotnet.com">Esqueci minha senha</a>
                <div class="or-box">
                    <span class="or">OU</span>
                    <div class="row">
                        <div class="col-md-6 row-block">
                            <a href="http://www.jquery2dotnet.com" class="btn btn-facebook btn-block">Facebook</a>
                        </div>
                        <div class="col-md-6 row-block">
                            <a href="http://www.jquery2dotnet.com" class="btn btn-google btn-block">Google</a>
                        </div>
                    </div>
                </div>
                <div class="or-box row-block">
                    <div class="row">
                        <div class="col-md-12 row-block confirm">
                            <a href="<?=URL.'/usuarios/cadastro';?>" class="btn btn-primary btn-block">Criar nova conta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>