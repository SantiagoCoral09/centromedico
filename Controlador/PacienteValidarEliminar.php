<?php
session_start();
extract($_REQUEST); 
require "../Modelo/conexion.php";
require "../Modelo/pacientes.php";
$objPaciente= new Paciente();
$resultado = $objPaciente->EliminarPaciente($_REQUEST['idPaciente']);
if ($resultado)
	header ("location:../Vista/eliminarPaciente.php?msj=1");
else
	header ("location:../Vista/eliminarPaciente.php?msj=2");
?>
