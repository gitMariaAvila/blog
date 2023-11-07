<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Raleway:wght@300;400&family=Slabo+27px&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/2c9543012a.js" crossorigin="anonymous"></script>
	<link rel="stylesheet"  type="text/css" href="<?php echo RUTA; ?>/css/estilos.css">
	<title>Blog</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<div class="logo izquierda">
				<p><a href="<?php echo RUTA; ?>">Mi primer blog</a></p>				
			</div>
			<div class="derecha">
				<form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="GET">
					<input type="text" name="busqueda" placeholder="Buscar">
					<button type="submit"  class="icono fa fa-search"></button>	
				</form>
				<nav class="menu">
					<ul>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#">Contacto <i class="fa fa-envelope"></i></a></li>
						<li><a href="<?php echo RUTA; ?>/login.php">Login <i class="fa fa-lock"></i></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>