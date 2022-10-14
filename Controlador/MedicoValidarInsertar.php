<?php
session_start();
extract($_POST);
require"../Modelo/conexion.php";
require"../Modelo/medicos.php";

$objMedico=New Medico();
////del formulario de registro de nuevo usuario
$objMedico->crearMedico($_POST['identificacion'],$_POST['nombres'],$_POST['apellidos'],$_POST['especialidad'],$_POST['telefono'],$_POST['correo']);
$resultado=$objMedico->agregarMedico();
if($resultado)
header("location:../Vista/index2.php?pag=insertarUsuario&msj=1");
else
header("location:../Vista/index2.php?pag=insertarUsuario&msj=2");
?>