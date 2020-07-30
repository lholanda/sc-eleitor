<!-- inicio d-flex -->
<h2 class="display-6 titulo text-center">Novo Cadastro</h2>
<div class="container">
  <!-- CONTEUDO -->
  <div class="content p-1">
    <div class="list-group-item">
      <div class="container">
        <!-- Formulário de novo cadastro  -->
        <form action="<?php echo base_url() ?>pessoas/salvar" name="form_add" method="post">
          <!-- Input text nome do produtos -->
          <div class="row">

            <div class="col-md-5 mt-2">
              <label>Nome</label>
              <input type="text" name="nome" value="" class="form-control sc-input" placeholder="Insira o Nome">
            </div>
            <div class="col-md-3 mt-2">
              <label>Apelido</label>
              <input type="text" name="apelido" value="" class="form-control sc-input" placeholder="Insira o Apelido">
            </div>

            <div class="col-md-4 mt-2">
              <label>Liderança</label>
              <input type="text" name="lideranca" value="" class="form-control sc-input" placeholder="Insira a Liderança">
            </div>
          </div> <!-- fim input text nome produtos -->

          <div class="row">
            <div class="col-md-4 mt-2">
              <label>CPF</label>
              <input type="text" name="cpf" value="" class="form-control sc-input" placeholder="Insira o CPF">
            </div>
            <div class="col-md-1 hidden"></div>

            <div class="col-md-3 mt-2">
              <label>RG</label>
              <input type="text" name="rg" value="" class="form-control sc-input" placeholder="Insira o RG">
            </div>

            <div class="col-md-4 mt-2">
              <label>Data Nascimento</label>
              <input type="date" name="nascimento" value="" class="form-control sc-input" placeholder="Insira a Data de Nascimento">
            </div>
          </div> <!-- fim input text nome produtos -->

 
          <div class="row">
            <div class="col-md-4 mt-2">
              <label>Email</label>
              <input type="text" name="email" value="" class="form-control sc-input" placeholder="Insira o Email">
            </div>

            <div class="col-md-1 hidden"></div>

            <div class="col-md-3 mt-2">
              <label>Telefone</label>
              <input type="text" name="telefone" value="" class="form-control sc-input" placeholder="Insira o Telefone">
            </div>

            <div class="col-md-4 mt-2">
              <label>Celular</label>
              <input type="text" name="celular" value="" class="form-control sc-input" placeholder="Insira o Celular">
            </div>
          </div> <!-- fim input text nome produtos -->

 
          <div class="row">
            <div class="col-md-4">
              <label>Titulo Eleitoral</label>
              <input type="text" name="titulo_eleitoral" value="" class="form-control sc-input" placeholder="Insira o Título Eleitoral">
            </div>
            <div class="col-md-1 hidden"></div>

            <div class="col-md-3">
              <label>Seção Eleitoral</label>
              <input type="text" name="secao_eleitoral" value="" class="form-control sc-input" placeholder="Insira a Seção Eleitoral">
            </div>

            <div class="col-md-4">
              <label>Zona Eleitoral</label>
              <input type="text" name="zona_eleitoral" value="" class="form-control sc-input" placeholder="Insira a Zona Eleitoral">
            </div>
          </div> <!-- fim input text nome produtos -->

         

          <!-- Input text preço do produtos -->
          <div class="row">
            <div class="col-md-8">
              <label>Endereço</label>
              <input type="text" name="endereco" value="" class="form-control sc-input" placeholder="Insira o Endereço">
            </div>
            <div class="col-md-4">
              <label>Complemento</label>
              <input type="text" name="complemento" value="" class="form-control sc-input" placeholder="Insira o Complemento">
            </div>
          </div><!-- fim input text preco produtos -->

 
          <!-- Input text preço do produtos -->
          <div class="row">
            <div class="col-md-4 mt-2">
              <label>Cidade</label>
              <input type="text" name="cidade" value="" class="form-control sc-input" placeholder="Insira a Cidade">
            </div>
            <div class="col-md-4 mt-2">
              <label>Bairro</label>
              <input type="text" name="bairro" value="" class="form-control sc-input" placeholder="Insira o Bairro">
            </div>
            <div class="col-md-4 mt-2">
              <label>Profissao</label>
              <input type="text" name="trabalho" value="" class="form-control sc-input" placeholder="Insira o Profissão">
            </div>
            
          </div><!-- fim input text preco produtos -->

 
          

 
          <div class="row">
            <div class="col-md-4 mt-2">
              <label>Atendimento</label>
              <input type="text" name="atendimento" value="" class="form-control sc-input" placeholder="Insira o Atendimento">
            </div>
            <div class="col-md-4 mt-2">
              <label>Visita</label>
              <input type="text" name="visita" value="" class="form-control sc-input" placeholder="Insira a Visita">
            </div>
            <div class="col-md-4 mt-2">
              <label>Saúde</label>
              <input type="text" name="saude" value="" class="form-control sc-input" placeholder="Insira o Estado de Saúde">
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 mt-2">
              <label>Comentário Adicional</label>
              <input type="text" name="comentarios" value="" class="form-control sc-input" placeholder="Comentários">
            </div>
            
    
    
              <div class="col-md-2 mt-2">
                <label>Lista</label>
                <select name="lista" class="form-control sc-input">
                  <option value="1">lista #1</option>
                  <option value="2">lista #2</option>
                  <option value="3">lista #3</option>
                  <option value="4">lista #4</option>
                  <option value="5">lista #5</option>
                </select>
  
            </div><!-- fim select produtos ativo ou inativo -->



            <!-- Select produtos ativo ou inativo -->
     
              <div class="col-md-2 mt-2">
                <label>Cadastro Ativo ?</label>
                <select name="ativo" class="form-control sc-input">
                  <option value="1">Sim</option>
                  <option value="0">Não</option>
                </select>
  
            </div><!-- fim select produtos ativo ou inativo -->
          </div>

          <div class="row">
             <hr>
          </div>

          <!-- Button submit(enviar) formulário -->
 
          <div class="row">
            <div class="col-md-2">
              <button type="submit" class="btn sc-botao-cadastrar" onclick="return validar()">Cadastrar</button>
            </div>
            <div class="col-md-2">
              <a class="btn sc-botao-voltar" href="<?php echo base_url() ?>pessoas">Voltar</a>

            </div>
          </div><!-- fim do button submit(enviar) formulário -->
        </form>
        <!--Fim formulário de novo cadastro  -->
      </div>
    </div> <!-- final d-flex -->
  </div> <!-- FINAL de conteúdo -->

  <script language="javascript" type="text/javascript">
          function validar() {
            var nome = form_add.nome.value;
            var apelido = form_add.apelido.value;
            var lideranca = form_add.lideranca.value;
            var cpf = form_add.cpf.value;
            var rg = form_add.rg.value;
            var nascimento = form_add.nascimento.value;
            var email = form_add.email.value;
            var telefone = form_add.telefone.value;
            var celular = form_add.celular.value;
            var titulo_eleitoral = form_add.titulo_eleitoral.value;
            var secao_eleitoral = form_add.secao_eleitoral.value;
            var zona_eleitoral = form_add.zona_eleitoral.value;
            var endereco = form_add.endereco.value;
            var cidade = form_add.endereco.value;
            var bairro = form_add.bairro.value;
            var complemento = form_add.complemento.value;
            var trabalho = form_add.trabalho.value;
            var atendimento = form_add.atendimento.value;
            var visita = form_add.visita.value;
            var saude = form_add.saude.value;
            var comentarios = form_add.comentarios.value;
            var lista = form_add.lista.value;

            if (nome == "") {
              alert('Preencha o campo Nome');
              form_add.nome.focus;
              return false;
            }

            if (apelido == "") {
              alert('Preencha o campo Apelido');
              form_add.nome.focus;
              return false;
            }

            if (lideranca == "") {
              alert('Preencha o campo Liderança');
              form_add.lideranca.focus;
              return false;
            }

            if (cpf == "") {
              alert('Preencha o campo CPF');
              form_add.cpf.focus;
              return false;
            }

            if (rg == "") {
              alert('Preencha o campo RG');
              form_add.rg.focus;
              return false;
            }

            if (nascimento == "") {
              alert('Preencha o campo Data de Nascimento');
              form_add.nascimento.focus;
              return false;
            }

            if (email == "") {
              alert('Preencha o campo Email');
              form_add.email.focus;
              return false;
            }

            if (email.indexOf('@') == -1) {
              alert('Email incorreto');
              form_add.email.focus;
              return false;
            }

            if (telefone == "") {
              alert('Preencha o campo Telefone');
              form_add.telefone.focus;
              return false;
            }

            if (celular == "") {
              alert('Preencha o campo Celular');
              form_add.celular.focus;
              return false;
            }

            if (titulo_eleitoral == "") {
              alert('Preencha o campo Título Eleitoral');
              form_add.titulo_eleitoral.focus;
              return false;
            }

            if (secao_eleitoral == "") {
              alert('Preencha o campo Seção Eleitoral');
              form_add.secao_eleitoral.focus;
              return false;
            }

            if (zona_eleitoral == "") {
              alert('Preencha o campo Zona Eleitoral');
              form_add.rg.focus;
              return false;
            }

            if (endereco == "") {
              alert('Preencha o campo Endereço');
              form_add.endereco.focus;
              return false;
            }

            if (cidade == "") {
              alert('Preencha o campo Cidade');
              form_add.cidade.focus;
              return false;
            }

            if (bairro == "") {
              alert('Preencha o campo Bairro');
              form_add.bairro.focus;
              return false;
            }

            if (complemento == "") {
              alert('Preencha o campo Complemento');
              form_add.complemento.focus;
              return false;
            }

            if (trabalho == "") {
              alert('Preencha o campo Profissão');
              form_add.trabalho.focus;
              return false;
            }

            if (atendimento == "") {
              alert('Preencha o campo Atendimento');
              form_add.atendimento.focus;
              return false;
            }

            if (visita == "") {
              alert('Preencha o campo Visita');
              form_add.visita.focus;
              return false;
            }

            if (saude == "") {
              alert('Preencha o campo Saúde');
              form_add.saude.focus;
              return false;
            }

            if (comentarios == "") {
              alert('Preencha o campo Comentário');
              form_add.comentarios.focus;
              return false;
            }

            if (lista == "") {
              alert('Preencha o campo Lista');
              form_add.lista.focus;
              return false;
            }
          }
        </script>