<?php include('includes/header.php'); ?>
<div class="inner row">
	<div class="content">
		<?php include('includes/side-bar.php');?>
		<div class="inner-wrapper">
			<div class="inner-wrapper-title">
				<h2>MEUS DADOS</h2>
			</div>
			<div class="inner-wrapper-content">
				<div class="col-md-6">
					<form class="form" method="post" action="">
						<h2 class="form-title">Identificação</h2>
						<input type="hidden" id="acao" name="acao" value="cadastrar"/>
						<label>Nome<input class="form-control" type="text" id="nome" name="nome" value="" maxlength="80" placeholder="Nome *" /></label>
						<label class="form-half-label">CPF<input class="form-control" type="text" id="cpf" name="cpf" value="" maxlength="14" placeholder="CPF *" /></label>
						<label class="form-half-label">RG<input class="form-control" type="text" id="rg" name="rg" value="" maxlength="20" placeholder="RG *" /></label>
						<label class="form-half-label">Telefone<input class="form-control" type="text" id="telefone" name="telefone" value="" maxlength="15" placeholder="Telefone *" /></label>
						<label class="form-half-label">Celular<input class="form-control" type="text" id="celular" name="celular" value="" maxlength="15" placeholder="Celular" /></label>
						<label>Email<input class="form-control" type="text" id="email" name="email" value="" maxlength="80" placeholder="E-mail *" /></label>

						<h2 class="form-title">Endereço para entregas</h2>
						<label class="form-half-label">CEP<input class="form-control" type="text" id="cep" name="cep" value="" maxlength="9" placeholder="CEP *" /></label>
						<label class="form-half-label">Número<input class="form-control" type="text" id="logr_numero" name="logr_numero" value="" maxlength="10" placeholder="Número *" /></label>
						<label>Complemento<input class="form-control" type="text" id="complemento" name="complemento" value="" maxlength="255" placeholder="Complemento" /></label>
						<label>Logradouro<input class="form-control" type="text" id="logradouro" name="logradouro" value="" maxlength="80" placeholder="Logradouro *" disabled /></label>
						<label>Bairro<input class="form-control" type="text" id="bairro" name="bairro" value="" maxlength="80" placeholder="Bairro *" disabled /></label>
						<label>Cidade / UF<input class="form-control" type="text" id="cidade_uf" name="cidade_uf" value="" maxlength="100" placeholder="Cidade / UF *" disabled /></label>
						<div class="form-submit"><input class="btn btn-default" type="submit" name="button" value="ATUALIZAR" /></div>
					</form>
				</div>
				<div class="col-md-6">
					<h2 class="form-title">Alterar senha</h2>
					<p class="form-text">Entre com a senha atual para altera-la.</p>
					<form class="form" method="post" action="logar.php">
						<input type="hidden" id="acao" name="acao" value=""/>
						<label><input class="form-control" type="password" id="lg_psw" name="lg_psw" value="" maxlength="35" placeholder="Digite sua atual" /></label>
						<label><input class="form-control" type="password" id="lg_psw" name="lg_psw" value="" maxlength="35" placeholder="Digite a nova senha" /></label>
						<label><input class="form-control" type="password" id="lg_psw" name="lg_psw" value="" maxlength="35" placeholder="Repita a nova senha" /></label>
						<div class="form-submit"><input class="btn btn-default" type="submit" name="button" value="ATUALIZAR"/></div>
					</form>
				</div>
				<div class="back-button col-md-12 marginb25px">
					<br><a class="btn btn-default" onclick="back();"><span>VOLTAR</span></a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	include('includes/footer-alternative.php');
	include('includes/footer-default.php');
?>

<script>
	$(document).ready(function () {
		meusDadosController.init();
	});
</script>

<?php include('includes/footer.php'); ?>
