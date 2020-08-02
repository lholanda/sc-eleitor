<h2 class="display-6 titulo text-center mt-1 mb-1">Cadastro</h2>
<!-- CONTEUDO -->
<!-- <div class="container"> -->
<div class="content p-1">
    <div class="list-group-item">

        <nav class="navbar navbar-expand-md navbar-dark">
            <a href="<?php echo base_url() . 'pessoas/add' ?>">
                    <div class="p-2">
                        <button class="btn sc-botao-acao-m">
                            NOVO CADASTRO
                        </button>
                    </div>
            </a>   
         
            <div class="col-md-10"></div>
            <button class="btn text-warning"><?php echo $qtd_reg ?> cadastros</button>
        </nav>

        <!-- area reservada para alert -->
        <div class="alert alert-success text-left" role="alert" hidden>
            Usuário excluído com sucesso !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- area reservada para alert -->
        <div class="">
            <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <!-- <th class="text-center">Contador</th> -->
                        <th class="text-center">Id</th>
                        <th class="text-center">Nome</th>
                        <th class="text-right">Apelido</th>
                        <th class="text-right">Email</th>
                        <th class="text-right">Celular</th>
                        <th class="text-right">Cidade</th>
                        <th class="text-right">Bairro</th>
                        <th class="text-right">Data Cadastro</th>
                        <th class="text-right">Liderança</th>
                        <th class="text-right">Ativo ?</th>
                        <th class="text-center">Açoes</th>
                    </tr>
                </thead>
                <?php
                $contador = count($pessoas);
                foreach ($pessoas as $pessoa) : ?>
                    <tr>
                        <td> <?php echo $pessoa->peo_id ?></td>
                        <td> <?php echo $pessoa->peo_nome ?></td>
                        <td class="text-right"><?php echo $pessoa->peo_apelido ?></td>
                        <td class="text-right"><?php echo $pessoa->peo_email ?></td>
                        <td class="text-right"><?php echo $pessoa->peo_celular ?></td>
                        <td class="text-right"><?php echo $pessoa->peo_cidade ?></td>
                        <td class="text-right"><?php echo $pessoa->peo_bairro ?></td>
                        <td class="text-right"><?php echo date('d-m-Y', strtotime($pessoa->peo_data)) ?></td>
                        <td class="text-right"><?php echo $pessoa->peo_lideranca ?></td>
                        <td class="text-center <?php echo ($pessoa->peo_ativo ? 'text-warning' : 'text-white-50')?>" >
                                <?php echo ($pessoa->peo_ativo? 'SIM' : 'não') ?> 
                        </td>
                        <td class="text-center">
                            <span class="d-none d-md-block">
                                <a href="<?php echo base_url('pessoas/ativar/') . $pessoa->peo_id  . "/" . $pagina ?>" class="btn btn-outline-info btn-sm" title="Ativar cadastro">
                                    Ativar
                                </a>
                                <a href="<?php echo base_url('pessoas/editar/') . $pessoa->peo_id ?>" class="btn btn-outline-warning btn-sm" title="Editar cadastro">
                                    Editar
                                </a>
                                <!--<a href="<?php echo base_url('pessoas/apagar/') . $pessoa->peo_id ?>" class="btn btn-outline-danger btn-sm" data-toggle="modal000" data-target="#apagarRegistro" title="Apagar cadastro">
                                    Excluir
                                </a>-->
                            </span>
                        </td>
                    </tr>
                <?php
                # $contador--;
                endforeach; ?>
            </table>

            <!-- PAGINATOR -->
            <div class="text-center" <?php echo ($qtde_paginas > 1) ? "" : "style='display: none;'" ?>>
                <?php echo $paginator ?>
            </div>
            <!-- END PAGINATOR -->



        </div><!-- final d-flex -->
    </div>
</div> <!-- FINAL de conteúdo -->
<!-- </div> -->