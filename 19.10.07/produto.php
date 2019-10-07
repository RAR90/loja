<?php include('includes/header.php'); ?>

<script type="application/ld+json">
{
	"@context": "http://schema.org/",
	"@type": "Product",
	"name": "Nome do produto de exemplo",
	"image": "http://teclabs.com.br/html/tcommerce/files/1000x1000.png",
	"description": "Descrição do produto de exemplo",
	"offers": {
		"@type": "Offer",
		"priceCurrency": "BRL",
		"price": "119.99",
		"availability": "http://schema.org/InStock",
		"seller": {
			"@type": "Organization",
			"name": "Teclabs E-Commerce"
		}
	}
}
</script>

<div class="inner row produto">
	<div class="content">
		<?php include('includes/side-bar.php');?>
		<div class="inner-wrapper">
			<div class="inner-wrapper-title">
				<h2>CATEOGRIA - NOME DO PRODUTO</h2>
			</div>
			<div class="inner-wrapper-content">
				<div class="col-2-1 product-img">
					<div class="product-img-zoom">

						<a id="product-gallery-image" class="product-img-zoom-thb image-1x1" href="files/1000x1000.png" alt="Produto Teste">
							<img src="files/1000x1000.png" alt="Produto Teste" title="Produto Teste" />
						</a>

						<div class="product-gallery" id="product-gallery">
							<a data-video="OCWj5xgu5Ng" data-thumbnail="files/1000x1000.png" title="Produto">
								<div class="image cover" style="background-image:url('http://via.placeholder.com/142x120.png')"></div>
							</a>
							<a data-image="files/1000x1000.png" data-thumbnail="files/1000x1000.png" title="Produto">
								<div class="image contain" style="background-image:url('http://via.placeholder.com/142x200.png')"></div>
							</a>
							<a data-image="files/1000x1000.png" data-thumbnail="files/1000x1000.png" title="Produto">
								<div class="image cover" style="background-image:url('http://via.placeholder.com/142x120.png')"></div>
							</a>
							<a data-image="files/1000x1000.png" data-thumbnail="files/1000x1000.png" title="Produto">
								<div class="image cover" style="background-image:url('http://via.placeholder.com/142x120.png')"></div>
							</a>
						</div>

					</div>
				</div>
				<div class="col-2-2 product-info">
					<h2 class="product-info-title">
						Lorem ipsum dolor sit amet vol uptat adpis cing uptat adpiscing
					</h2>
					<span class="product-info-text">
						Lorem ipsum dolor sit amet vol uptat adpis cing uptat adpiscinget vol uptat adpis cing uptat adpiscing
					</span>
					<span class="product-info-de">
						<span>de</span> R$154,00
					</span>
					<span class="product-info-por">
						por R$154,00
					</span>
					<div class="product-colorpicker">
						<label>
							<select name="colorpicker-picker-longlist">
								<option value="#ac725e">#ac725e</option>
								<option value="#d06b64">#d06b64</option>
								<option value="#f83a22">#f83a22</option>
								<option value="#fa573c">#fa573c</option>
								<option value="#ff7537">#ff7537</option>
								<option value="#ffad46">#ffad46</option>
								<option value="#42d692">#42d692</option>
								<option value="#16a765">#16a765</option>
								<option value="#7bd148">#7bd148</option>
								<option value="#b3dc6c">#b3dc6c</option>
								<option value="#fbe983">#fbe983</option>
								<option value="#fad165">#fad165</option>
								<option value="#92e1c0">#92e1c0</option>
								<option value="#9fe1e7">#9fe1e7</option>
								<option value="#9fc6e7">#9fc6e7</option>
								<option value="#4986e7">#4986e7</option>
								<option value="#9a9cff">#9a9cff</option>
								<option value="#b99aff">#b99aff</option>
								<option value="#c2c2c2">#c2c2c2</option>
								<option value="#cabdbf">#cabdbf</option>
								<option value="#cca6ac">#cca6ac</option>
								<option value="#f691b2">#f691b2</option>
								<option value="#cd74e6">#cd74e6</option>
								<option value="#a47ae2">#a47ae2</option>
							</select>
							<span class="lb">Escolha a cor do produto </span>
							<button id="colorpicker-init" class="btn product-colorpicker-btn hide">ESCOLHA A COR</button>
						</label>
					</div>
					<div class="product-colors-sizes">
						<h4 class="product-colors-sizes-title">Tamahos e cores</h4>
						<label class="product-color-size" title="Branca">
							<div class="product-color-size-color" style="background-color:#FFFFFF"></div>
							<div class="product-color-size-size">
								<input class="product-color-size-size-radio" type="radio" name="pro_grade" value="77" checked="checked">
								<span>M</span>
							</div>
						</label>
						<label class="product-color-size" title="Branca">
							<div class="product-color-size-color" style="background-color:#FFFFFF"></div>
							<div class="product-color-size-size">
								<input class="product-color-size-size-radio" type="radio" name="pro_grade" value="77" checked="checked">
								<span>M</span>
							</div>
						</label>
						<label class="product-color-size" title="Branca">
							<div class="product-color-size-color" style="background-color:#FFFFFF"></div>
							<div class="product-color-size-size">
								<input class="product-color-size-size-radio" type="radio" name="pro_grade" value="77" checked="checked">
								<span>M</span>
							</div>
						</label>
						<label class="product-color-size" title="Branca">
							<div class="product-color-size-color" style="background-color:#FFFFFF"></div>
							<div class="product-color-size-size">
								<input class="product-color-size-size-radio" type="radio" name="pro_grade" value="77" checked="checked">
								<span>M</span>
							</div>
						</label>
						<label class="product-color-size" title="Branca">
							<div class="product-color-size-color" style="background-color:#FFFFFF"></div>
							<div class="product-color-size-size">
								<input class="product-color-size-size-radio" type="radio" name="pro_grade" value="77" checked="checked">
								<span>M</span>
							</div>
						</label>
						<label class="product-color-size" title="Branca">
							<div class="product-color-size-color" style="background-color:#3978C4"></div>
							<div class="product-color-size-size">
								<input class="product-color-size-size-radio" type="radio" name="pro_grade" value="77" checked="checked">
								<span>MG</span>
							</div>
						</label>
						<label class="product-color-size" title="Branca">
							<div class="product-color-size-color" style="background-color:#4BA82F"></div>
							<div class="product-color-size-size">
								<input class="product-color-size-size-radio" type="radio" name="pro_grade" value="77" checked="checked">
								<span>XS</span>
							</div>
						</label>
						<label class="product-color-size" title="Branca">
							<div class="product-color-size-color" style="background-color:#C45353"></div>
							<div class="product-color-size-size">
								<input class="product-color-size-size-radio" type="radio" name="pro_grade" value="77" checked="checked">
								<span>M</span>
							</div>
						</label>
					</div>
					<div class="product-sizes">
						<h4 class="product-sizes-title">Tamahos</h4>
						<label class="product-size" title="Branca">
							<input class="product-size-radio" type="radio" name="pro_grade" value="77" checked="checked">
							<span>M</span>
						</label>
						<label class="product-size" title="Branca">
							<input class="product-size-radio" type="radio" name="pro_grade" value="77" checked="checked">
							<span>XM</span>
						</label>
						<label class="product-size" title="Branca">
							<input class="product-size-radio" type="radio" name="pro_grade" value="77" checked="checked">
							<span>X</span>
						</label>
						<label class="product-size" title="Branca">
							<input class="product-size-radio" type="radio" name="pro_grade" value="77" checked="checked">
							<span>M</span>
						</label>
					</div>

					<?php if (!$catalogOnly) { ?>
						<div class="product-buy">

							<div class="col-sm-4 clearpm">
								<h4 class="product-sizes-title">Quantidade</h4>
		                        <div>
		                        	<input class="form-control" type="number" name="" value="1">
		                        </div>
	                    	</div>

							<div class="col-sm-12 clearpm">
								<a id="por-no-carrinho" class="product-buy-link" onclick="">
									<span>POR NO CARRINHO</span>
								</a>
	                    	</div>
	                    	<br>
						</div>
					<?php }; ?>

					<?php if ($catalogOnly) { ?>
						<div class="col-md-12 clearpm">
							<br>
							<a class="btn btn-lg btn-default" data-toggle="modal" data-target="#orcamento-modal">
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
												<button type="submit" class="btn btn-default">ENVIAR</button>
												<button class="btn" data-dismiss="modal">FECHAR</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							<br><br>
						</div>
					<?php }; ?>

				</div>
				<div class="product-full-text">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#home">Detalhes</a></li>
						<li><a data-toggle="tab" href="#menu1">Garantia</a></li>
						<li><a data-toggle="tab" href="#menu2">Vendedor</a></li>
						<li><a data-toggle="tab" href="#menu3">Envio</a></li>
					</ul>

					<div class="tab-content panel-body">
						<div id="home" class="tab-pane fade in active">
							<p class="pull-left">
								Sit fugiat aliqua in duis adipisicing veniam officia sint sed consequat sit sunt amet non laboris enim ut qui anim.
							</p>
							<ul class="pull-left">
								<li>Duis dolor do fugiat esse consequat nulla esse duis.</li>
								<li>Dolor ullamco anim exercitation sint qui anim reprehenderit labore incididunt occaecat.</li>
								<li>Amet consequat in id ex sunt dolor ut culpa ut non labore adipisicing.</li>
								<li>Duis dolor do fugiat esse consequat nulla esse duis.</li>
							</ul>
						</div>
						<div id="menu1" class="tab-pane fade">
							<p class="pull-left">
								Lorem ipsum consectetur cillum pariatur sint esse commodo reprehenderit aliquip eu culpa aute magna elit duis dolore dolor est non laborum elit ex ea nulla incididunt aliqua adipisicing excepteur exercitation consequat tempor culpa nisi occaecat aliquip dolor laboris consequat eu officia minim sit commodo in quis ullamco velit consectetur quis ut tempor irure est et in mollit sit anim magna deserunt eu ea in exercitation labore dolore amet veniam in aliqua eiusmod anim elit elit ut nostrud consequat ad voluptate in occaecat exercitation laborum consequat incididunt pariatur cupidatat esse occaecat nulla pariatur dolor ullamco dolor tempor ut eu est cillum do excepteur culpa sint do ut tempor irure fugiat nisi ut dolor veniam sed sit minim reprehenderit nisi incididunt mollit consequat nostrud aliqua consequat minim ullamco amet amet velit tempor occaecat ea in in ullamco veniam veniam veniam dolor in sit deserunt dolor qui sint ad mollit eu consequat nisi ea reprehenderit magna eiusmod duis in magna ut dolore magna laboris laboris dolore eiusmod cupidatat irure aute proident laboris exercitation labore ut non qui in cupidatat eiusmod cillum ut ut.
							</p>
						</div>
						<div id="menu2" class="tab-pane fade">
							<p class="pull-left">
								Sint ad enim occaecat sunt commodo nisi adipisicing aute cupidatat minim anim in officia in dolor et consectetur do do dolore dolore aliquip mollit et nisi quis.
							</p>
						</div>
						<div id="menu3" class="tab-pane fade">
							<p class="pull-left">
								Exercitation tempor dolore excepteur mollit consequat nostrud nostrud sit eu veniam id duis velit nisi magna nulla excepteur ut.
							</p>
							<ol class="pull-left">
								<li>Duis dolor do fugiat esse consequat nulla esse duis.</li>
								<li>Dolor ullamco anim exercitation sint qui anim reprehenderit labore incididunt occaecat.</li>
								<li>Amet consequat in id ex sunt dolor ut culpa ut non labore adipisicing.</li>
								<li>Duis dolor do fugiat esse consequat nulla esse duis.</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="back-button marginl1p margint25px">
					<a class="btn btn-default" onclick="back();"><span>VOLTAR</span></a>
				</div>
			</div>
		</div>
	</div>
	<?php include('includes/related-carousel.php'); ?>
</div>

<?php
	include('includes/footer-alternative.php');
	include('includes/footer-default.php');
?>

<script>
	$(document).ready(function () {
		produtoController.init();
	});
</script>

<?php include('includes/footer.php'); ?>
