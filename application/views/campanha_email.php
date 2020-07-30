<h2 class="display-6 titulo-black text-center mt-1 mb-1">Campanhas de Email</h2>
<!-- inicio d-flex -->
<div class="container">
  <!-- CONTEUDO -->
  <div class="content p-1">
    <div class="list-group-item">
      <div class="container">

        <!--Fim formulário de novo cadastro  -->
        <form action="<?php echo base_url() . 'emails' ?>" method="post">
          <div class="col-md-4">
            <label>Nome da Campanha</label>
            <input type="text" name="campanha" value="" class="form-control sc-input" required placeholder="Insira o nome da campanha">
          </div><br>
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
      </div>



    <div class="row">
      <div class="col-md-2">
        <button type="submit" class="btn sc-botao-enviarEmail" >Avançar</button>
      </div>
      <div class="col-md-2">
        <a class="btn sc-botao-voltar" href="<?php echo base_url() ?>pessoas">Voltar</a>

      </div>
    </div><!-- fim do button submit(enviar) formulário -->



    </form>
  </div> <!-- final d-flex -->
</div> <!-- FINAL de conteúdo -->