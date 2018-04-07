<?php 
// Pegar o caminho da imagem;
$imagem = 'assets/imagem/logo/';

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
    <link href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=base_url('assets/vendor/metisMenu/metisMenu.min.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url('assets/dist/css/sb-admin-2.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url('assets/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
    					<h3 class="panel-title">
                             <div class="row">
                                <div class="col-xs-3"></div>
                                <div class="col-xs-6">
                                    <img class="img-responsive" src="<?php echo base_url($imagem.'vida.png'); ?>" alt="Uti Vida">
                                </div>
                                <div class="col-xs-3"></div>
                            </div>   
                        </h3>
                    </div>


                <div class="panel-body">
                  <form method="post" action="<?php echo site_url('usuario/logar')?>">

                   <fieldset>

                    <div class="form-group">
                        <input value="<?php echo set_value('usuario'); ?>" class="form-control" placeholder="usuario" name="usuario" type="text" autofocus>
                        <?php echo form_error('usuario'); ?>
                    </div>
                    <div class="form-group">
                       <input class="form-control" placeholder="Password" name="password" type="password" value="">
                       <?php echo form_error('password'); ?>
                   </div>
                   <button type="submit" class="btn btn-lg btn-primary btn-block" style="background-color: #023f88 !important;">Logar</button>

               </fieldset>

               <?php if($this->session->flashdata('error_ao_logar')): ?>
                <br> <div class="alert alert-danger text-center"><?=$this->session->flashdata('error_ao_logar');?></div>
            <?php endif;?>
        </form>
    </div>
</div>
</div>
</div>
</div>

<!-- jQuery -->
<script src="<?=base_url('assets/vendor/jquery/jquery.min.js')?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?=base_url('assets/vendor/metisMenu/metisMenu.min.js')?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?=base_url('assets/dist/js/sb-admin-2.js')?>"></script>


</body>

</html>
