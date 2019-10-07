<?php if ($newsletterSign) { ?>
<div id="newsletter-sign" class="newsletter-sign">
  <div class="content text-center">
    <h3 class="h3">
      Cadastre-se e receba ofertas e novidades
    </h3>
    <form id="signin" class="navbar-form navbar-center text-center">
      <input style="float:none" id="news-nome" type="text" class="form-control input-lg scroll-at-me" name="news-nome" placeholder="Digite seu nome...">
      <input style="float:none" id="news-email" type="text" class="form-control input-lg scroll-at-me" name="news-email" placeholder="Digite seu email...">
      <button style="float:none" type="submit" class="btn btn-default btn-lg">
        ENVIAR
        <i class="fa fa-arrow-circle-o-right"></i>
      </button>
    </form>
    <p>
      Enviaremos apenas conteúdo relevante, não praticamos spam!
    </p>
  </div>
</div>
<?php }; ?>