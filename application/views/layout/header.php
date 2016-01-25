<!DOCTYPE html>
<html lang="es-Mx">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/material/bootstrap.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/material/material.min.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/material/ripples.min.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom/style_general.css');?>">
		<?php if(isset($tabla)):?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/datatables.css');?>">
		<?php endif;?>

		<?php if(isset($imagen)):?>
		<link rel="stylesheet" type="text/cs"  href="<?php echo base_url('assets/css/jasny/jasny-bootstrap.min.css')?>">
		<?php endif;?>

		<?php if(isset($calendario)):?>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/pikaday.css');?>">
		<?php endif;?>

		<?php if(isset($reloj)):?>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/reloj/bootstrap-clockpicker.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/reloj/jquery-clockpicker.css');?>">
		<?php endif;?>

		<?php if(isset($login)):?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom/style_login.css');?>">	
		<?php endif;?>

		<?php if(isset($administracion)):?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom/style_administracion.css');?>">	
		<?php endif;?>

		<?php if(isset($productos)):?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom/style_productos.css');?>">	
		<?php endif;?>

		<?php if(isset($producto_detalle)):?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom/style_producto_detalle.css');?>">	
		<?php endif;?>

		<?php if(isset($carrito)):?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom/style_carrito.css');?>">	
		<?php endif;?>

		<?php if(isset($fancy)):?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.fancybox.css');?>">	
		<?php endif;?>

		<?php if(isset($select)):?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/select/selectize.css');?>">
		<?php endif;?>
		<?php if(isset($acordion)):?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/acordion/paper-collapse.css');?>">
		<?php endif;?>

		<link href="https://file.myfontastic.com/NJFcWjhPp5YTF2gP2WZeum/icons.css" rel="stylesheet">
		

		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery2.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/accounting.min.js');?>"></script>
		<?php if(isset($tabla)):?>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/dataTables.tableTools.js')?>"></script>
		<?php endif;?>

		<?php if(isset($imagen)):?>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jasny/jasny-bootstrap.min.js');?>"></script>
		<?php endif;?>

		<?php if(isset($calendario)):?>
		<script type="text/javascript" src="<?php echo base_url('assets/js/moment.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/pikaday.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/pikaday.jquery.js');?>"></script>
		<?php endif;?>

		<?php if(isset($reloj)):?>
		<script type="text/javascript" src="<?php echo base_url('assets/js/reloj/bootstrap-clockpicker.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/reloj/jquery-clockpicker.js');?>"></script>
		<?php endif;?>

		<?php if(isset($numeric)):?>
		<script type="text/javascript" src="<?php echo base_url('assets/js/numeric.js');?>"></script>
		<?php endif;?>

		<?php if(isset($graficas)):?>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/highcharts-more.js"></script>
		<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
		<?php endif;?>
		
		<?php if(isset($mensajes)):?>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.noty.packaged.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/mensajes.js');?>"></script>
		<?php endif;?>

		<?php if(isset($select)):?>
		<script type="text/javascript" src="<?php echo base_url('assets/js/select/sifter.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/select/microplugin.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/select/selectize.js');?>"></script>
		<?php endif;?>

		<?php if(isset($acordion)):?>
		<script type="text/javascript" src="<?php echo base_url('assets/js/acordion/paper-collapse.js');?>"></script>
		<?php endif;?>

		<title><?php echo empty($titulo) ? "Sosbella" : $titulo;?></title>

	</head>
	<body>