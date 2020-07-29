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
    <link rel="stylesheet" href="<?php echo $baseUrl ?>assets/ css/dashboard.css">
    <!-- fontawesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
   
        <!-- fim nav1 -->
<div class="container-fluid pt-5 pb-3 text-center">    

    <hr>
</div><div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-sm-6 offset-3 col-8 offset-2">
            <div class="card p-4">
                <h3>Login</h3>
                <hr>

                <!-- 
                <form action="<?php echo base_url()?>usuarios/login" method="post"> -->
                <form action="<?php echo site_url(['usuarios','login'])?>" method="post">

                <!-- erro -->
                
                <div class="form-group">
                    <input  type="text" 
                            name="text_usuario" 
                            class="form-control" 
                            placeholder="Usuário" 
                            required
                            >
                </div>
                <div class="form-group">
                    <input  type="password" 
                            name="text_senha"
                            class="form-control" 
                            placeholder="Senha"
                            required
                            >
                </div>
                <div class="text-center">
                    <!-- <a href="<?php echo base_url()?>" class="btn btn-primary">Cancelar</a> -->
                    <!-- <a href="<?php echo site_url('/')?>" class="btn btn-secondary">Cancelar</a> -->
                    <button type="submit" class="btn btn-primary ">Entrar</button>
                </div>

                </form>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid text-center">
    <hr>
    <p>SysConecte &copy; 2020</p>
</div>

