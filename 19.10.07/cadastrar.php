<?php include('includes/header.php');?>
<div class="inner row cadastrar">
	<div class="content">
		<?php include('includes/side-bar.php');?>
		<div class="inner-wrapper">
			<div class="inner-wrapper-title">
				<h2>CADASTRE-SE OU FAÇA LOGIN!</h2>
			</div>
			<div class="inner-wrapper-content">
				<div class="col-md-6">
					<form class="form" method="post" action="">
						<h2 class="form-title">Identificação</h2>
						<input type="hidden" id="acao" name="acao" value="cadastrar"/>
						<label><input class="form-control" type="text" id="nome" name="nome" value="" maxlength="80" placeholder="Nome *" /></label>
						<label class="form-half-label"><input class="form-control" type="text" id="cpf" name="cpf" value="" maxlength="14" placeholder="CPF *" /></label>
						<label class="form-half-label"><input class="form-control" type="text" id="rg" name="rg" value="" maxlength="20" placeholder="RG *" /></label>
						<label class="form-half-label"><input class="form-control" type="text" id="telefone" name="telefone" value="" maxlength="15" placeholder="Telefone *" /></label>
						<label class="form-half-label"><input class="form-control" type="text" id="celular" name="celular" value="" maxlength="15" placeholder="Celular" /></label>

						<h2 class="form-title">Dados de acesso</h2>
						<label><input class="form-control" type="text" id="email" name="email" value="" maxlength="80" placeholder="E-mail *" /></label>
						<label class="form-half-label"><input class="form-control" type="password" id="senha" name="senha" value="" maxlength="35" placeholder="Crie uma senha *" /></label>
						<label class="form-half-label"><input class="form-control" type="password" id="senha_conf" name="senha_conf" value="" maxlength="35" placeholder="Redigite a senha *" /></label>

						<h2 class="form-title">Endereço para entregas</h2>
						<label class="form-half-label"><input class="form-control" type="text" id="cep" name="cep" value="" maxlength="9" placeholder="CEP *" /></label>
						<label class="form-half-label"><input class="form-control" type="text" id="logr_numero" name="logr_numero" value="" maxlength="10" placeholder="Número *" /></label>
						<label><input class="form-control" type="text" id="complemento" name="complemento" value="" maxlength="255" placeholder="Complemento" /></label>
						<label><input class="form-control" type="text" id="logradouro" name="logradouro" value="" maxlength="80" placeholder="Logradouro *" disabled /></label>
						<label><input class="form-control" type="text" id="bairro" name="bairro" value="" maxlength="80" placeholder="Bairro *" disabled /></label>
						<label><input class="form-control" type="text" id="cidade_uf" name="cidade_uf" value="" maxlength="100" placeholder="Cidade / UF *" disabled /></label>
						<div class="form-submit"><input class="btn btn-default" type="submit" name="button" value="CADASTRAR" /></div>
					</form>
				</div>
				<div class="col-md-6">
					<h2 class="form-title">Já possui um login?</h2>
					<p class="form-text">Entre para usufruir de todas as vantagens dessa loja virtual.</p>
					<form class="form" method="post" action="logar.php">
						<input type="hidden" id="acao" name="acao" value=""/>
						<label><input class="form-control" type="text" id="lg_usr" name="lg_usr" value="" maxlength="80" placeholder="Digite seu e-mail" /></label>
						<label><input class="form-control" type="password" id="lg_psw" name="lg_psw" value="" maxlength="35" placeholder="Digite sua senha" /></label>
						<div class="form-submit"><input class="btn btn-default" type="submit" name="button" value="ENTRAR"/></div>
					</form>
					<br />
					<h2 class="form-title">Esqueceu a sua senha?</h2>
					<p class="form-text">Digite o seu e-mail abaixo caso esqueceu sua senha.</p>
					<form class="form" method="post" action="logar_lembrar.php">
						<label><input class="form-control" type="text" id="lg_email" name="lg_email" value="" maxlength="80" placeholder="Digite seu e-mail" /></label>
						<div class="form-submit"><input class="btn btn-default" type="submit" class="bg_btn1 color0" name="button" value="RECUPERAR" class="bg_btn0 bg_color2" /></div>
					</form>
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
		cadastrarController.init();
	});
</script>

<?php include('includes/footer.php'); ?>
