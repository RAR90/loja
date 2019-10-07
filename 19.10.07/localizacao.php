<?php include('includes/header.php'); ?>
<div class="inner row localizacao">
	<div class="content">
		<?php include('includes/side-bar.php');?>
		<div class="inner-wrapper">
			<div class="inner-wrapper-title">
				<h2>Localização</h2>
			</div>
			<div class="inner-wrapper-content">
				<div class="localizacao-content">
					<div class="col-md-8">
						<iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=10+Rue+de+Rome&sll=48.874650,2.325336&ie=UTF8&hq=&hnear=10+RUE+DE+ROME,+75008,+FRANCE&t=m&z=17&ll=48.875350,2.325336&output=embed"></iframe>
					</div>
					<div class="col-md-4">
						<h3>Unidade 1</h3>
						<address>
							<strong>Endereço da loja, 1234</strong>
							<br>
							Ribeirão Preto - SP
						</address>
					</div>
				</div>
				<hr>
				<div class="localizacao-content">
					<div class="col-md-8">
						<iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=10+Rue+de+Rome&sll=48.874650,2.325336&ie=UTF8&hq=&hnear=10+RUE+DE+ROME,+75008,+FRANCE&t=m&z=17&ll=48.875350,2.325336&output=embed"></iframe>
					</div>
					<div class="col-md-4">
						<h3>Unidade 2</h3>
						<address>
							<strong>Endereço da loja, 1234</strong>
							<br>
							Ribeirão Preto - SP
						</address>
					</div>
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