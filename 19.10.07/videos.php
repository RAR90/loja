<?php include('includes/header.php'); ?>
<div class="inner row">
  <div class="content">
    <?php include('includes/side-bar.php');?>
    <div class="inner-wrapper videos">
      <div class="inner-wrapper-title">
        <h2>VÍDEOS</h2>
      </div>
      <div class="inner-wrapper-content">

        <div class="article col-md-6">
          <div class="youtube" data-embed="C2BTDCTY8yw">
            <div class="play-button"></div>
          </div>
          <div class="text">
            <h3>Nome do vídeo</h3>
            <small>22/12/2017</small>
          </div>
        </div>

        <div class="article col-md-6"><div class="youtube" data-embed="C2BTDCTY8yw" style="background-image:url('http://via.placeholder.com/475x280')"><div class="play-button"></div></div><div class="text"><h3>Nome do vídeo</h3><small>22/12/2017</small></div></div>
        <div class="article col-md-6"><div class="youtube" data-embed="C2BTDCTY8yw" style="background-image:url('http://via.placeholder.com/475x280')"><div class="play-button"></div></div><div class="text"><h3>Nome do vídeo</h3><small>22/12/2017</small></div></div>
        <div class="article col-md-6"><div class="youtube" data-embed="C2BTDCTY8yw" style="background-image:url('http://via.placeholder.com/475x280')"><div class="play-button"></div></div><div class="text"><h3>Nome do vídeo</h3><small>22/12/2017</small></div></div>

        <div class="pagination-container">
          <ul class="pagination" role="menubar" aria-label="Pagination">
            <li><a href=""><span>Primeiro</span></a></li>
            <li><a href=""><span>Anterior</span></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li class="current"><a href="">4</a></li>
            <li><a href="">5</a></li>
            <li><a href="">9</a></li>
            <li><a href="">10</a></li>
            <li><a href=""><span>Próximo</span></a></li>
            <li><a href=""><span>Último</span></a></li>
          </ul>
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