<div class="header-no-address row">
	<div class="content">
		<header>
			<div class="left">
				<h1 class="logo">
					<a href="index.php" title="<?=$company?> - LOJA VIRTUAL">
						<img id="logo" src="<?=$logo?>" alt="<?=$company?> - LOJA VIRTUAL" title="<?=$company?> - LOJA VIRTUAL" />
					</a>
				</h1>
			</div>
			<div id="search" class="right">
				<section role="search">
					<div class="search">
						<h2 class="search-title">ENCONTRE O QUE PRECISAR</h2>
						<form id="search-form" class="search-form" method="post" action="busca.php">
							<input type="hidden" name="acao" value="" />
							<label class="search-text">
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
		</header>
	</div>
</div>
<?php include('includes/main-menu.php');?>
