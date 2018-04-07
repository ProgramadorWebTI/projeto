<?php 
// Pegar o caminho da imagem;
$imagem = 'assets/imagem/logo/';
$avatar = 'https://scontent.fbsb12-1.fna.fbcdn.net/v/t1.0-9/29694995_10204319659269719_2456973373656494635_n.jpg?_nc_cat=0&oh=138a127b257746ec259554d739feed4f&oe=5B2DC5C7';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="author" content="<?php echo $author; ?>">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=base_url()?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=base_url()?>assets/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="padding: 6px 74px !important;" class="navbar-brand" href="<?= site_url('panel');?>">
                    <!-- Logo da empresa; -->
                    <img width="100" height="30" class="img-responsive" src="<?php echo base_url($imagem.'vida2.png'); ?>" alt="Uti Vida">
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">               
               <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <strong>
                        <!-- Pegar o nome do usuário logado na sessão atual; -->
                     <?php echo 'Bem vindo,'.$_SESSION['logado'][0]->logar_usuario.'!';?>  
                 </strong>     
                 <i class="fa fa-caret-down"></i>
             </a>
             <ul class="dropdown-menu dropdown-user">
                <!-- Sair do sistema; -->
                <li><a href="<?= site_url('sair');?>"><i class="fa fa-sign-out fa-fw"></i>Sair</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu" style="font-size: 17px;">
                     <!-- <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                        </div>
                    </li> -->
                    <!-- <li>
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li> -->
                    
                    <!-- Verificar se o usuário tem permissão para a gestão de usuário; -->
                    <?php if($permissaoAcesso[0]->permissao_usuario==1): ?>

                        <li>
                            <a href="#"><i class="fa fa-user fa-fw" style="color: #ed1c24 !important;"></i> Gestão de Usuário<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('usuario')?>"> <i class="fa fa-plus"></i> Adicionar novo usuário</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('usuario/listar')?>"> <i class="fa fa-mail-forward"></i> Lista usuário</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    <?php endif; ?>

                    <li>
                        <a href="#"><i class="fa fa-credit-card-alt" style="color: #ed1c24 !important;"></i> Extrato Bancario<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"> <i class="fa fa-user-plus"></i> Adicionar novo usuário</a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    
    <!-- conteudo vai aqui -->
    <div id="page-wrapper">
        <?php if(isset($info)): ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?=$info;?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        <?php endif; ?>

        <!-- /.row -->

        <!-- /.row -->
