<?php
  include('includes/setup.php');
  $self = $_SERVER['PHP_SELF'];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <title><?=$company;?></title>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "url": "http://teclabs.com.br/",
      "logo": "https://teclabs.com.br/imgs/logo.png",
      "contactPoint": [{
        "@type": "ContactPoint",
        "telephone": "+55-16-0000-0000",
        "contactType": "customer service"
      }]
    }
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="revisit-after" content="7 days" />
  <meta name="document-distribution" content="Global" />
  <meta name="cache-control" content="Public" />
  <meta name="document-state" content="Dynamic" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="title" content="" />
  <link rel="shortcut icon" href="imgs/favicon.ico?<?=rand();?>" type="image/x-icon" />
  <link rel="icon" href="imgs/favicon.ico?<?=rand();?>" type="image/x-icon" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    <?php
      include('includes/css/style.min.css');
      include('includes/temas/'.$theme.'.css');
      include('includes/css/custom.css');
    ?>
  </style>
  <?php include('includes/theme.php'); ?>
</head>
<body class="body <?=$theme;?>">
<?php
  if ($preloader) include('includes/pre-loader.php');

  include('includes/mobile-menu.php');
  include('includes/cart-bar.php');

  if ($onScrollBar == 'alternative') include('includes/on-scroll-bar.php');
  switch ($headerType) {
    case 'header-address':
      include('includes/header-address.php');
    break;
    case 'header-no-address':
      include('includes/header-no-address.php');
    break;
  }
?>