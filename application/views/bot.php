
<!-- inicio d-flex -->

  

<h2 class="display-6 titulo text-center mt-1 mb-1">WhatsApp</h2>
<div class="container  text-center">
  <h2 class="display-6 titulo-black mt-1 mb-1"></h2>
  <!-- CONTEUDO -->
  <div class="content p-1">
    <div class="list-group-item">
      <div class="container">
      <div class="container">
    <!-- CONTEUDO -->
    <div class="content p-1">
      <div class="list-group-item  text-center">

        <!-- Button submit(enviar) formulário -->
        <br />

        <?php $whatsAppPhone = $this->config->item('whatsAppPhone') ?>

        <div class="row">
          <div class="container text-center">
            <a href="https://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsAppPhone ?>" target="_blank">
              <button type="submit" class="btn sc-botao-acao-g">
                <i class="fa fa-phone" aria-hidden="true"></i>WhatsApp Web</button></a>
          </div>
        </div>
        <br>
        <br><!-- fim do button submit(enviar) formulário -->


        </form>
        <!--Fim formulário de novo cadastro  -->


      </div> <!-- final d-flex -->
    </div> <!-- FINAL de conteúdo -->
  </div>



      </div>
    </div><!-- final d-flex -->

  </div> <!-- FINAL de conteúdo -->

