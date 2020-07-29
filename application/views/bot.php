<!-- inicio d-flex -->
<div class="container text-center">
  <h2 class="display-6 titulo-black">BOTs</h2>
  <!-- CONTEUDO -->
  <div class="content p-1">
    <div class="list-group-item  text-center">
      
        <!-- Button submit(enviar) formulário -->
        <br />

        <?php $whatsAppPhone = $this->config->item('whatsAppPhone') ?>

        <div class="row">
          <div class="container text-center">
            <a href="https://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsAppPhone ?>" target="_blank"><button type="submit" class="btn sc-botao-whats">
              <i class="fa fa-phone" aria-hidden="true"></i>Whatts Web</button></a>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="container text-center">
            <a href="<?php echo base_url().'bot_email'?>?>"><button type="submit" class="btn sc-botao-email">
              <i class="fa fa-envelope" aria-hidden="true"></i>Enviar Email</button></a>
          </div>
        </div>
        <br><!-- fim do button submit(enviar) formulário -->


        </form>
        <!--Fim formulário de novo cadastro  -->

 
    </div> <!-- final d-flex -->
  </div> <!-- FINAL de conteúdo -->
</div>