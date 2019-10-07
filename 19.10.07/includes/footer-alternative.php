<?php

if ($footerType == 'alternative') {

include('includes/user-access.php');
include('includes/paymants-bar.php');
include('includes/newsletter-sign.php');
include('includes/google-maps.php');

?>
<div class="footer">
	<div class="content">
		<footer>
			<div class="col-sm-5 fb-container">
				<div class="fb-page"
					data-href="https://www.facebook.com/teclabs.tecnologia/"
					data-tabs="timeline"
					data-small-header="true"
					data-height="250"
					data-adapt-container-width="true"
					data-hide-cover="false"
					data-show-facepile="true"
					style="float:right;width:100%;">
					<blockquote cite="https://www.facebook.com/teclabs.tecnologia/" class="fb-xfbml-parse-ignore">
						<a href="https://www.facebook.com/teclabs.tecnologia/">
							Facebook - <?=$company;?>
						</a>
					</blockquote>
				</div>
			</div>
			<nav class="col-sm-2 footer-menu">
				<h2 class="footer-list-title">Institucional</h2>
				<ul class="footer-list">
					<li><a href="sobre.php" title="Sobre">Sobre</a></li>
					<li><a href="pagamento.php" title="Formas de pagamento">Formas de pagamento</a></li>
					<li><a href="entrega.php" title="Formas de entrega">Formas de entrega</a></li>
					<li><a href="trocas_devolucoes.php" title="Trocas e devoluções">Trocas e devoluções</a></li>
				</ul>
			</nav>
			<nav class="col-sm-2 footer-menu">
				<h2 class="footer-list-title">Atendimento</h2>
				<ul class="footer-list">
					<li><a href="faq.php" title="FAQ">FAQ</a></li>
					<li><a href="videos.php" title="VÍDEOS">VÍDEOS</a></li>
					<li><a href="cadastrar.php" title="Cadastrar">Cadastrar</a></li>
					<li><a href="contato.php" title="SAC">SAC</a></li>
				</ul>
			</nav>
			<address class="col-sm-3 footer-menu">
				<h2 class="footer-list-title">Contato</h2>
				<ul class="footer-list">
					<li><a href="#" title="Mapa do Site">Mapa do Site</a></li>
					<li>contato@loja.com.br</li>
					<li>16 3210-6549 | 16 3210-6549</li>
					<li>Ribeirão Preto - SP</li>
				</ul>
			</address>
		</footer>
	</div>
</div>

<?php

include('includes/legal-text.php');
include('includes/footer-credits.php');

};
?>