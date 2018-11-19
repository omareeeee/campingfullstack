<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Ir De Camping</title>
	<link rel="stylesheet" href="css/styleprincipal.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/styleSlider.css">
	<link rel="stylesheet" type="text/css" href="css/StyleFooter.css">
	<link rel="stylesheet" type="text/css" href="css/styleForm.css">

	<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>

	<script src="js/jquery.flexslider-min.js"></script>

	<script>
		$(function(){
			var pull = $('#pull');
			menu = $('nav ul');
			menuHeight = menu.height();

			$(pull).on('click',function(e){
				e.preventDefault();
				menu.slideToggle();
			});
		});
	</script>
</head>
<header>
	<nav id="menu">	
		<ul>
			<li><a href="index.php" id="enlaces" class="inicio">Inicio</a></li>
			<li><a href="verEncuesta.php" id="enlaces">Camping</a></li>
			<li><a href="votarEncuesta2.php" id="enlaces">Comentarios</a></li>
			<li>
				<?php
					error_reporting(E_ALL ^ E_NOTICE);
					session_start();
					if($_SESSION["autentificado"]){
						echo "<a href='index.php' id='enlaces'>Admin</a>";
							?>
				<?php
				echo "<li><a id='enlaces' href='php/salir.php'>Salir</a></li>";
				}else{
				echo "<li><a id='enlaces' href='login.php'>Login</a></li>";
			}
				?>	
			</li>
		</ul>
		<a href="" id="pull">&nbsp;</a>
	</nav>
	<h1>Sea bienvenido/a,</h1>
	<h2>mire y escoja su proxima parada para hacer camping</h2>
</header>