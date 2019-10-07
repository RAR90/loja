<?php include('includes/header.php'); ?>
<div class="inner row">
  <div class="content">
    <?php include('includes/side-bar.php');?>
    <div class="inner-wrapper">
      <div class="inner-wrapper-title">
        <h2>FAQ - Perguntas frequentes</h2>
      </div>
      <div class="inner-wrapper-content">
        <div class="faq-slider">
          <ul class="faq">
            <li class="q"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit?</li>
            <li class="a">Suspendisse sit amet elit lacinia, feugiat magna at, luctus massa. Aliquam sodales dictum nulla. consectetur adipiscing elit.</li>

            <li class="q"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit?</li>
            <li class="a">Suspendisse sit amet elit lacinia, feugiat magna at, luctus massa. Aliquam sodales dictum nulla. consectetur adipiscing elit.</li>

            <li class="q"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit?</li>
            <li class="a">Suspendisse sit amet elit lacinia, feugiat magna at, luctus massa. Aliquam sodales dictum nulla. consectetur adipiscing elit.</li>

            <li class="q"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit?</li>
            <li class="a">Suspendisse sit amet elit lacinia, feugiat magna at, luctus massa. Aliquam sodales dictum nulla. consectetur adipiscing elit.</li>

            <li class="q"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit?</li>
            <li class="a">Suspendisse sit amet elit lacinia, feugiat magna at, luctus massa. Aliquam sodales dictum nulla. consectetur adipiscing elit.</li>

            <li class="q"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit?</li>
            <li class="a">Suspendisse sit amet elit lacinia, feugiat magna at, luctus massa. Aliquam sodales dictum nulla. consectetur adipiscing elit.</li>
          </ul>
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
?>

<script>
  $(document).ready(function () {
    faqController.init();
  });
</script>

<?php include('includes/footer.php'); ?>