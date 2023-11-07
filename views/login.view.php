<?php require 'header.php'; ?>
<div class="contenedor">
	<div class="post">
			<article>
				<h2 class="titulo">Iniciar sesion</h2>
				<form class="formulario" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<input type="text" name="usuario" placeholder="usuario">
					<input type="password" name="password" placeholder="contraseña">
					<input type="submit" value="Iniciar sesion"> 				
				</form>		
			</article>
		</div>
</div>

<?php require 'footer.php'; ?>