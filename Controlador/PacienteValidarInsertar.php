<?php
session_start();
extract($_POST);
require"../Modelo/conexion.php";
require"../Modelo/pacientes.php";

$objPaciente=New Paciente();
////del formulario de registro de nuevo usuario
$objPaciente->crearPaciente($_POST['identificacion'],$_POST['nombres'],$_POST['apellidos'],$_POST['fechaNacimiento'],$_POST['sexo']);
$resultado=$objPaciente->agregarPaciente();
if($resultado)
header("location:../Vista/index2.php?pag=insertarUsuario&msj=1");
else
header("location:../Vista/index2.php?pag=insertarUsuario&msj=2");
?>