

<h2 class="display-6 titulo text-center mt-1 mb-1">Relatórios</h2>

<!-- CONTEUDO -->
<div class="content p-1">
    <div class="list-group-item">
        <!-- inicio d-flex -->
        <div class="d-flex">
            <!-- <div class="mr-auto p-0">
                    </div> -->
            <a href="#">
                <div class="row">
                <div class="p-2 sc-pesquisar-campos ml-2">
                    <label class="sc-pesquisar">Pesquisar por Liderança</label><i class="fa fa-search sc-icon-pesquisar" aria-hidden="true"></i>
                    <input type="text" name="pesquisaLideranca" class="form-control sc-input mb-2" placeholder="Insira a Liderança">
                    <button class="btn sc-pesquisa-lideranca">Pesquisar</button>
                  </div>
                  <div class="p-2 sc-pesquisar-campos ml-4">
                    <label class="sc-pesquisar">Pesquisar por Bairro</label><i class="fa fa-search sc-icon-pesquisar" aria-hidden="true"></i>
                    <input type="text" name="pesquisaBairro" class="form-control sc-input mb-2" placeholder="Insira o Bairro">
                    <button class="btn sc-pesquisa-bairro">Pesquisar</button>
                  </div>
                  <div class="p-2 sc-pesquisar-campos ml-4">
                    <label class="sc-pesquisar">Pesquisar por Nome</label><i class="fa fa-search sc-icon-pesquisar" aria-hidden="true"></i>
                    <input type="text" name="pesquisaNome" class="form-control sc-input mb-2" placeholder="Insira o Nome">
                    <button class="btn sc-pesquisa-nome">Pesquisar</button>
                  </div>

                  <div class="p-2 sc-pesquisar-campos ml-4">
                    <label class="sc-pesquisar">Pesquisar por Celular</label><i class="fa fa-search sc-icon-pesquisar" aria-hidden="true"></i>
                    <input type="text" name="pesquisaCelular" class="form-control sc-input mb-2" placeholder="Insira o Celular">
                    <button class="btn sc-pesquisa-celular">Pesquisar</button>
                  </div>
</div>  
            </a>
        </div>
        <!-- area reservada para alert -->
        <div class="alert alert-success text-left" role="alert" hidden>
            Usuário excluído com sucesso !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- area reservada para alert -->
        <hr>
        <!-- <div class="container"> -->
            <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <!-- <th class="text-center">Contador</th> -->
                        <th class="text-center">Id</th>
                        <th class="text-center">Nome</th>
                        <th class="text-right">Apelido</th>
                        <th class="text-right">Data Cadastro</th>
                        <th class="text-right">Ativo ?</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <!--<?php
                $contador = count($pessoas);
                foreach ($pessoas as $pessoa) : ?>-->
                    <!--<tr>
                        <td> <?php echo $pessoa->peo_id ?></td>
                        <td> <?php echo $pessoa->peo_nome ?></td>
                        <td class="text-right"><?php  echo $pessoa->peo_apelido ?></td>
                        <td class="text-right"><?php  echo date('d-m-Y', strtotime($pessoa->peo_data)) ?></td>
                        <td class="text-center"><?php echo ($pessoa->peo_ativo ? 'Sim' : 'não') ?> </td>-->
                        <td class="text-center">
                            <span class="d-none d-md-block">
                                <a href="#" class="btn sc-botao-editar" title="Editar cadastro">
                                    Editar
                                </a>
                                <!--<a href="<?php echo base_url('pessoas/apagar/') . $pessoa->peo_id ?>" class="btn btn-outline-danger btn-sm" data-toggle="modal000" data-target="#apagarRegistro" title="Apagar cadastro">
                                    Excluir
                                </a>-->
                            </span>
                        </td>
                    </tr>
                    <!--<?php
                    # $contador--;
                endforeach; ?>-->
            </table>
            <button class="btn sc-botao-voltar mt-4">Voltar</button>
            
            <!-- PAGINATOR -->
            <!--<div class="text-center" <?php echo ($qtde_paginas > 1) ? "" : "style='display: none;'" ?>>
                <?php echo $paginator ?>
            </div>-->
            <!-- END PAGINATOR -->


           
        <!-- </div> -->
    </div>
</div> <!-- FINAL de conteúdo -->

