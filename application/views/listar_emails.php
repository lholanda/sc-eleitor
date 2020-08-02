<h2 class="display-6 titulo text-center mt-0 mb-1">Campanha de Email</h2>
<!-- CONTEUDO -->
<!-- <div class="container"> -->
<div class="content p-1">
    <div class="list-group-item p-0">
        <nav class="navbar navbar-expand-md navbar-dark">
            
            <a href="<?php echo base_url() . 'emailsController/marcarTodosEmails' . "/" . $pagina?>">
                <div class="p-2">
                    <button class="btn sc-botao-acao-m">
                        MARCAR TODOS
                    </button>
                </div>
            </a>
            <a href="<?php echo base_url() . 'emailsController/desmarcarTodosEmails' . "/" . $pagina?>">
                <div class="p-2">
                    <button class="btn sc-botao-acao-m">
                        DESMARCAR TODOS
                    </button>
                </div>
            </a>

            <div class="col-sm-1 col-md-4 col-lg-7"></div>
            <a href="<?php echo base_url() . 'emailsController/editarMensagem'. "/" .$pagina ?>">
                <div class="pt-0">
                    <button class="btn sc-botao-acao-m mx-2">
                        COMPOR MENSAGEM
                    </button>
                </div>
            </a>


            <a class="btn btn sc-botao-acao-mt" href="<?php echo base_url() . 'emailsController/enviarEmail' . "/" .$pagina?>">
               <i class="fa fa-envelope-o mr-3" aria-hidden="true"></i>Enviar Email
            </a>
            


            

           
        </nav>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-sm ">
                <thead>
                    <tr>
                        <!-- <th class="text-center">Contador</th> -->
                        <th class="text-center">Id</th>
                        <th class="text-center">Nome</th>
                        <th class="text-right d-none d-sm-table-cell">Apelido</th>
                        <th class="text-right d-none d-sm-table-cell">Email</th>
                        <th class="text-right d-none d-sm-table-cell">Celular</th>
                        <th class="text-right d-none d-sm-table-cell">Cidade</th>
                        <th class="text-right d-none d-sm-table-cell">Bairro</th>
                        <th class="text-right d-none d-sm-table-cell">Data Cadastro</th>
                        <th class="text-right d-none d-sm-table-cell">Liderança ?</th>
                        <th class="text-right d-none d-sm-table-cell">Lista</th>
                        <th class="text-right">Envia Email ?</th>
                        <th class="text-center">Açoes</th>
                    </tr>
                </thead>
                <?php
                $contador = count($pessoas);
                foreach ($pessoas as $pessoa) : ?>
                    <tr>
                        <td> <?php echo $pessoa->peo_id ?></td>
                        <td> <?php echo $pessoa->peo_nome ?></td>
                        <td class="text-right d-none d-sm-table-cell"><?php echo $pessoa->peo_apelido ?></td>
                        <td class="text-right d-none d-sm-table-cell "><?php echo $pessoa->peo_email ?></td>
                        <td class="text-right d-none d-sm-table-cell"><?php echo $pessoa->peo_celular ?></td>
                        <td class="text-right d-none d-sm-table-cell"><?php echo $pessoa->peo_cidade ?></td>
                        <td class="text-right d-none d-sm-table-cell"><?php echo $pessoa->peo_bairro ?></td>
                        <td class="text-right d-none d-sm-table-cell"><?php echo date('d-m-Y', strtotime($pessoa->peo_data)) ?></td>
                        <td class="text-right d-none d-sm-table-cell"><?php echo $pessoa->peo_lideranca ?></td>
                        <td class="text-right d-none d-sm-table-cell"><?php echo $pessoa->peo_lista ?></td>
                        <td class="text-center <?php echo ($pessoa->peo_flag_email ? 'text-warning' : 'text-white-50') ?>">
                            <?php echo ($pessoa->peo_flag_email ? 'SIM' : 'não') ?>
                        </td>
                        <td class="text-center">
                            <span class="d-none d-md-block d-sm-block">
                                <a href="<?php echo base_url('emailsController/selecionar_email/') . $pessoa->peo_id . "/" . $pagina ?>" class="btn btn-outline-info btn-sm" title="Ativar cadastro">
                                    Selecionar para Email
                                </a>
                                </a>
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