<?php
session_start();
extract($_POST);
require"../Modelo/conexion.php";
require"../Modelo/pacientes.php";

$objPaciente=New Paciente();
$objPaciente->crearPaciente($_POST['identificacion'],$_POST['nombres'],$_POST['apellidos'],$_POST['fechaNacimiento'],$_POST['sexo']);
$resultado=$objPaciente->actualizarPaciente($_REQUEST['idPaciente']);
if($resultado)
header("location:../Vista/actualizarPaciente.php?msj=1"); //error
else
header("location:../Vista/actualizarPaciente.php?msj=2");
?>