
<br>
<h2 class="display-6 titulo text-center">Cadastro</h2>
<br>
<!-- CONTEUDO -->
<div class="content p-1">
    <div class="list-group-item">
        <!-- inicio d-flex -->
        <div class="d-flex">
            <!-- <div class="mr-auto p-0">
                    </div> -->
            <a href="#">
                <div class="p-2 sc-pesquisar-campos">
                    <label class="sc-pesquisar">Pesquisar por</label><i class="fa fa-search sc-icon-pesquisar" aria-hidden="true"></i>
                    <select name="busca" class="form-control sc-input-pesquisar">
                      <option value=""></option>
                      <option value="">Relatório</option>
                      <option value="">Liderança</option>
                      <option value="">Nome</option>
                      <option value="">Celular</option>
                      <option value="">Bairro</option>
                      <option value="">Ativos</option>
                    </select>
                  </div>
            </a>
            <a href="#" class="">
                <div class="p-2 ml-5">
                    <button class="btn btn-info">
                        <!--<?php echo $qtd_reg?> -->
                    </button>
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
        <div class="container">
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
            
            <!-- PAGINATOR -->
            <!--<div class="text-center" <?php echo ($qtde_paginas > 1) ? "" : "style='display: none;'" ?>>
                <?php echo $paginator ?>
            </div>-->
            <!-- END PAGINATOR -->


           
        </div><!-- final d-flex -->
    </div>
</div> <!-- FINAL de conteúdo -->

