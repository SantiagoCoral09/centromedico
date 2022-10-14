<?php
session_start();
extract($_POST);
require"../Modelo/conexion.php";
require"../Modelo/usuarios.php";

$objUsuario=New Usuario();
$objUsuario->CrearUsuario($_POST['usuario'],$_POST['password'],$_POST['estado'],$_POST['rol']);
$resultado=$objUsuario->actualizarUsuario($_REQUEST['idUsuario']);
if($resultado)
header("location:../Vista/actualizarUsuario.php?msj=1"); //error
else
header("location:../Vista/actualizarUsuario.php?msj=2");