<?php include('includes/header.php'); ?>
<div class="inner row">
	<div class="content">
		<?php include('includes/side-bar.php');?>
		<div class="inner-wrapper">
			<div class="inner-wrapper-title">
				<h2>CARRINHO DE COMPRAS</h2>
			</div>
			<div class="inner-wrapper-content">
				<div class="inner-wrapper-full">
					<div class="carrinho-title carrinho-title-first">
						<h3>Produtos no seu carrinho</h3>
					</div>
					<table class="striped-table">
						<thead>
							<tr>
								<th class="large-th">Descrição do produto</th>
								<th>Remover</th>
								<th>Unidades</th>
								<th>Preço</th>
								<th>Preço total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="large-td">Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
								<td class="td-icon"><a href=""><i class="fa fa-trash"></i></a></td>
								<td><input class="carrinho-quantidade-input" type="text" name="quantidade" value="1" /></td>
								<td>R$ 300,00</td>
								<td>R$1956,00</td>
							</tr>
							<tr>
								<td class="large-td">Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
								<td class="td-icon"><a href=""><i class="fa fa-trash"></i></a></td>
								<td><input class="carrinho-quantidade-input" type="text" name="quantidade" value="1" /></td>
								<td>R$ 300,00</td>
								<td>R$1956,00</td>
							</tr>
							<tr>
								<td class="large-td">Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
								<td class="td-icon"><a href=""><i class="fa fa-trash"></i></a></td>
								<td><input class="carrinho-quantidade-input" type="text" name="quantidade" value="500" /></td>
								<td>R$ 300,00</td>
								<td>R$1956,00</td>
							</tr>
						</tbody>
					</table>
					<div class="carrinho-title">
						<h3>Calcular o Frete</h3>
					</div>
					<div class="carrinho-frete cep-calc">
						<div class="col-2-1">
							<h3 class="cep-text">Digite o CEP de entrega para calcular seu frete</h3>
						</div>
						<div class="col-2-2">
							<button class="btn btn-default" type="button" name="button">CALCULAR</button>
							<input class="form-control" id="carrinho-cep" type="text" name="name" value="" placeholder="CEP: 0000-000"/>
						</div>
					</div>

					<table class="striped-table">
						<thead>
							<tr>
								<th class="large-th">Tipo do frete</th>
								<th>Valor do frete</th>
								<th>Frete + Valor da compra</th>
								<th>Selecionar</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="large-td">SEDEX SIMPLES - Correios</td>
								<td>$78,00</td>
								<td>$100,00</td>
								<td><input type="radio" name="name" value="" /></td>
							</tr>
							<tr>
								<td class="large-td">SEDEX 10 - Correios</td>
								<td>$78,00</td>
								<td>$100,00</td>
								<td><input type="radio" name="name" value="" /></td>
							</tr>
							<tr>
								<td class="large-td">Retirar em mãos</td>
								<td>$78,00</td>
								<td>$100,00</td>
								<td><input type="radio" name="name" value="" /></td>
							</tr>
						</tbody>
					</table>
					<div class="carrinho-title">
						<h3>Pagamento</h3>
					</div>
					<div class="col-2-1 carrinho-valor-total">
						<h4>VALOR TOTAL</h4>
						<div>
							R$ 3541,00
						</div>
					</div>
					<div onclick="navto('carrinho_pagamento.php');" class="col-2-2 carrinho-btn-comprar">
						<span>REVISAR E EFETUAR PAGAMENTO</span>
						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
					</div>
					<div class="back-button">
						<a class="btn btn-default" onclick="back();"><span>VOLTAR</span></a>
					</div>
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
		carrinhoController.init();
	});
</script>

<?php include('includes/footer.php'); ?>