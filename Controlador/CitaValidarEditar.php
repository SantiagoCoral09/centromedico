<?php
session_start();
extract($_REQUEST);
require"../Modelo/conexion.php";
$objConexion=Conectarse();

$sql="Update citas set citObservaciones = '$_REQUEST[observaciones]', citEstado='Atendido'
where idCita='$_REQUEST[idCita]'";
$resultado=$objConexion->query($sql);

if($resultado)
header("location:../vista/index2.php?pag=atenderCita&msj=1");
else
header("location:../vista/index2.php?pag=atenderCita&msj=2");
?>