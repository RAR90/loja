<?php
  $self = $_SERVER['PHP_SELF'];
  $company = 'EMPRESA';

    // Logotipo: 300x150(px)
    // logo-manipulatum.png, logo-atelierdosoculos.png, logo-bothanica.png, logo-ouropreto.png,
    // logo-infocosaude.png, logo-projetomistura.png, logo-acanastraonline.png, phytoterapica_logo.png
    // alquimia_logo.png, logo_completa.png
    $logo = 'files/siafarma_logo.png';

    // phytoterapica_logo_white.png, alquimia_logo_white.png
    $logoAlternate = 'files/siafarma_logo_white.png';

  // Select Theme Color Base
    // default-green, default-deep-green, default-leaf-green, default-soft-blue,
    // rounded-blue, rounded-vivid-green, rounded-light-pink, bothanica, freshartesanal
    // alquimia, alquimia-dark, phytoterapica, farmaciataina, theshoesfranca, siafarma
    $theme = 'theshoesfranca';

  // Se true, desabilita o carrinho e todas as funções relacionadas a comprar
  $catalogOnly = false;

  // on scroll floating menu
  $onScrollBar = 'alternative'; // default, default-fixed, alternative

  $categoryType = 'side-bar'; // side-bar, horizontal-bar, both

  // Default Components Configuration
  $preloader = false; // true, false
  $headerType = 'header-address'; // header-address, header-no-address
  $headerButtons = false; // true, false
  $fullBanner = true;

  // Footer
  $footerType = 'default'; // default, alternative
  $paymantsBarType = 'default'; // simple, default
  $userAccess = true;
  $googleMaps = true;
  $newsletterSign = true;
  $footerCredits = 'third-party'; // third-party, default
  $thirdPartyName = 'Revendedora'; // only if $footerCredits is true
  $thirdPartyLogo = 'http://via.placeholder.com/150x50.png'; // only if $footerCredits is true

  // Index Components Configuration
  $providersCarousel = false;
  $categoryCarousel = 'circle'; // 'square', 'circle', false
  $showcase = true;
  $showcaseBanner = true;
  $offersCarousel = true;
  $userOpinion = true;
  $centralBanner = true;
  $categoryCalls = true;
  $legalText = true;

  //  Ícones flutuantes
  $floatingIcons = 'right'; // left, right, false

?>