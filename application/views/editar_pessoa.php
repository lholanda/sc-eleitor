<!-- inicio d-flex -->
<div class="container">

  <h2 class="display-6 titulo text-center">Atualizar Cadastro</h2>
  <!-- CONTEUDO -->
  <div class="content p-1">
    <div class="list-group-item">
      <div class="container">

        <!-- Formulário de novo cadastro  -->
        <form action="<?php echo base_url() ?>pessoas/salvar" name="form_edit" method="post">
          <!-- Input text nome do produtos -->
          <div class="row">
            <div class="col-md-4">
              <label>Nome</label>
              <input type="text" name="nome" value="<?php echo $nome ?>" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Apelido</label>
              <input type="text" name="apelido" value="<?php echo $apelido ?>" class="form-control">
            </div>

            <div class="col-md-4">
              <label>Liderança</label>
              <input type="text" name="lideranca" value="<?php echo $lideranca ?>" class="form-control">
            </div>
          </div> <!-- fim input text nome produtos -->

          <div class="row">
            <div class="col-md-4">
              <label>Cpf</label>
              <input type="text" name="cpf" value="<?php echo $cpf ?>" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Rg</label>
              <input type="text" name="rg" value="<?php echo $rg ?>" class="form-control">
            </div>

            <div class="col-md-4">
              <label>Data Nascimento</label>
              <input type="date" name="nascimento" value="<?php echo $nascimento ?>" class="form-control">
            </div>
          </div> <!-- fim input text nome produtos -->

          <div class="row">
            <div class="col-md-4">
              <label>Email</label>
              <input type="text" name="email" value="<?php echo $email ?>" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Telefone</label>
              <input type="text" name="telefone" value="<?php echo $telefone ?>" class="form-control">
            </div>

            <div class="col-md-4">
              <label>Celular</label>
              <input type="text" name="celular" value="<?php echo $celular ?>" class="form-control">
            </div>
          </div> <!-- fim input text nome produtos -->

          <div class="row">
            <div class="col-md-4">
              <label>Titulo Eleitoral</label>
              <input type="text" name="titulo_eleitoral" value="<?php echo $titulo_eleitoral ?>" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Seção Eleitoral</label>
              <input type="text" name="secao_eleitoral" value="<?php echo $secao_eleitoral ?>" class="form-control">
            </div>

            <div class="col-md-4">
              <label>Zona Eleitoral</label>
              <input type="text" name="zona_eleitoral" value="<?php echo $zona_eleitoral ?>" class="form-control">
            </div>
          </div> <!-- fim input text nome produtos -->

          <!-- Input text preço do produtos -->
          <div class="row">
            <div class="col-md-8">
              <label>Endereço</label>
              <input type="text" name="endereco" value="<?php echo $endereco ?>" class="form-control">
            </div>
          </div><!-- fim input text preco produtos -->

          <!-- Input text preço do produtos -->
          <div class="row">
            <div class="col-md-4">
              <label>Cidade</label>
              <input type="text" name="cidade" value="<?php echo $cidade ?>" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Bairro</label>
              <input type="text" name="bairro" value="<?php echo $bairro ?>" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Complemento</label>
              <input type="text" name="complemento" value="<?php echo $complemento ?>" class="form-control">
            </div>
          </div><!-- fim input text preco produtos -->
          <!-- Select produtos ativo ou inativo -->
          <div class="row">
            <div class="col-md-4">
              <label>Profissao</label>
              <input type="text" name="trabalho" value="<?php echo $trabalho ?>" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Cadastro Ativo ?</label>
              <select name="ativo" class="form-control" value="<?php echo $ativo ?> ">
                <option value="1" <?php echo ($ativo == "1" ? "selected" : "") ?> >Sim</option>
                <option value="0" <?php echo ($ativo == "0" ? "selected" : "") ?> ?>">Não</option>
              </select>
            </div>
          </div><!-- fim select produtos ativo ou inativo -->

          <div class="row">
            <div class="col-md-4">
              <label>Atendimento</label>
              <input type="text" name="atendimento" value="<?php echo $atendimento ?> " class="form-control sc-input" placeholder="Insira o Atendimento">
            </div>
            <div class="col-md-4">
              <label>Visita</label>
              <input type="text" name="visita" value="<?php echo $visita ?> " class="form-control sc-input" placeholder="Insira a Visita">
            </div>
            <div class="col-md-4">
              <label>Saúde</label>
              <input type="text" name="saude" value="<?php echo $saude ?>" class="form-control sc-input" placeholder="Insira o Estado de Saúde">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Comentário Adicional</label>
              <textarea name="comentarios" class="sc-textarea" placeholder="Comentários"></textarea>
            </div>
          </div>

          <!-- Button submit(enviar) formulário -->
          <br>
          <div class="row">
            <div class="col-md-1">
              <a href="<?php echo site_url('pessoas') ?>" class="btn btn-info">
                Voltar
              </a>
            </div>
            <div class="ml-4">
              <input type="hidden" name="id" value="<?php echo $id?>">
              <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
          </div>
      </div><!-- fim do button submit(enviar) formulário -->
      </form>
      <!--Fim formulário de novo cadastro  -->

      <script language="javascript" type="text/javascript">
            function validar(){
              var nome = form_edit.nome.value;
              var email = form_add.email.value;

              if(nome == ""){
                alert('Preencha o campo Nome');
                form_add.nome.focus;
                return false;
              }
        
              if(email == ""){
                alert('Preencha o campo Email');
                form_add.email.focus;
                return false;
              }

              if(email.indexOf('@') == -1){
                alert('Email incorreto');
                form_add.email.focus;
                return false;
              }
            }
          </script>

    </div>
  </div><!-- final d-flex -->

</div> <!-- FINAL de conteúdo -->