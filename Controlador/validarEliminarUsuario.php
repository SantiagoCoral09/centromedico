<?php
session_start();
extract($_REQUEST); 
require "../Modelo/conexion.php";
require "../Modelo/usuarios.php";
$objUsuario= new Usuario();
$resultado = $objUsuario->EliminarUsuario($_REQUEST['idUsuario']);
if ($resultado)
	header ("location:../Vista/eliminarUsuario.php?msj=1");
else
	header ("location:../Vista/eliminarUsuario.php?msj=2");
?>
