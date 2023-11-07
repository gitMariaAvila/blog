<?php
require 'admin/confi.php';

require 'funciones.php';

$conexion = conexion($bd_configuracion);
if(!$conexion){
	header('Location: error.php');
}

$posts = obtener_post($blog_configuracion['post_por_pagina'], $conexion);

if(!$posts)
{ 
	header('Location: error.php');
}




require 'views/index.view.php';


?>