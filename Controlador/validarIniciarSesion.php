<?php
session_start();
extract ($_POST);
require "../Modelo/conexion.php";

$pass = md5($_POST['pass']);
$login = $_POST['login'];
$objConexion=Conectarse();

$sql="select * from usuarios where usuLogin = '$login' and usuPassword = '$pass'";

$resultado=$objConexion->query($sql);

$existe = $resultado->num_rows;

if ($existe==1)  
{
	$usuario=$resultado->fetch_object() or die ("Error");
	$_SESSION['user']= $usuario->usuLogin;
	$_SESSION['rol']= $usuario->usuRol;
	header("location:../Vista/index2.php");////pagina principal despues de iniciar sesion
}
else
{
	// header("location:../Vista/iniciarSesion?mensaje=error");  
    header('Location: ../Vista/iniciarSesion.php?errorlogin=1');
    // exit();
}
?>
