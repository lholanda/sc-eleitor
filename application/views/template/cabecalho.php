<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SC-Eleitor</title>

    <!-- Bootstrap core CSS -->
    <?php $baseUrl = $this->config->item('base_url') ?>
    <link href="<?php echo $baseUrl ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" href="<?php echo $baseUrl ?>assets/images/phtilogo.png">

    <link rel="stylesheet" href="<?php echo $baseUrl ?>assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl ?>assets/css/dashboard.css">
    <!-- fontawesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
    <div class="container">




    <div class="content p-1" >
          <!-- inicio do Header -->
          <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-info">
                <div class="container">
                    <a class="navbar-brand" href="index.html">Meu Site</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" 
                            data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" 
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item menu">
                                <a class="nav-link" href="">Home</a>
                            </li>
                            <li class="nav-item menu">
                                <a class="nav-link" href="">Sobre a Empresa</a>
                            </li>
                            <li class="nav-item menu">
                                <a class="nav-link " href="">Blog</a>
                            </li>
                            <li class="nav-item menu">
                                <a class="nav-link " href="">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>  
    </div> 
        <!-- final do Header --> 

        <nav class="navbar navbar-expand-md navbar-dark " style="background-color: #0000cc">
            <a class="navbar-brand " href="<?php echo $baseUrl ?>pessoas">SysConecte</a>
            <a class="navbar-brand ml-5 " href="<?php echo base_url() . 'whats' ?>"style="background-color: #0000aa" >WhatsApp</a>
            <a class="navbar-brand mx-2" href="<?php echo base_url() . 'campanha_email' ?>">EMAIL</a>
            <a class="navbar-brand mx-2" href="<?php echo base_url() . 'relatorios' ?>">RELATÓRIOS</a>

            <!-- <a class="sidebar-toggle text-light mr-3">
                <span class="navbar-toggler-icon"></span> 
            </a> -->

            <div class="col-md-4"></div>
            <div class="dropdown-content dropdown-menu-right ml-2 mr-2">
                <button class="btn btn-info dropdown-toggle" style="background-color: #0000cc" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cog"></i>
                </button>
                <div class="col-md-8">
                    <div class="dropdown-menu" aria-labelledby=" dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo site_url('usuarios/logout') ?>"><i class="fa fa-sign-out mr-1"></i>Logout</a>
                    </div>
                </div>
                
            </div>   
            
            <div class="align-self-center ml-2">
                <h4>
                    <i class="fa fa-user mr-2"></i><span><?php echo $this->session->userdata('usuario') ?></span>
                </h4>
            </div>


        </nav>

        <!-- fim nav1 -->