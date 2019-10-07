<?php
if (!$catalogOnly) {
  if ($onScrollBar == 'default-fixed') { ?>
  <div class="mummy"></div>
  <div class="cart-bar row fixed">
<?php } else { ?>
  <div class="cart-bar row">
<?php } ?>
  <section>
    <h2 class="outline">BARRA DO CARRINHO DE COMPRA</h2>
    <div class="content">

      <!--BUTTON LOGIN-->
      <div id="cart-bar-login" class="login">
        <div class="icon">
          <i class="fa fa-user-circle-o" aria-hidden="true"></i>
        </div>
        <div class="text">
          <span class="text-top">Entrar na</span>
          <span class="text-bot">Minha conta</span>
        </div>
      </div>
      <!--//BUTTON LOGIN-->

      <!--BUTTON SIGNUP-->
      <div class="sign">
        <span>
          <span class="text-top">Ainda não tem uma conta?</span>
          <a href="cadastrar.php" class="text-bot">Cadastre-se</a>
        </span>
      </div>
      <!--//BUTTON SIGNUP-->

      <!--BUTTON LOGGED-->
      <div id="cart-bar-logged" class="logged">
        <div class="icon">
          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
        </div>
        <div class="text">
          <span class="text-top">BEM VINDO</span>
          <span class="text-bot">Nome e sobrenome do cliente</span>
        </div>
      </div>
      <!--//BUTTON LOGGED-->

      <!--BUTTON LOGOUT-->
      <div class="logout">
        <a href="cadastrar.php" class="logout-link">
          SAIR <i class="fa fa-times" aria-hidden="true"></i>
        </a>
      </div>
      <!--//BUTTON LOGOUT-->

      <!--CART ICON-->
      <div class="cart" onclick="navto('carrinho.php')">
        <h3 class="outline">Carrinho de compras</h3>
        <div class="text">
          <span class="text-top">Carrinho de compras</span>
          <span class="text-bot">Clique aqui para <strong>pagar</strong></span>
        </div>
        <div class="icon">
          <div class="number">
            <span>3</span>
          </div>
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        </div>
      </div>
      <!--//CART ICON-->

    </div>

    <!--MENU LOGIN-->
    <div id="login-menu" class="login-menu">
      <h3 class="title">Acessar a Minha conta</h3>
      <form class="form" action="index.php" method="post">
        <input type="hidden" name="action" value="login" />
        <input class="form-control" type="text" name="user" placeholder="Usuário" autocomplete="off" />
        <input class="form-control" type="password" name="pass" placeholder="Senha" autocomplete="off" />
        <div class="button">
          <input class="btn btn-default" type="submit" value="ENTRAR" />
        </div>
      </form>
      <a href="#recuperar-senha" data-target="#modal-recuperar-senha" data-toggle="modal" title="Esqueci minha senha" class="forg-pass">Esqueci minha senha</a>
    </div>
    <!--//MENU LOGIN-->

    <!--MENU LOGGED-->
    <div id="logged-menu" class="logged-menu">
      <nav>
        <h3 class="outline">Menu do usuário</h3>
        <ul class="list">
          <li class="list-item"><a href="meus_dados.php" title="Meus dados">Meus dados</a></li>
          <li class="list-item"><a href="meus_enderecos.php" title="Meus endereços para entrega">Meus endereços para entrega</a></li>
          <li class="list-item"><a href="meus_pedidos.php" title="Pedidos em aberto">Pedidos em aberto</a></li>
          <li class="list-item"><a href="pedidos_hist.php" title="Histórico de pedidos">Histórico de pedidos</a></li>
        </ul>
      </nav>
    </div>
    <!--//MENU LOGGED-->

  </section>
</div>

<!-- Alterar Senha -->
<div class="modal fade" id="modal-recuperar-senha">
  <div class="modal-dialog">
    <div class="panel panel-default">
      <div class="panel-body">
        <button type="button" class="close" data-dismiss="modal"><span>× </span><span class="sr-only">Fechar</span></button>
        <div class="text-center">
          <h3 style="margin-top:50px;"><i class="fa fa-lock fa-3x"></i></h3>
          <h2 class="text-center">Esqueceu sua senha?</h2>
          <p>Informe seu email para enviar-mos uma nova senha.</p>
          <div class="panel-body">
            <form id="register-form" role="form" autocomplete="off" class="form" method="post">
              <div class="form-group text-left">
                <label for="recovery-email">Digite seu email</label>
                <input id="recovery-email" name="email" placeholder="Ex.: meuemail@gmail.com" class="form-control input-lg"  type="email">
              </div>
              <div class="form-group">
                <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="ENVIAR" type="submit">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Alterar Senha -->
<?php }; ?>