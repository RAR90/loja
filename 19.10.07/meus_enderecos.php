<?php include('includes/header.php'); ?>
<div class="inner row">
	<div class="content">
		<?php include('includes/side-bar.php');?>
		<div class="inner-wrapper">
			<div class="inner-wrapper-title">
				<h2>MEUS ENDEREÇOS ADICIONAIS PARA ENTREGA</h2>
			</div>
			<div class="inner-wrapper-content">
				<div class="col-md-6">
					<form class="form" method="post" action="">
						<h2 class="form-title">Cadastrar novo endereço</h2>
						<label class="form-half-label"><input class="form-control" type="text" id="cep" name="cep" value="" maxlength="9" placeholder="CEP *" onkeypress="mascaraCEP(this,event);somenteNumeros(this);" onkeyup="select_cep(this, './');" onfocus="select_cep(this, './');" oninput="select_cep(this, './');" /></label>
						<label class="form-half-label"><input class="form-control" type="text" id="logr_numero" name="logr_numero" value="" maxlength="10" placeholder="Número *" /></label>
						<label><input class="form-control" type="text" id="complemento" name="complemento" value="" maxlength="255" placeholder="Complemento" /></label>
						<label><input class="form-control" type="text" id="logradouro" name="logradouro" value="" maxlength="80" placeholder="Logradouro *" disabled /></label>
						<label><input class="form-control" type="text" id="bairro" name="bairro" value="" maxlength="80" placeholder="Bairro *" disabled /></label>
						<label><input class="form-control" type="text" id="cidade_uf" name="cidade_uf" value="" maxlength="100" placeholder="Cidade / UF *" disabled /></label>
						<div class="form-submit"><input class="btn btn-default" type="submit" name="button" value="CADASTRAR" /></div>
					</form>
				</div>
				<div class="col-md-6">
					<h2 class="form-title">Endereços cadastrados</h2>
					<table class="enderecos-table">
						<tr>
							<th>Endereço</th>
							<th>Excluir</th>
							<th>Padrão</th>
						</tr>
						<tr>
							<td class="td-title">Rua Raul Peixoto, 500 Ribeirão Preto - SP</td>
							<td class="td-icon"><a href=""><i class="fa fa-trash"></i></a></td>
							<td class="td-radio"><input type="radio" name="name" value=""></td>
						</tr>
						<tr>
							<td class="td-title">Rua Raul Peixoto, 500 Ribeirão Preto - SP</td>
							<td class="td-icon"><a href=""><i class="fa fa-trash"></i></a></td>
							<td class="td-radio"><input type="radio" name="name" value=""></td>
						</tr>
						<tr>
							<td class="td-title">Rua Raul Peixoto, 500 Ribeirão Preto - SP</td>
							<td class="td-icon"><a href=""><i class="fa fa-trash"></i></a></td>
							<td class="td-radio"><input type="radio" name="name" value=""></td>
						</tr>
					</table>
				</div>
				<div class="back-button col-md-12 margint25px">
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