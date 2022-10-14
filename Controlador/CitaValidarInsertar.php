<?php
session_start();
extract($_REQUEST);
require"../Modelo/conexion.php";
$objConexion=Conectarse();

$sql="insert into citas (citFecha, citHora, citPaciente, citMedico, citConsultorio) values
('$_REQUEST[fecha]','$_REQUEST[hora]','$_REQUEST[paciente]','$_REQUEST[medico]','$_REQUEST[consultorio]')";
$resultado=$objConexion->query($sql);

if($resultado)
header("location:../vista/index2.php?pag=insertarCita&msj=1");
else
header("location:../vista/index2.php?pag=insertarCita&msj=2");
