<?php include('includes/header.php'); ?>
<div class="inner row">
	<div class="content">
		<?php include('includes/side-bar.php');?>
		<div class="inner-wrapper servico">
			<div class="inner-wrapper-title">
				<h2>SERVIÇO</h2>
			</div>
			<div class="inner-wrapper-content article">

				<div class="image-container">
					<img src="http://via.placeholder.com/340x225" alt="servico">
				</div>

				<div class="text">
					<h3 class="title">
						<span>Nome do serviço</span>
					</h3>
					<p>
						Incididunt et elit officia nulla in voluptate sunt cupidatat. Consequat culpa do deserunt nulla voluptate ullamco reprehenderit reprehenderit anim.
					</p>
					<a class="btn btn-default" data-toggle="modal" data-target="#orcamento-modal">
						SOLICITAR ORÇAMENTO
					</a>
					<div id="orcamento-modal" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<form class="form contato-form" method="post" action="">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Solicitar orçamento: Nome do Serviço</h4>
									</div>
									<div class="modal-body">
										<p>Preencha o formulário para enviar o pedido de orçamento</p>
										<input type="hidden" id="acao" name="acao" value="cadastrar"/>
										<label><input class="form-control" type="text" id="nome" name="nome" value="" maxlength="80" placeholder="Nome *" /></label>
										<label><input data-mask="telefone-9-digitos" class="form-control" type="text" id="telefone" name="telefone" value="" placeholder="Telefone *" /></label>
										<label><input class="form-control" type="text" id="email" name="email" value="" maxlength="80" placeholder="E-mail *" /></label>
										<label><textarea class="form-control" id="mensagem" name="mensagem" value="" placeholder="Mensagem"></textarea></label>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-info">ENVIAR</button>
										<button class="btn btn-default" data-dismiss="modal">FECHAR</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="text-full">
					<h3 class="title">
						<span>Nome completo do serviço</span>
					</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>

				<div class="back-button marginl1p margint25px">
					<a class="btn btn-default" onclick="back();"><span>VOLTAR</span></a>
				</div>

			</div>
		</div>
	</div>
</div>

<?php
	include('includes/footer-alternative.php');
	include('includes/footer-default.php');
	include('includes/footer.php');
?>