<?php include('includes/header.php'); ?>
<div class="inner row">
  <div class="content">
    <?php include('includes/side-bar.php');?>
    <div class="inner-wrapper">
      <div class="inner-wrapper-title">
        <h2>PAGAMENTO</h2>
      </div>
      <div class="inner-wrapper-content">
        <div class="inner-wrapper-full">
          <div class="carrinho-pay-title carrinho-pay-title-first">
            <h3>Escolha um endereço para entrega</h3>
          </div>
          <table class="striped-table">
            <thead>
              <tr>
                <th class="xlarge-th">Endereço</th>
                <th class="small-th">Selecionar</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="xlarge-td">Rua Nicolau Reinantt Cosenza, 112 14094-084 Ribeirão Preto - SP</td>
                <td class="small-td"><input type="radio" name="name" value=""></td>
              </tr>
              <tr>
                <td class="xlarge-td">Rua Nicolau Reinantt Cosenza, 112 14094-084 Ribeirão Preto - SP</td>
                <td class="small-td"><input type="radio" name="name" value=""></td>
              </tr>

            </tbody>
          </table>
          <div class="carrinho-pay-title">
            <h3>Sua compra</h3>
          </div>

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
                <td class="border-table-text-right" colspan="3">Valor Total</td>
                <td class="small-td">R$195698,00</td>
              </tr>

            </tbody>
          </table>

          <div onclick="navto('carrinho_pagamento.php');" class="col-2-2 carrinho-pay-btn-continuar">
            <span>Efetuar pagamento</span>
            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
          </div>

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