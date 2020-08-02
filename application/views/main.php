<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <?php $baseUrl = $this->config->item('base_url') ?>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>sc-eleitor</title>
        <link rel="icon" href="<?php echo $baseUrl ?>imagem/lhdevlogo.jpg">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
       
        <?php $baseUrl = $this->config->item('base_url') ?>

        <link rel="stylesheet" href="<?php echo $baseUrl ?>assets/css2.0/fontawesome.min.css">
        <link rel="stylesheet" href="<?php echo $baseUrl ?>assets/css2.0/dashboard.css">


    </head>

    <body>

        <nav class="navbar navbar-expand navbar-dark bg-dark">

            <a class="sidebar-toggle text-light mr-3">
                <span class="navbar-toggler-icon"></span>
            </a>

            <a class="navbar-brand" href="index.html">SC-Eleitor</a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">  <!-- ml-auto -->
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">

                            <!-- <img class="rounded-circle" -->  
                            <img class="rounded-circle" src="<?php echo $baseUrl ?>assets/images/sc_eleitor_logo.jpg" width="30" height="30">
                            &nbsp; <span class="d-none d-sm-inline">Eleitor</span>  <!-- apaga usuarios quando tela reduzida -->
                        </a>

                        <!-- dropdowns Menu -->
                        <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#"><i class="fas fa-user fa-1x"></i> Perfil </a>
                            <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Sair </a>
                        </div>

                    </li>

                </ul>

            </div>
        </nav>
        <!-- fim nav1 -->
        <!--
          <div class="d-flex bg-dark">
            <div class="d-flex bg-warning">
              <div class="d-flex bg-info">
                <div class="d-flex bg-secondary">
                
                  <div class="d-flex bg-light">
        -->

        <!-- inicio d-flex -->       
        <div class="d-flex">

            <!-- nav SIDEBAR (menu lateral) -->  
            <nav class="sidebar">
                <ul class="list-unstyled">  <!-- 1o ul -->
                    <!-- <li>
                        <a href="dashboard.html"><i class="fas fa-tachometer-alt"></i> DashBoard </a>
                    </li> -->

                    <li>
                        <a href="#submenu1" data-toggle="collapse">
                            <!-- <i class="fas fa-file-alt"></i>  -->
                            <i class="fa fa-address-book"></i>
                            Cadastros
                        </a>
                        <ul id="submenu1" class="list-unstyled collapse">  <!-- 2o ul -->
                            <li><a href="<?php echo base_url() . 'pessoas/pagina/1' ?>"><i class="fas fa-paperclip"> </i> Pessoas </a></li>
                            <!-- <li><a href="#"><i class="fas fa-university"></i> Bancos </a></li>    -->
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="#submenu2" data-toggle="collapse">
                            <i class="fas fa-user"></i> Usuário
                        </a>
                        <ul id="submenu2" class="list-unstyled collapse">
                            <li><a href="listar_usuarios.html"><i class="fas fa-users"></i> Usuários</a></li>
                            <li><a href="#"><i class="fas fa-key">  </i> Nível de Acesso</a></li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="#submenu3" data-toggle="collapse">
                            <i class="fa fa-bicycle"></i>
                         Mensagens</a>
                        <ul id="submenu3" class="list-unstyled collapse">
                            <li><a href="#"><i class="fas fa-envelope-o"> </i> Emails</a></li>
                            <li><a href="#"><i class="fab fa-elementor"></i> WhatsApp</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#submenu4" data-toggle="collapse"><i class="far fa-user"></i>
                            Relatórios
                        </a>
                        <ul id="submenu4" class="list-unstyled collapse">
                            <li><a href="#"><i class="fas fa-users">  </i> Gerar PDF </a></li>
                            <li><a href="#"><i class="fas fa-element"></i> Enviar para Impressora</a></li>
                            <li><a href="#"><i class="fas fa-element"></i> Gravar em Excel</a></li>
                        </ul> 
                    </li>

                    <li><a href="#"><i class="fas fa-sign-out-alt"></i> Sair </a></li>
                </ul>
            </nav>

         
            
            
            <!-- CONTEUDO -->

            
            
            <div class="content p-1" hidden>
                <div class="list-group-item text-center">
                    <div class="d-flex">
                        <div class="mr-auto p-2"> <!-- mr-2 -->
                            <h2 class="display-4 titulo">DashBoard</h2>
                        </div>
                    </div>
                    <!-- linha para os cards -->
                    <div class="row mb-3 p-2">  <!-- m cardbottom 3 -->
                        <div class="col-lg-3 col-sm-6">
                           <!-- card1 -->
                           <div class="card bg-success text-white">
                              <div class="card-body">
                                 <i class="fas fa-users fa-3x"></i>
                                 <h6 class="card-title">Pacientes</h2>
                                 <h2 class="lead">350</h2>
                              </div>
                           </div>
                        </div>
                        <!-- card2 -->
                        <div class="col-lg-3 col-sm-6">
                           <div class="card bg-danger text-white">
                             <div class="card-body">
                                <i class="fas fa-users fa-3x"></i>
                                <h6 class="card-title">Nutricionistas</h6>
                                <h2 class="lead">51</h2>
                              </div>
                           </div>
                        </div>
                        <!-- card3 -->
                        <div class="col-lg-3 col-sm-6">
                           <div class="card bg-primary text-white">
                              <div class="card-body">
                                 <i class="fas fa-comments fa-3x"></i>
                                 <h6 class="card-title">Comentários</h6>
                                 <h2 class="lead">150</h2>
                              </div>
                           </div>
                        </div>
                        <!-- card4 -->
                        <div class="col-lg-3 col-sm-6">
                           <div class="card bg-warning text-white">
                              <div class="card-body">
                                 <i class="fas fa-eye fa-3x"></i>
                                 <h6 class="card-title">Acessos</h6>
                                 <h2 class="lead">805</h2>
                              </div>
                           </div>
                        </div>
                        

                    </div>
                </div>
            </div>
            <!-- FINAL de conteúdo -->

            <!--------------------------------------------------------------------------------------------------->

<!-- CONTEUDO -->
<div class="container" hidden>
<h2 class="display-6 titulo text-center mt-1 mb-1">Cadastro</h2>
    <div class="content p-1">
        <div class="list-group-item">
            <!-- inicio d-flex -->
            <div class="d-flex">
                <!-- <div class="mr-auto p-0">
                    </div> -->
                <a href="<?php echo base_url() . 'pessoas/add' ?>">
                    <div class="p-2">
                        <button class="btn sc-botao-novo-cadastrar">
                            NOVO CADASTRO
                        </button>
                    </div>
                </a>

                <a href="#" class="">
                    <div class="p-2 ml-15">
                        <button class="btn btn-info">
                            <?php echo $qtd_reg ?>
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
                            <td class="text-right"><?php echo date('d-m-Y', strtotime($pessoa->peo_data)) ?></td>
                            <td class="text-center"><?php echo ($pessoa->peo_ativo ? 'Sim' : 'não') ?> </td>
                            <td class="text-center">
                                <span class="d-none d-md-block">
                                    <a href="<?php echo base_url('pessoas/ativar/') . $pessoa->peo_id ?>" class="btn btn-outline-info btn-sm" title="Ativar cadastro">
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
</div>




            <!--------------------------------------------------------------------------------------------------->
























        </div>  <!-- final d-flex --> 
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="<?php echo $baseUrl ?>assets/js2.0/dashboard.js"></script>
        <!-- <script src="js/fontawesomeKit.js"></script> -->
        <script src="<?php echo $baseUrl ?>assets/js2.0/fontawesome-all.min.js"></script>
    </body>

</html>
