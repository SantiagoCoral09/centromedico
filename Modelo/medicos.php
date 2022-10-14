<?php
class Medico
{
	//Definición de Atributos
	private $identificacion;
	private $nombres;
	private $apellidos;
	private $especialidad;
	private $telefono;
	private $correo;
	private $Conexion;
	
	//Método Constructor
	public function crearMedico($identificacion,$nombres,$apellidos,$especialidad,$telefono,$correo)
	{
		$this->identificacion=$identificacion;
		$this->nombres=$nombres;
		$this->apellidos=$apellidos;
		$this->especialidad=$especialidad;
		$this->telefono=$telefono;
		$this->correo=$correo;		
	}

	//Definición de Métodos 
	//Accesores-Consultores o Modificadores-Fijadores
	
	public function setIdentificacion($identificacion){
		$this->identificacion=$identificacion;
	}	
	public function getIdentificacion(){
		return ($this->identificacion);
	}	
	public function setNombres($nombres){
		$this->nombres=$nombres;
	}	
	public function getNombres(){
		return ($this->nombres);
	}	
	public function setApellidos($apellidos){
		$this->apellidos=$apellidos;
	}	
	public function getApellidos(){
		return ($this->apellidos);
	}	
	public function setEspecialidad($especialidad){
		$this->especialidad=$especialidad;
	}	
	public function getEspecialidad(){
		return ($this->especialidad);
	}	
	public function setTelefono($telefono){
		$this->telefono=$telefono;
	}	
	public function getTelefono(){
		return ($this->telefono);
	}
	public function setCorreo($correo){
		$this->correo=$correo;
	}	
	public function getCorreo()	{
		return ($this->correo);
	}			
	
	//Métodos Asociados al CRUD y Otros
	public function agregarMedico()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into medicos(medIdentificacion,medNombres,medApellidos,medEspecialidad,medTelefono,medCorreo)
		values ('$this->identificacion','$this->nombres','$this->apellidos','$this->especialidad','$this->telefono',
		'$this->correo')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function consultarMedico($identificacion)
	{
		$this->Conexion=Conectarse();
		$sql="select * from medicos where medIdentificacion='$identificacion'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function ConsultarIdMedico($idMedico)
	{
		$this->Conexion=Conectarse();
		$sql="select * from medicos where idMedico='$idMedico'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function actualizarMedico($idMedico)
	{	
		$this->Conexion=Conectarse();
		$sql="update medicos set medIdentificacion='$this->identificacion',medNombres='$this->nombres',medApellidos='$this->apellidos',medEspecialidad='$this->especialidad',medTelefono='$this->telefono',medCorreo='$this->correo' where idMedico = '$idMedico'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}	

	public function ListarMedicos(){
		$this->Conexion=Conectarse();
		$sql="SELECT * from medicos";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	public function EliminarMedico($idMedico)
	{	
		$this->Conexion=Conectarse();
		$sql="delete from medicos where idMedico ='$idMedico'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}	

	
}