<?php
session_start();
extract($_REQUEST); 
require "../Modelo/conexion.php";
require "../Modelo/medicos.php";
$objMedico= new Medico();
$resultado = $objMedico->EliminarMedico($_REQUEST['idMedico']);
if ($resultado)
	header ("location:../Vista/eliminarMedico.php?msj=1");
else
	header ("location:../Vista/eliminarMedico.php?msj=2");
?>
