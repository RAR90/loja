<?php
  include('includes/header.php');
?>
<div class="row showcase-row categoria-first-row">
  <div class="content">
    <?php include('includes/side-bar.php');?>
    <main>
      <section class="showcase">

        <div class="showcase-title">
          <h2>CATEGORIA</h2>
        </div>

        <div class="showcase-content">

          <article class="col-sm-3 col-sm-6 showcase-item">

            <div class="showcase-item-wrapper image-1x1">
              <div
                onclick="navto('produto.php')"
                class="showcase-item-img hvr-grow image-1x1"
                style="background-image:url('http://via.placeholder.com/250x250');">
              </div>
            </div>

            <div class="showcase-item-title">
              <h3>Quis in ocaecat sede voluptate in aliqua cillum minim esse deserunt laboris</h3>
            </div>

            <div class="showcase-item-price">
              <span class="showcase-item-price-de">PREÇO: </span>
              <span class="showcase-item-price-por-txt">SOB CONSULTA</span>
            </div>

            <?php if (!$catalogOnly) { ?>
              <div class="showcase-item-add hvr-bounce-to-right">
                <div class="showcase-item-add-ico">
                  <i class="fa fa-cart-plus" aria-hidden="true"></i>
                </div>
                <div class="showcase-item-add-txt">
                  <span>COLOCAR NO CARRINHO</span>
                </div>
              </div>
              <div class="showcase-item-details">
                <a href="produto.php" class="showcase-item-details-link" title="+ DETALHES">+ DETALHES</a>
              </div>
            <?php }; ?>

            <?php if ($catalogOnly) { ?>
              <div class="controls text-center">
                <button onclick="navto('produto.php')" class="btn btn-primary">+ DETALHES</button>
              </div>
            <?php }; ?>

          </article>

          <article class="col-sm-3 col-sm-6 showcase-item"><div class="showcase-item-wrapper image-1x1"><div onclick="navto('produto.php')" class="showcase-item-img hvr-grow image-1x1" style="background-image:url('http://via.placeholder.com/250x250');"></div></div><div class="showcase-item-title"><h3>Quis in ocaecat sede voluptate in aliqua cillum minim esse deserunt laboris</h3></div><div class="showcase-item-price"><span class="showcase-item-price-de">de R$ 180,00</span><div class="showcase-item-price-por"><span class="showcase-item-price-por-txt">por</span><span class="showcase-item-price-por-price">R$25,90</span></div></div><?php if (!$catalogOnly) { ?><div class="showcase-item-add hvr-bounce-to-right"><div class="showcase-item-add-ico"><i class="fa fa-cart-plus" aria-hidden="true"></i></div><div class="showcase-item-add-txt"><span>COLOCAR NO CARRINHO</span></div></div><div class="showcase-item-details"><a href="produto.php" class="showcase-item-details-link" title="+ DETALHES">+ DETALHES</a></div><?php }; ?><?php if ($catalogOnly) { ?><div class="controls text-center"><button onclick="navto('produto.php')" class="btn btn-primary">+ DETALHES</button></div><?php }; ?></article>
          <article class="col-sm-3 col-sm-6 showcase-item"><div class="showcase-item-wrapper image-1x1"><div onclick="navto('produto.php')" class="showcase-item-img hvr-grow image-1x1" style="background-image:url('http://via.placeholder.com/250x250');"></div></div><div class="showcase-item-title"><h3>Quis in ocaecat sede voluptate in aliqua cillum minim esse deserunt laboris</h3></div><div class="showcase-item-price"><span class="showcase-item-price-de">de R$ 180,00</span><div class="showcase-item-price-por"><span class="showcase-item-price-por-txt">por</span><span class="showcase-item-price-por-price">R$25,90</span></div></div><?php if (!$catalogOnly) { ?><div class="showcase-item-add hvr-bounce-to-right"><div class="showcase-item-add-ico"><i class="fa fa-cart-plus" aria-hidden="true"></i></div><div class="showcase-item-add-txt"><span>COLOCAR NO CARRINHO</span></div></div><div class="showcase-item-details"><a href="produto.php" class="showcase-item-details-link" title="+ DETALHES">+ DETALHES</a></div><?php }; ?><?php if ($catalogOnly) { ?><div class="controls text-center"><button onclick="navto('produto.php')" class="btn btn-primary">+ DETALHES</button></div><?php }; ?></article>
          <article class="col-sm-3 col-sm-6 showcase-item"><div class="showcase-item-wrapper image-1x1"><div onclick="navto('produto.php')" class="showcase-item-img hvr-grow image-1x1" style="background-image:url('http://via.placeholder.com/250x250');"></div></div><div class="showcase-item-title"><h3>Quis in ocaecat sede voluptate in aliqua cillum minim esse deserunt laboris</h3></div><div class="showcase-item-price"><span class="showcase-item-price-de">de R$ 180,00</span><div class="showcase-item-price-por"><span class="showcase-item-price-por-txt">por</span><span class="showcase-item-price-por-price">R$25,90</span></div></div><?php if (!$catalogOnly) { ?><div class="showcase-item-add hvr-bounce-to-right"><div class="showcase-item-add-ico"><i class="fa fa-cart-plus" aria-hidden="true"></i></div><div class="showcase-item-add-txt"><span>COLOCAR NO CARRINHO</span></div></div><div class="showcase-item-details"><a href="produto.php" class="showcase-item-details-link" title="+ DETALHES">+ DETALHES</a></div><?php }; ?><?php if ($catalogOnly) { ?><div class="controls text-center"><button onclick="navto('produto.php')" class="btn btn-primary">+ DETALHES</button></div><?php }; ?></article>
          <article class="col-sm-3 col-sm-6 showcase-item"><div class="showcase-item-wrapper image-1x1"><div onclick="navto('produto.php')" class="showcase-item-img hvr-grow image-1x1" style="background-image:url('http://via.placeholder.com/250x250');"></div></div><div class="showcase-item-title"><h3>Quis in ocaecat sede voluptate in aliqua cillum minim esse deserunt laboris</h3></div><div class="showcase-item-price"><span class="showcase-item-price-de">de R$ 180,00</span><div class="showcase-item-price-por"><span class="showcase-item-price-por-txt">por</span><span class="showcase-item-price-por-price">R$25,90</span></div></div><?php if (!$catalogOnly) { ?><div class="showcase-item-add hvr-bounce-to-right"><div class="showcase-item-add-ico"><i class="fa fa-cart-plus" aria-hidden="true"></i></div><div class="showcase-item-add-txt"><span>COLOCAR NO CARRINHO</span></div></div><div class="showcase-item-details"><a href="produto.php" class="showcase-item-details-link" title="+ DETALHES">+ DETALHES</a></div><?php }; ?><?php if ($catalogOnly) { ?><div class="controls text-center"><button onclick="navto('produto.php')" class="btn btn-primary">+ DETALHES</button></div><?php }; ?></article>
          <article class="col-sm-3 col-sm-6 showcase-item"><div class="showcase-item-wrapper image-1x1"><div onclick="navto('produto.php')" class="showcase-item-img hvr-grow image-1x1" style="background-image:url('http://via.placeholder.com/250x250');"></div></div><div class="showcase-item-title"><h3>Quis in ocaecat sede voluptate in aliqua cillum minim esse deserunt laboris</h3></div><div class="showcase-item-price"><span class="showcase-item-price-de">de R$ 180,00</span><div class="showcase-item-price-por"><span class="showcase-item-price-por-txt">por</span><span class="showcase-item-price-por-price">R$25,90</span></div></div><?php if (!$catalogOnly) { ?><div class="showcase-item-add hvr-bounce-to-right"><div class="showcase-item-add-ico"><i class="fa fa-cart-plus" aria-hidden="true"></i></div><div class="showcase-item-add-txt"><span>COLOCAR NO CARRINHO</span></div></div><div class="showcase-item-details"><a href="produto.php" class="showcase-item-details-link" title="+ DETALHES">+ DETALHES</a></div><?php }; ?><?php if ($catalogOnly) { ?><div class="controls text-center"><button onclick="navto('produto.php')" class="btn btn-primary">+ DETALHES</button></div><?php }; ?></article>
          <article class="col-sm-3 col-sm-6 showcase-item"><div class="showcase-item-wrapper image-1x1"><div onclick="navto('produto.php')" class="showcase-item-img hvr-grow image-1x1" style="background-image:url('http://via.placeholder.com/250x250');"></div></div><div class="showcase-item-title"><h3>Quis in ocaecat sede voluptate in aliqua cillum minim esse deserunt laboris</h3></div><div class="showcase-item-price"><span class="showcase-item-price-de">de R$ 180,00</span><div class="showcase-item-price-por"><span class="showcase-item-price-por-txt">por</span><span class="showcase-item-price-por-price">R$25,90</span></div></div><?php if (!$catalogOnly) { ?><div class="showcase-item-add hvr-bounce-to-right"><div class="showcase-item-add-ico"><i class="fa fa-cart-plus" aria-hidden="true"></i></div><div class="showcase-item-add-txt"><span>COLOCAR NO CARRINHO</span></div></div><div class="showcase-item-details"><a href="produto.php" class="showcase-item-details-link" title="+ DETALHES">+ DETALHES</a></div><?php }; ?><?php if ($catalogOnly) { ?><div class="controls text-center"><button onclick="navto('produto.php')" class="btn btn-primary">+ DETALHES</button></div><?php }; ?></article>
          <article class="col-sm-3 col-sm-6 showcase-item"><div class="showcase-item-wrapper image-1x1"><div onclick="navto('produto.php')" class="showcase-item-img hvr-grow image-1x1" style="background-image:url('http://via.placeholder.com/250x250');"></div></div><div class="showcase-item-title"><h3>Quis in ocaecat sede voluptate in aliqua cillum minim esse deserunt laboris</h3></div><div class="showcase-item-price"><span class="showcase-item-price-de">de R$ 180,00</span><div class="showcase-item-price-por"><span class="showcase-item-price-por-txt">por</span><span class="showcase-item-price-por-price">R$25,90</span></div></div><?php if (!$catalogOnly) { ?><div class="showcase-item-add hvr-bounce-to-right"><div class="showcase-item-add-ico"><i class="fa fa-cart-plus" aria-hidden="true"></i></div><div class="showcase-item-add-txt"><span>COLOCAR NO CARRINHO</span></div></div><div class="showcase-item-details"><a href="produto.php" class="showcase-item-details-link" title="+ DETALHES">+ DETALHES</a></div><?php }; ?><?php if ($catalogOnly) { ?><div class="controls text-center"><button onclick="navto('produto.php')" class="btn btn-primary">+ DETALHES</button></div><?php }; ?></article>

        </div>

      </section>
    </main>
  </div>
</div>

<?php
  include('includes/offers-carousel.php');
  include('includes/footer-alternative.php');
  include('includes/footer-default.php');
?>

<script>
  $(document).ready(function () {
    categoriaController.init();
  });
</script>

<?php include('includes/footer.php'); ?>
