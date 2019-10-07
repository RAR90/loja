<?php include('includes/floating-icons.php') ?>

<script>
	$(document).ready(function() {
		appController.init({
			assets: {
				headerType: '<?=$headerType;?>'
			}
		});
	});
</script>

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css" rel="stylesheet"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>

<script type="text/javascript" src="includes/js/scripts.min.js" charset="utf-8"></script>

<script>

	// Essa função é o evento que é acionado quando a página é carregada, use-o para abrir automaticamente o popup
	$(document).ready(function(){
		openWaitingDialog()
	})

	// Você pode colocar dentro de uma funciona simples como no exemplo abaixo, para ficar mais bonito e poder usar em outros lugares, seja no onclick ou quando carre a página
	function openWaitingDialog() {
		waitingDialog.show(
			'Calculando valores nos Correios',
			{
				dialogSize: 'md',
				progressType: 'warning'
			}
		);
		// Fecha o diálogo, coloquei num timeout para ilustrar
		// setTimeout(function () {waitingDialog.hide();}, 3000);
	}

</script>

<button
	onclick="openWaitingDialog()"
></button>

<script><?php include('includes/js/custom.js'); ?></script>

</body>
</html>
