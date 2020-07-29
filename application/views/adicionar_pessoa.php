

<!-- inicio d-flex -->
<div class="container">


<h2 class="display-6 titulo text-center">Novo Cadastro</h2>
<!-- CONTEUDO -->
<div class="content p-1">
    <div class="list-group-item">
        <!-- 
          <div class="d-flex">
            <div class="mr-auto p-0">

            </div>
             <a href="/pSysConecteCrud">
                <div class="p-2">
                    <button class="btn btn-outline-info">
                        inicio
                    </button>
                    
                </div>
            </a>
            <div class="p-2">
            <button class="btn btn-outline-success">
                        NOVO
            </button>
            </div>
          </div> 
          <hr>
        -->
        <div class="container">

         <!-- Formulário de novo cadastro  -->
        <form action="<?php  echo base_url() ?>pessoas/salvar" name="form_add" method="post">
          <!-- Input text nome do produtos -->
          <div class="row">
            <div class="col-md-5">
              <label>Nome</label>
              <input type="text" name="nome" value="" class="form-control">
            </div>
            <div class="col-md-2">
              <label>Apelido</label>
              <input type="text" name="apelido" value="" class="form-control">
            </div>

            <div class="col-md-5">
              <label>Liderança</label>
              <input type="text" name="lideranca" value="" class="form-control">
            </div>
          </div> <!-- fim input text nome produtos -->
          
          <div class="row">
            <div class="col-md-4">
              <label>Cpf</label>
              <input type="text" name="cpf" value="" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Rg</label>
              <input type="text" name="rg" value="" class="form-control">
            </div>

            <div class="col-md-4">
              <label>Data Nascimento</label>
              <input type="date" name="nascimento" value="" class="form-control">
            </div>
          </div> <!-- fim input text nome produtos -->
          
          <div class="row">
            <div class="col-md-4">
              <label>Email</label>
              <input type="text" name="email" value="" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Telefone</label>
              <input type="text" name="telefone" value="" class="form-control">
            </div>

            <div class="col-md-4">
              <label>Celular</label>
              <input type="text" name="celular" value="" class="form-control">
            </div>
          </div> <!-- fim input text nome produtos -->
          
          <div class="row">
            <div class="col-md-4">
              <label>Titulo Eleitoral</label>
              <input type="text" name="titulo_eleitoral" value="" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Seção Eleitoral</label>
              <input type="text" name="secao_eleitoral" value="" class="form-control">
            </div>

            <div class="col-md-4">
              <label>Zona Eleitoral</label>
              <input type="text" name="zona_eleitoral" value="" class="form-control">
            </div>
          </div> <!-- fim input text nome produtos -->

          <!-- Input text preço do produtos -->
          <div class="row">
            <div class="col-md-8">
              <label>Endereço</label>
              <input type="text" name="endereco" value="" class="form-control">
            </div>
          </div><!-- fim input text preco produtos -->

          <!-- Input text preço do produtos -->
          <div class="row">
            <div class="col-md-4">
              <label>Cidade</label>
              <input type="text" name="cidade" value="" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Bairro</label>
              <input type="text" name="bairro" value="" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Complemento</label>
              <input type="text" name="complemento" value="" class="form-control">
            </div>
          </div><!-- fim input text preco produtos -->
          <!-- Select produtos ativo ou inativo -->
          <div class="row">
            <div class="col-md-4">
                <label>Profissao</label>
                <input type="text" name="trabalho" value="" class="form-control">
            </div>
            <div class="col-md-2">
              <label>Cadastro Ativo ?</label>
              <select name="ativo" class="form-control">
                <option value="1">Sim</option>
                <option value="0">Não</option>
              </select>
            </div>
          </div><!-- fim select produtos ativo ou inativo -->

          <div class="row">
            <div class="col-md-4">
              <label>Atendimento</label>
              <input type="text" name="atendimento" value="" class="form-control sc-input" placeholder="Insira o Atendimento">
            </div>
            <div class="col-md-4">
              <label>Visita</label>
              <input type="text" name="visita" value="" class="form-control sc-input" placeholder="Insira a Visita">
            </div>
            <div class="col-md-4">
              <label>Saúde</label>
              <input type="text" name="saude" value="" class="form-control sc-input" placeholder="Insira o Estado de Saúde">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Comentário Adicional</label>
              <textarea name="comentarios" class="sc-textarea" placeholder="Comentários"></textarea>
            </div>
          </div>

          <!-- Button submit(enviar) formulário -->
          <br />
          <div class="row">
            <div class="col-md-2">
              <button type="submit" class="btn btn-primary" onclick="return validar()">Cadastrar</button>
            </div>
            <div class="col-md-2">
              <a class="btn btn-secondary" href="<?php echo base_url() ?>pessoas">Voltar</a>
              
            </div>
          </div><!-- fim do button submit(enviar) formulário -->
          

        </form><!--Fim formulário de novo cadastro  -->  




        <script language="javascript" type="text/javascript">
            function validar(){
              var nome = form_add.nome.value;
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
    </div> <!-- final d-flex -->
</div> <!-- FINAL de conteúdo -->
