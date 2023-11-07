<?php session_start();
require 'confi.php';
require '../funciones.php';


comprobarSesion();


$conexion = conexion($bd_configuracion);
if(!$conexion){
	header('Location: ../error.php');
}

$id = limpiarDatos($_GET['id']);

if(!$id)
{
	header('Location: ' . RUTA . '/admin');
}

$statement = $conexion->prepare("DELETE FROM articulos WHERE id = :id;");
$statement->execute(array('id'=>$id));

header('Location: ' . RUTA . '/admin');

?>