<?php include('includes/header.php'); ?>
<div class="inner row contato">
  <div class="content">
    <?php include('includes/side-bar.php');?>
    <div class="inner-wrapper">
      <div class="inner-wrapper-title">
        <h2>CONTATO</h2>
      </div>
      <div class="inner-wrapper-content">
        <div class="contato-content">
          <div class="col-md-12">
            Preencha o formulário para enviar sua mensagem!
          </div>
          <div class="col-sm-7">
            <form class="form contato-form" method="post" action="">
              <input type="hidden" id="acao" name="acao" value="cadastrar"/>
              <label><input class="form-control" type="text" id="nome" name="nome" value="" maxlength="80" placeholder="Nome *" /></label>
              <label><input data-mask="telefone-9-digitos" class="form-control" type="text" id="telefone" name="telefone" placeholder="Telefone *" value="1636254278" /></label>
              <label><input class="form-control" type="text" id="email" name="email" value="" maxlength="80" placeholder="E-mail *" /></label>
              <label><textarea class="form-control" id="mensagem" name="mensagem" value="" placeholder="Mensagem"></textarea></label>
              <br>
              <label>Upload de arquivos</label>
              <label class="input-file-control" for="upload-arquivo">
                <input name="qualquer-name-1" id="upload-arquivo" type="file" class="outline">
                <span class="btn btn-primary">
                  <i class="fa fa-cloud-upload"></i>
                  <span>SELECIONAR</span>
                </span>
                <span class="info">Formatos: .PNG, .JPG, .TECLABS (max.: 15MB)</span>
              </label>
              <label class="input-file-control" for="upload-arquivo-2">
                <input name="qualquer-name-2" id="upload-arquivo-2" type="file" class="outline">
                <span class="btn btn-primary">
                  <i class="fa fa-cloud-upload"></i>
                  <span>SELECIONAR</span>
                </span>
                <span class="info">Formatos: .MP3, .WMV, .VOB (max.: 900TB)</span>
              </label>

              <label>Exemplo de máscaras</label>
              <label><input data-mask="telefone-9-digitos" class="form-control" type="text" placeholder="(00) 0 0000-0000 ou (00) 0000-0000" value="(16) 9 93635-3342" /></label>
              <label><input data-mask="telefone-simples" class="form-control" type="text" placeholder="(00) 0000-0000" value="1632165487"/></label>
              <label><input data-mask="cpf-cnpj" class="form-control" type="text" placeholder="000.000.000-000 ou 00.000.000/0000-00" value="111.111.111-111"/></label>
              <label><input data-mask="cep" class="form-control" type="text" placeholder="00000-000"/></label>
              <label>Valor monetário</label>
              <label><input data-format="brl" class="form-control" type="text" placeholder="R$ 0,00" /></label>
              <label><input data-format="us" class="form-control" type="text" placeholder="$ 0,00" value="$ 50,00" /></label>
              <label>Máscara Personalizada (pode criar qualquer uma seguindo o formato dos exemplos)</label>
              <label><input data-my-mask="0-0-0-00-0000" class="form-control" type="text" placeholder="0-0-0-00-0000" /></label>
              <label><input data-my-mask="000.000.000" class="form-control" type="text" placeholder="000.000.000" /></label>
              <label><input data-my-mask="AAA A000-A0A" class="form-control" type="text" placeholder="AAA A000-A0A" /></label>
              <label><input data-my-mask="00/00/0000" class="form-control" type="text" placeholder="00/00/0000" value="11092011"/></label>
              <label><input data-my-mask="00/00/0000" class="form-control" type="text" placeholder="00/00/0000" value="11/09/2011"/></label>
              <div class="form-submit"><input class="btn btn-primary" type="submit" name="button" value="ENVIAR" /></div>
            </form>
          </div>
          <div class="col-sm-5">
            <h2 class="title">
              Central de<br>
              Atendimento ao<br>
              Cliente
            </h2>
            <h3 class="contato-info-title"><span class="glyphicon glyphicon-phone"></span> Telefones</h3>
                  <div class="contato-infos">
                      <abbr title="Telefone para contato">Tel:</abbr>
                      (11) 2338-5403
                      <br>
                      <abbr title="Telefone para contato">Tel:</abbr>
                      (11) 2338-5403
                      <br>
                      <abbr title="Telefone para contato">Tel:</abbr>
                      (11) 2338-5403
                      <br>
                  </div>
                  <div class="contato-infos">
                      <strong>Contato</strong><br>
                      <p>contato@nomedaempresa.com.br</p>
                  </div>
          </div>

          <div class="back-button marginl1p margint25px">
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
