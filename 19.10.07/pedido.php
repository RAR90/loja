<?php include('includes/header.php'); ?>
<div class="inner row">
  <div class="content">
    <?php include('includes/side-bar.php');?>
    <div class="inner-wrapper">
      <div class="inner-wrapper-title">
        <h2>DETALHES DO PEDIDO</h2>
      </div>
      <div class="inner-wrapper-content">
        <div class="inner-wrapper-full">
          <br>
          <table class="border-table">
            <thead>
              <tr>
                <th class="border-table-text-left">Descrição do produto</th>
                <th>Unidades</th>
                <th>Preço</th>
                <th>Preço total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="border-table-text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                <td>2</td>
                <td>R$ 300,00</td>
                <td>R$1956,00</td>
              </tr>
              <tr>
                <td class="border-table-text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                <td>2</td>
                <td>R$ 300,00</td>
                <td>R$1956,00</td>
              </tr>
              <tr>
                <td class="border-table-text-right" colspan="3">Valor do frete SEDEX SIMPLES - Correios</td>
                <td class="small-td">R$1956,00</td>
              </tr>
              <tr>
                <td class="small-td" colspan="4">
                  <span class="pull-left marginl1p">Endereço para entrega</span><br>
                  <span class="pull-left marginl1p">Rua Nicolau Reinantt Cosenza, 112 14094-084 Ribeirão Preto - SP</span>
                </td>
              </tr>
              <tr>
                <td class="border-table-text-right" colspan="3">Valor Total</td>
                <td class="small-td">R$195698,00</td>
              </tr>

            </tbody>
          </table>

          <div class="back-button">
            <a class="btn btn-default" onclick="back();"><span>VOLTAR</span></a>
          </div>

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