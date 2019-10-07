<?php if ($footerCredits == 'third-party') { ?>
<div class="footer-credits third-party">
	<div class="content">
		<footer>
			<div class="col-sm-3">
				<a class="credits-partner" href="http://teclabs.com.br/" target="_blank">
					<img src="<?=$thirdPartyLogo;?>" alt="<?=$thirdPartyName?>" title="<?=$thirdPartyName?>" />
				</a>
			</div>
			<div class="col-sm-6">
				<p class="credits-txt">
					© <?php echo $company; ?> - <?php echo date('Y'); ?> TODOS OS DIREITOS RESERVADOS -
				</p>
			</div>
			<div class="col-sm-3">
				<p class="credits-txt">
					PROVIDO POR:
					<a class="credits-teclabs" href="http://teclabs.com.br/" target="_blank">
						<img src="imgs/teclabs.png" alt="Teclabs" title="Teclabs" />
					</a>
				</p>
			</div>
		</footer>
	</div>
</div>
<?php } else { ?>
<div class="footer-credits">
	<div class="content">
		<footer>
			<p class="credits-txt">
				© <?php echo $company; ?> - <?php echo date('Y'); ?> TODOS OS DIREITOS RESERVADOS - DESENVOLVIDO POR:
				<a class="credits-teclabs" href="http://teclabs.com.br/" target="_blank">
					<img src="imgs/teclabs.png" alt="Teclabs" title="Teclabs" />
				</a>
			</p>
		</footer>
	</div>
</div>
<?php }; ?>