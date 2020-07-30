<h2 class="display-6 titulo text-center">Campanha de Emails</h2>
<!-- CONTEUDO -->
<div class="content p-1">
    <div class="list-group-item">
        <!-- inicio d-flex -->
        <div class="d-flex">
            <!-- <div class="mr-auto p-0">
                    </div> -->

            <div class="list-group-item">
                <div class="container">

                    <!--Fim formulário de novo cadastro  -->
                    <form action="<?php echo base_url() . 'emails' ?>" method="post">
                        <div class="row">


                            <div class="col-md-2">
                                <label>Nome da Campanha</label>
                                <input type="text" name="campanha" value="" class="sc-input " required placeholder="Insira o nome da campanha">
                            </div>
                            <hr>

                            <div class="col-md-4">
                                <label>Título da Mensagem</label>
                                <input type="text" name="titulo" value="" class="sc-input" required placeholder="Insira o título da campanha">
                            </div>
                            <div class="col-md-8">
                                <label>Mensagem</label>
                                <input type="text" name="mensagem" value="" class="sc-input" required placeholder="Insira o mensagem da campanha"></textarea>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div> <!-- final d-flex -->



        <a href="<?php echo base_url() . 'pessoas/add' ?>">
            <div class="p-2">
                <button class="btn btn-outline-success">
                    MARCAR TODOS
                </button>
            </div>
        </a>

        <a href="<?php echo base_url() . 'bot' ?>">
            <div class="p-2">
                <button class="btn btn-outline-success">
                    ENVIAR
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
                    <th class="text-right">Email</th>
                    <th class="text-right">Data Cadastro</th>
                    <th class="text-right">Enviar ?</th>
                    <th class="text-center">Açoes</th>
                </tr>
            </thead>
            <?php
            $contador = count($pessoas);
            foreach ($pessoas as $pessoa) : ?>
                <tr>
                    <td> <?php echo $pessoa->peo_id ?></td>
                    <td> <?php echo $pessoa->peo_nome ?></td>
                    <td class="text-right"><?php echo $pessoa->peo_email ?></td>
                    <td class="text-right"><?php echo date('d-m-Y', strtotime($pessoa->peo_data)) ?></td>
                    <td class="text-center"><?php echo ($pessoa->peo_ativo ? 'Sim' : 'não') ?> </td>
                    <td class="text-center">
                        <span class="d-none d-md-block">
                            <a href="<?php echo base_url('emails/ativar/') . $pessoa->peo_id . '?pagina=' . $pagina?>" class="btn btn-outline-info btn-sm" title="Ativar cadastro">
                                Selecionar
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