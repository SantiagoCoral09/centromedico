<?php
class Usuario
{
	private $usuario;
	private $password;
	private $estado;
	private $rol;
	private $Conexion;
	
	public function setUsuario($usuario)
	{
		$this->usuario=$usuario;
	}
	
	public function getUsuario()
	{
		return ($this->usuario);
	}
	
	public function setPassword($password)
	{
		$this->password=$password;
	}
	
	public function getPassword()
	{
		return ($this->password);
	}
	
	public function setEstado($estado)
	{
		$this->estado=$estado;
	}
	
	public function getEstado()
	{
		return ($this->estado);
	}
	
	public function setRol($rol)
	{
		$this->rol=$rol;
	}
	
	public function getRol()
	{
		return ($this->rol);
	}
	

	public function crearUsuario($usuario, $password, $estado, $rol)
	{
		$this->usuario=$usuario;
		$this->password=$password;
		$this->estado=$estado;
		$this->rol=$rol;	
	}
	
	public function agregarUsuario()
	{	
		$this->Conexion=Conectarse();///conectarse a la base de datos
		$sql="insert into usuarios(usuLogin, usuPassword, usuEstado, usuRol)
			values ('$this->usuario',md5('$this->password'),'$this->estado','$this->rol')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function ConsultarUsuario($usuario)
	{
		$this->Conexion=Conectarse();
		$sql="select * from usuarios where usuLogin='$usuario'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	public function ConsultarIdUsuario($idUsuario)
	{
		$this->Conexion=Conectarse();
		$sql="select * from usuarios where idUsuario='$idUsuario'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	public function listarUsuarios()
	{
		$this->Conexion=Conectarse();
		$sql="select * from usuarios";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
    public function actualizarUsuario($usuario)
	{	
		$this->Conexion=Conectarse();
		$sql="update usuarios set usuLogin='$this->usuario',usuPassword=md5('$this->password'),usuEstado='$this->estado',usuRol='$this->rol' where idUsuario = '$usuario'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	public function EliminarUsuario($usuario)
	{	
		$this->Conexion=Conectarse();
		$sql="delete from usuarios where idUsuario ='$usuario'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}	
	
}

?>