<div class="mobile-bar">

	<?php if(!strpos($self, 'index')) { ?>
		<button onclick="back();" class="btn btn-default btn-mobile pull-left nomargin">
			<i class="fa fa-chevron-left"></i>
		</button>
	<?php }; ?>

	<a href="index.php" class="title"><?php echo $company; ?></a>

	<button id="mobile-main-menu-btn" class="btn btn-default btn-mobile">
		<i class="fa fa-bars"></i>
	</button>

	<button onclick="navto('carrinho.php')" class="btn btn-default btn-mobile">
		<i class="fa fa-shopping-cart"></i>
	</button>

	<button class="btn btn-default btn-mobile" data-toggle="modal" data-target="#mobile-user-menu">
		<i class="fa fa-user-circle"></i>
	</button>

</div>

<div id="mobile-main-menu" class="mobile-menu">
	<ul class="list">
		<li><a href="index.php" title="HOME">HOME</a></li>
		<li><a href="categorias_mobile.php" title="HOME">CATEGORIAS</a></li>
		<li><a href="sobre.php" title="SOBRE">SOBRE</a></li>
		<li><a href="faq.php" title="FAQ">FAQ</a></li>
		<li><a href="videos.php" title="VÍDEOS">VÍDEOS</a></li>
		<li><a href="contato.php" title="ENVIE SUA RECEITA">ENVIE SUA RECEITA</a></li>
		<li><a href="cadastrar.php" title="ÁREA MÉDICA">ÁREA MÉDICA</a></li>
		<li><a href="noticias.php" title="NOTÍCIAS">NOTÍCIAS</a></li>
		<li><a href="servicos.php" title="SERVIÇOS">SERVIÇOS</a></li>
		<li><a href="localizacao.php" title="LOCALIZAÇÃO">LOCALIZAÇÃO</a></li>
		<li><a href="contato.php" title="CONTATO">CONTATO</a></li>
	</ul>
</div>

<!--
<div id="mobile-user-menu" class="modal fade login" role="dialog">
	<div class="modal-dialog">
		<form class="form contato-form" method="post" action="index.php">
			<div class="modal-content">
				<div class="modal-header">
					<i class="fa fa-user-circle"></i> Acessar a Minha conta
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<input type="hidden" name="action" value="login" />
					<label><input class="form-control" type="text" name="user" placeholder="Usuário" autocomplete="off" /></label>
					<label><input class="form-control" type="password" name="pass" placeholder="Senha" autocomplete="off" /></label>
					<a href="#" title="Esqueci minha senha" class="forg-pass">Esqueci minha senha</a>
					<div>
						Ainda não é cadastrado? <br>
						<a href="cadastrar.php">Cadastre-se!</a>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary" type="submit"><i class="fa fa-user"></i> ENTRAR</button>
					<button class="btn btn-default" data-dismiss="modal">FECHAR</button>
				</div>
			</div>
		</form>
	</div>
</div> -->

<!-- logado
-->
<div id="mobile-user-menu" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<form class="form contato-form" method="post" action="">
			<div class="modal-content">
				<div class="modal-header">
					<i class="fa fa-user-circle"></i>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<ul class="modal-list">
						<li><a href="meus_dados.php" title="Meus dados">Meus dados</a></li>
						<li><a href="meus_enderecos.php" title="Meus endereços para entrega">Meus endereços para entrega</a></li>
						<li><a href="meus_pedidos.php" title="Pedidos em aberto">Pedidos em aberto</a></li>
						<li><a href="pedidos_hist.php" title="Histórico de pedidos">Histórico de pedidos</a></li>
					</ul>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal">FECHAR</button>
				</div>
			</div>
		</form>
	</div>
</div>

<div id="modal-mobile-search" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<form class="form contato-form" method="post" action="busca.php">
			<div class="modal-content">
				<div class="modal-header">
					<i class="fa fa-search"></i> Buscar produto
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
						<input type="hidden" name="acao" value="" />
						<label>
							Digite sua busca
							<input class="form-control" type="text" name="busca" value="" maxlength="80" placeholder="Digite sua busca..." autocomplete="off" />
						</label>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> BUSCAR</button>
					<button class="btn btn-default" data-dismiss="modal">FECHAR</button>
				</div>
			</div>
		</form>
	</div>
</div>




<button class="btn btn-default btn-mobile-float" data-toggle="modal" data-target="#modal-mobile-search">
	<i class="fa fa-search"></i>
</button>