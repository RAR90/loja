<div class="main-menu row">
	<div class="content">
		<ul class="list">
			<li class="<?=strpos($self, 'index')>0?'curr':''?>"><a href="index.php" title="HOME">HOME</a></li>
			<li class="<?=strpos($self, 'sobre')>0?'curr':''?>"><a href="sobre.php" title="SOBRE">SOBRE</a></li>
			<li class="<?=strpos($self, 'faq')>0?'curr':''?>"><a href="faq.php" title="FAQ">FAQ</a></li>
			<li class="<?=strpos($self, 'videos')>0?'curr':''?>"><a href="videos.php" title="VÍDEOS">VÍDEOS</a></li>
			<li class="<?=strpos($self, 'noticias')>0||strpos($self, 'noticia')>0?'curr':''?>"><a href="noticias.php" title="NOTÍCIAS">NOTÍCIAS</a></li>
			<li class="<?=strpos($self, 'servicos')>0||strpos($self, 'servicos')>0?'curr':''?>"><a href="servicos.php" title="SERVIÇOS">SERVIÇOS</a></li>
			<li class="<?=strpos($self, 'localizacao')>0?'curr':''?>"><a href="localizacao.php" title="LOCALIZAÇÃO">LOCALIZAÇÃO</a></li>
			<li class="<?=strpos($self, 'contato')>0?'curr':''?>"><a href="contato.php" title="CONTATO">CONTATO</a></li>
		</ul>
		<div class="social">
			<div onclick="opentab('#')" class="icon first">
				<i class="fa fa-twitter" aria-hidden="true"></i>
			</div>
			<div onclick="opentab('#')" class="icon">
				<i class="fa fa-facebook" aria-hidden="true"></i>
			</div>
			<div onclick="opentab('#')" class="icon">
				<i class="fa fa-youtube" aria-hidden="true"></i>
			</div>
			<div onclick="opentab('#')" class="icon">
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</div>
			<div onclick="opentab('#')" class="icon">
				<i class="fa fa-linkedin" aria-hidden="true"></i>
			</div>
			<div onclick="opentab('#')" class="icon">
				<i class="fa fa-google-plus" aria-hidden="true"></i>
			</div>
		</div>
	</div>
</div>
<?php if ($categoryType == 'horizontal-bar' || $categoryType == 'both') include('includes/horizontal-bar.php'); ?>