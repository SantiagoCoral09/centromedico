<?php
session_start();
extract($_POST);
require"../Modelo/conexion.php";
require"../Modelo/medicos.php";

$objMedico=New Medico();
$objMedico->crearMedico($_POST['identificacion'],$_POST['nombres'],$_POST['apellidos'],$_POST['especialidad'],$_POST['telefono'],$_POST['correo']);
$resultado=$objMedico->actualizarMedico($_REQUEST['idMedico']);
if($resultado)
header("location:../Vista/actualizarMedico.php?msj=1"); //error
else
header("location:../Vista/actualizarMedico.php?msj=2");
?>