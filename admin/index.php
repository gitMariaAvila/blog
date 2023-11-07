<?php session_start();//index de admin

require 'confi.php';
require '../funciones.php';

$conexion = conexion($bd_configuracion);

// Comprobamos si la session esta iniciada, sino, redirigimos.
comprobarSesion();


if (!$conexion) {
	header("Location: ../error.php");
}

$posts = obtener_post($blog_configuracion['post_por_pagina'], $conexion);

require '../views/admin_index.view.php';
?>


