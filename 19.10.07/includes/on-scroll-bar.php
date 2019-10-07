<div id="on-scroll-bar" class="on-scroll-bar">
	<div class="content mx-auto">
		<div class="left">
			<h1 class="logo">
				<a href="index.php" title="<?=$company?> - LOJA VIRTUAL">
					<img id="logo" src="<?=$logoAlternate?>" alt="<?=$company?> - LOJA VIRTUAL" title="<?=$company?> - LOJA VIRTUAL" />
				</a>
			</h1>
		</div>
		<div id="float-menu" class="middle-left">
			<button id="toggle-main-menu" type="button" class="btn btn-default button">
				<i class="fa fa-navicon" aria-hidden="true"></i>
			</button>
			<button id="toggle-menu-user" type="button" class="btn btn-default button">
				<i class="fa fa-user" aria-hidden="true"></i>
			</button>
			<ul id="float-main-menu" class="main-menu">
				<li><a href="index.php" title="HOME">HOME</a></li>
				<li><a href="sobre.php" title="SOBRE">SOBRE</a></li>
				<li><a href="faq.php" title="FAQ">FAQ</a></li>
				<li><a href="noticias.php" title="NOTÍCIAS">NOTÍCIAS</a></li>
				<li><a href="servicos.php" title="SERVIÇOS">SERVIÇOS</a></li>
				<li><a href="localizacao.php" title="LOCALIZAÇÃO">LOCALIZAÇÃO</a></li>
				<li><a href="contato.php" title="CONTATO">CONTATO</a></li>
			</ul>
			<div id="float-user-menu" class="main-menu">
				<h3 class="title">Acessar a Minha conta</h3>
				<form class="form" action="index.php" method="post">
					<input type="hidden" name="action" value="login" />
					<input class="form-control" type="text" name="user" placeholder="Usuário" autocomplete="off" />
					<input class="form-control" type="password" name="pass" placeholder="Senha" autocomplete="off" />
					<input class="btn btn-primary" type="submit" value="ENTRAR" />
				</form>
				<a href="#recuperar-senha" data-target="#modal-recuperar-senha" data-toggle="modal" title="Esqueci minha senha" class="forg-pass">Esqueci minha senha</a>
				<!-- <ul class="list">
					<li class="list-item"><a href="meus_dados.php" title="Meus dados">Meus dados</a></li>
					<li class="list-item"><a href="meus_enderecos.php" title="Meus endereços para entrega">Meus endereços para entrega</a></li>
					<li class="list-item"><a href="meus_pedidos.php" title="Pedidos em aberto">Pedidos em aberto</a></li>
					<li class="list-item"><a href="pedidos_hist.php" title="Histórico de pedidos">Histórico de pedidos</a></li>
				</ul> -->
			</div>
		</div>
		<div id="search" class="center">
			<section role="search">
				<div class="search">
					<form id="search-form-float" class="search-form" method="post" action="busca.php">
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

		<?php if (!$catalogOnly) { ?>
			<div id="cart" class="right">
				<div class="cart" onclick="navto('carrinho.php')">
					<h3 class="outline">Carrinho de compras</h3>
					<div class="text">
						<span class="text-top">Carrinho de compras</span>
						<span class="text-bot">Nenhum produto ainda</span>
					</div>
					<div class="icon">
						<div class="number">
							<span>0</span>
						</div>
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
				</div>
			</div>
		<?php }; ?>

		<?php if ($catalogOnly) { ?>
			<div id="cart" class="right">
				<div class="cart" onclick="navto('contato.php')">
					<h3 class="outline">SAC 16 0000-0000</h3>
					<div class="icon">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="text">
						<strong>
							<span class="text-top">Entre em contato!</span>
							<span class="text-bot">16 0000-0000</span>
						</strong>
					</div>
				</div>
			</div>
		<?php }; ?>
	</div>
</div>
