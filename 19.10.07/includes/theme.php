<?php if ($categoryType == 'horizontal-bar') { ?>
<style>
	.inner-wrapper-title,
	.inner-wrapper-content,
	.inner-wrapper,
	.showcase {float:left;width:100%!important;}
	.inner-wrapper-content {padding-left:25px;padding-right:25px;}
	.showcase-item {height:490px;}
	.inner-col-right {width: 40%;}
	.noticias .article {height: 300px;}
	.servicos .article {height: 200px;}

	<?php if ($categoryType=='horizontal-bar') { ?>
		@media(max-width:767px) {.showcase {width:90%!important;}}
	<?php }; ?>

	<?php if ($catalogOnly) { ?>

		.showcase-item .showcase-item-title {

		}

		.showcase-item .showcase-item-price {

		}

	<?php }; ?>
</style>
<?php }; ?>