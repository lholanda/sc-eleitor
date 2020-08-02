<h2 class="display-6 titulo-black text-center mt-1 mb-1">Campanhas de Email</h2>
<!-- inicio d-flex -->

<!-- CONTEUDO -->
<div class="content p-1">
  <div class="list-group-item">
    <!--Fim formulário de novo cadastro  -->
    <form action="<?php echo base_url() . 'emails' ?>" method="post">
      <div class="col-md-4">
        <label>Nome da Campanha</label>
        <input type="text" name="campanha" value="" class="form-control sc-input" required placeholder="Insira o nome da campanha">
      </div>
      <hr>

      <div class="col-md-8">
        <label>Título da Mensagem</label>
        <input type="text" name="titulo" value="" class="form-control sc-input" required placeholder="Insira o título da campanha">
      </div>
      <br>
      <div class="col-md-10">
        <label>Mensagem</label>
        <input type="text" name="mensagem" value="" class="form-control sc-input" required placeholder="Insira o mensagem da campanha"></textarea>
      </div>

      <div class="row mt-3 ml-4">
        <div class="col-md-2">
          <button type="submit" class="btn sc-botao-acao">Avançar</button>
        </div>
        <div class="col-md-2">
          <a href="<?php echo site_url('pessoas') ?>" class="btn sc-botao-voltar">
            Voltar
          </a>
        </div>
      </div>
    </form>

    

  </div>
</div>