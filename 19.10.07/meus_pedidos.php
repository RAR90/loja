<?php include('includes/header.php'); ?>
<div class="inner row">
  <div class="content">
    <?php include('includes/side-bar.php');?>
    <div class="inner-wrapper">
      <div class="inner-wrapper-title">
        <h2>PEDIDOS EM ABERTO</h2>
      </div>
      <div class="inner-wrapper-content">
        <div class="inner-wrapper-full">
          <table class="striped-table">
            <thead>
              <tr>
                <th>Código do pedido</th>
                <th>Data do pedido</th>
                <th>Tipo do Frete</th>
                <th>Valor do Frete</th>
                <th>Valor total</th>
                <th>Ver mais</th>
              </tr>
            </thead>
            <tbody>
              <tr onclick="navto('pedido.php')">
                <td>AV0241</td>
                <td>22/12/2016</td>
                <td>Sedex</td>
                <td>R$ 300,00</td>
                <td>R$1956,00</td>
                <td class="td-icon"><i class="fa fa-chevron-right"></i></td>
              </tr>
              <tr onclick="navto('pedido.php')">
                <td>AV0241</td>
                <td>22/12/2016</td>
                <td>Sedex</td>
                <td>R$ 300,00</td>
                <td>R$1956,00</td>
                <td class="td-icon"><i class="fa fa-chevron-right"></i></td>
              </tr>
              <tr onclick="navto('pedido.php')">
                <td>AV0241</td>
                <td>22/12/2016</td>
                <td>Sedex</td>
                <td>R$ 300,00</td>
                <td>R$1956,00</td>
                <td class="td-icon"><i class="fa fa-chevron-right"></i></td>
              </tr>
              <tr onclick="navto('pedido.php')">
                <td>AV0241</td>
                <td>22/12/2016</td>
                <td>Sedex</td>
                <td>R$ 300,00</td>
                <td>R$1956,00</td>
                <td class="td-icon"><i class="fa fa-chevron-right"></i></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="back-button marginl2p">
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