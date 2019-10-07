<div class="header-address row">
  <div class="content">
    <header>
      <?php include('includes/header-buttons.php'); ?>
      <div class="col-left">
        <h1 class="logo">
          <a href="index.php" title="<?=$company?> - LOJA VIRTUAL">
            <img id="logo" src="<?=$logo?>" alt="<?=$company?> - LOJA VIRTUAL" title="<?=$company?> - LOJA VIRTUAL" />
          </a>
        </h1>
      </div>
      <div id="search" class="col-center">
        <section role="search">
          <div class="search">
            <h2 class="search-title">ENCONTRE O QUE PRECISAR</h2>
            <form id="search-form" class="search-form" method="post" action="busca.php">
              <input type="hidden" name="acao" value="" />
              <label class="search-txt">
                <input type="text" name="busca" value="" maxlength="80" placeholder="Digite sua busca..." autocomplete="off" />
              </label>
              <label class="search-enviar">
                <button type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                  <span>BUSCAR</span>
                </button>
              </label>
            </form>
          </div>
        </section>
      </div>
      <div id="address" class="col-right">
        <div class="address hvr-ripple-out" onclick="navto('localizacao.php');">
          <div class="address-txt">
            <span class="address-txt-top">VEJA NO MAPA</span>
            <span class="address-txt-bot">NOSSA LOCALIZAÇÃO</span>
            <a class="address-link" href="localizacao.php" title="Ver todos os pontos de venda!">Ver mais</a>
          </div>
          <div class="address-ico">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </header>
  </div>
</div>
<?php include('includes/main-menu.php');?>
