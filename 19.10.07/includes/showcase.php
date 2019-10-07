<?php if ($showcase) { ?>

<div class="content">
	<?php include('includes/side-bar.php');?>
	<main>
		<section class="showcase">

			<div class="showcase-title">
				<h2>PRODUTOS EM DESTAQUE</h2>
			</div>

			<!-- showcase content -->
			<div class="showcase-content">

				<!-- showcase item -->
				<article class="col-sm-3 col-sm-6 showcase-item">

					<div class="showcase-item-wrapper image-1x1">
						<!-- Image with zoom -->
						<a id="product-gallery-image" class="product-img-zoom-thb image-1x1" href="files/1000x1000.png" alt="Produto Teste">
							<img data-link="teste.php" src="http://via.placeholder.com/250x250" alt="Produto Teste" title="Produto Teste" />
						</a>
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
				<!-- /showcase item -->

				<!-- showcase item -->
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
						<span class="showcase-item-price-de">de R$ 180,00</span>
						<div class="showcase-item-price-por">
							<span class="showcase-item-price-por-txt">por</span>
							<span class="showcase-item-price-por-price">R$25,90</span>
						</div>
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
				<!-- /showcase item -->

				<!-- dummy items -->
				<article class="col-sm-3 col-sm-6 showcase-item"><div class="showcase-item-wrapper image-1x1"><div onclick="navto('produto.php')" class="showcase-item-img hvr-grow image-1x1" style="background-image:url('http://via.placeholder.com/250x250');"></div></div><div class="showcase-item-title"><h3>Quis in ocaecat sede voluptate in aliqua cillum minim esse deserunt laboris</h3></div><div class="showcase-item-price"><span class="showcase-item-price-de">de R$ 180,00</span><div class="showcase-item-price-por"><span class="showcase-item-price-por-txt">por</span><span class="showcase-item-price-por-price">R$25,90</span></div></div><?php if (!$catalogOnly) { ?><div class="showcase-item-add hvr-bounce-to-right"><div class="showcase-item-add-ico"><i class="fa fa-cart-plus" aria-hidden="true"></i></div><div class="showcase-item-add-txt"><span>COLOCAR NO CARRINHO</span></div></div><div class="showcase-item-details"><a href="produto.php" class="showcase-item-details-link" title="+ DETALHES">+ DETALHES</a></div><?php }; ?><?php if ($catalogOnly) { ?><div class="controls text-center"><button onclick="navto('produto.php')" class="btn btn-primary">+ DETALHES</button></div><?php }; ?></article>
				<article class="col-sm-3 col-sm-6 showcase-item"><div class="showcase-item-wrapper image-1x1"><div onclick="navto('produto.php')" class="showcase-item-img hvr-grow image-1x1" style="background-image:url('http://via.placeholder.com/250x250');"></div></div><div class="showcase-item-title"><h3>Quis in ocaecat sede voluptate in aliqua cillum minim esse deserunt laboris</h3></div><div class="showcase-item-price"><span class="showcase-item-price-de">de R$ 180,00</span><div class="showcase-item-price-por"><span class="showcase-item-price-por-txt">por</span><span class="showcase-item-price-por-price">R$25,90</span></div></div><?php if (!$catalogOnly) { ?><div class="showcase-item-add hvr-bounce-to-right"><div class="showcase-item-add-ico"><i class="fa fa-cart-plus" aria-hidden="true"></i></div><div class="showcase-item-add-txt"><span>COLOCAR NO CARRINHO</span></div></div><div class="showcase-item-details"><a href="produto.php" class="showcase-item-details-link" title="+ DETALHES">+ DETALHES</a></div><?php }; ?><?php if ($catalogOnly) { ?><div class="controls text-center"><button onclick="navto('produto.php')" class="btn btn-primary">+ DETALHES</button></div><?php }; ?></article>
				<!-- /dummy items -->

			</div>
			<!-- /showcase content -->

			<?php if ($showcaseBanner) { ?>
				<figure onclick="opentab('#')" class="showcase-banner">
					<img src="http://via.placeholder.com/1990x500" title="Banner da vitrini" alt="Banner da vitrini"/>
				</figure>
			<?php }; ?>

			<!-- showcase content -->
			<div class="showcase-content">

				<!-- dummy items -->
				<article class="col-sm-3 col-sm-6 showcase-item"><div class="showcase-item-wrapper image-1x1"><div onclick="navto('produto.php')" class="showcase-item-img hvr-grow image-1x1" style="background-image:url('http://via.placeholder.com/250x250');"></div></div><div class="showcase-item-title"><h3>Quis in ocaecat sede voluptate in aliqua cillum minim esse deserunt laboris</h3></div><div class="showcase-item-price"><span class="showcase-item-price-de">de R$ 180,00</span><div class="showcase-item-price-por"><span class="showcase-item-price-por-txt">por</span><span class="showcase-item-price-por-price">R$25,90</span></div></div><?php if (!$catalogOnly) { ?><div class="showcase-item-add hvr-bounce-to-right"><div class="showcase-item-add-ico"><i class="fa fa-cart-plus" aria-hidden="true"></i></div><div class="showcase-item-add-txt"><span>COLOCAR NO CARRINHO</span></div></div><div class="showcase-item-details"><a href="produto.php" class="showcase-item-details-link" title="+ DETALHES">+ DETALHES</a></div><?php }; ?><?php if ($catalogOnly) { ?><div class="controls text-center"><button onclick="navto('produto.php')" class="btn btn-primary">+ DETALHES</button></div><?php }; ?></article>
				<article class="col-sm-3 col-sm-6 showcase-item"><div class="showcase-item-wrapper image-1x1"><div onclick="navto('produto.php')" class="showcase-item-img hvr-grow image-1x1" style="background-image:url('http://via.placeholder.com/250x250');"></div></div><div class="showcase-item-title"><h3>Quis in ocaecat sede voluptate in aliqua cillum minim esse deserunt laboris</h3></div><div class="showcase-item-price"><span class="showcase-item-price-de">de R$ 180,00</span><div class="showcase-item-price-por"><span class="showcase-item-price-por-txt">por</span><span class="showcase-item-price-por-price">R$25,90</span></div></div><?php if (!$catalogOnly) { ?><div class="showcase-item-add hvr-bounce-to-right"><div class="showcase-item-add-ico"><i class="fa fa-cart-plus" aria-hidden="true"></i></div><div class="showcase-item-add-txt"><span>COLOCAR NO CARRINHO</span></div></div><div class="showcase-item-details"><a href="produto.php" class="showcase-item-details-link" title="+ DETALHES">+ DETALHES</a></div><?php }; ?><?php if ($catalogOnly) { ?><div class="controls text-center"><button onclick="navto('produto.php')" class="btn btn-primary">+ DETALHES</button></div><?php }; ?></article>
				<article class="col-sm-3 col-sm-6 showcase-item"><div class="showcase-item-wrapper image-1x1"><div onclick="navto('produto.php')" class="showcase-item-img hvr-grow image-1x1" style="background-image:url('http://via.placeholder.com/250x250');"></div></div><div class="showcase-item-title"><h3>Quis in ocaecat sede voluptate in aliqua cillum minim esse deserunt laboris</h3></div><div class="showcase-item-price"><span class="showcase-item-price-de">de R$ 180,00</span><div class="showcase-item-price-por"><span class="showcase-item-price-por-txt">por</span><span class="showcase-item-price-por-price">R$25,90</span></div></div><?php if (!$catalogOnly) { ?><div class="showcase-item-add hvr-bounce-to-right"><div class="showcase-item-add-ico"><i class="fa fa-cart-plus" aria-hidden="true"></i></div><div class="showcase-item-add-txt"><span>COLOCAR NO CARRINHO</span></div></div><div class="showcase-item-details"><a href="produto.php" class="showcase-item-details-link" title="+ DETALHES">+ DETALHES</a></div><?php }; ?><?php if ($catalogOnly) { ?><div class="controls text-center"><button onclick="navto('produto.php')" class="btn btn-primary">+ DETALHES</button></div><?php }; ?></article>
				<article class="col-sm-3 col-sm-6 showcase-item"><div class="showcase-item-wrapper image-1x1"><div onclick="navto('produto.php')" class="showcase-item-img hvr-grow image-1x1" style="background-image:url('http://via.placeholder.com/250x250');"></div></div><div class="showcase-item-title"><h3>Quis in ocaecat sede voluptate in aliqua cillum minim esse deserunt laboris</h3></div><div class="showcase-item-price"><span class="showcase-item-price-de">de R$ 180,00</span><div class="showcase-item-price-por"><span class="showcase-item-price-por-txt">por</span><span class="showcase-item-price-por-price">R$25,90</span></div></div><?php if (!$catalogOnly) { ?><div class="showcase-item-add hvr-bounce-to-right"><div class="showcase-item-add-ico"><i class="fa fa-cart-plus" aria-hidden="true"></i></div><div class="showcase-item-add-txt"><span>COLOCAR NO CARRINHO</span></div></div><div class="showcase-item-details"><a href="produto.php" class="showcase-item-details-link" title="+ DETALHES">+ DETALHES</a></div><?php }; ?><?php if ($catalogOnly) { ?><div class="controls text-center"><button onclick="navto('produto.php')" class="btn btn-primary">+ DETALHES</button></div><?php }; ?></article>
				<!-- /dummy items -->

			</div>
			<!-- /showcase content -->

		</section>
	</main>
</div>
<script>
	$(document).ready(function () {
		$('.product-img-zoom-thb').teclabsZoom({
			bgColor : '#F4F3F2',
			offset : {x : -25,y : -25},
			roundedCorners : true,
			showCursor : true,
			zoomWidth : 200,
			zoomHeight : 200
		});
	});
</script>
<?php }; ?>