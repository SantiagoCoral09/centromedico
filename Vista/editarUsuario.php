<?php
session_start();
if (!isset($_SESSION['user']))
    header("location: /centromedico/Vista/iniciarSesion.php");//x=2 significa que no han iniciado sesión

extract ($_REQUEST); /*recoger todas las variables que pasan Método GET o POST*/
require "../Modelo/conexion.php";
require "../Modelo/usuarios.php";

if (isset($_REQUEST['idUsuario'])) {
  
$objUsuario= new Usuario();
$resultado=$objUsuario->ConsultarIdUsuario($_REQUEST['idUsuario']);
//Asignar a una variable el resultado de la consulta

 if (isset($resultado))  //quiere decir que los datos estan bien
     { if($resultado->num_rows >0 ){
    
     $registro=$resultado->fetch_object();
     include './encabezado.php';

?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Agregar Usuario -->
                    <div class="container">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Información del Usuario Registrado</h1>
                        </div>
                        <div class="form-horizontal">
                            
                            <form class="user" id="form1" name="form1"
                            action="/centromedico/Controlador/validarActualizarUsuario.php?idUsuario=<?php echo $registro->idUsuario?>" method="POST">

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Usuario</label>
                                    <input name="usuario" type="text" id="usuario"
                                        placeholder="Digite el nombre del usuario" class="form-control form-control-user col-sm-5" value="<?php echo $registro->usuLogin?>"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" >Password</label>
                                     <input name="password" type="password" id="password" placeholder="Digite la contraseña" class="form-control form-control-user col-sm-5" value="<?php echo $registro->usuPassword?>" required>
                                  </div>
                                 
                                  <div class="form-group">    
                                        <label class="col-sm-4 control-label">Estado</label>             
                                        <select class="col-sm-5 form-control input-lg " name="estado">   
                                            <option value="" class="col-sm-4 control-label text-left"> </option>
                                            <option value="Activo"<?php if($registro->usuEstado=='Activo') echo 'selected'; ?>>Activo</option>
                                            <option value="Inactivo"<?php if($registro->usuEstado=='Inactivo') echo 'selected'; ?>>Inactivo</option>
                                        </select>              
                                  </div>  
                                 
                                  <div class="form-group">    
                                        <label class="col-sm-4 control-label" > Rol del sistema  </label>             
                                        <select class="col-sm-5 form-control input-lg " name="rol">    
                                            <option class="col-sm-4 control-label text-left" value=""></option>
                                            <option value="Administrador"<?php if($registro->usuRol=='Administrador') echo 'selected'; ?>>Administrador</option>
                                            <option value="Medico"<?php if($registro->usuRol=='Medico') echo 'selected'; ?>>Medico</option>
                                            <option value="Paciente"<?php if($registro->usuRol=='Paciente') echo 'selected'; ?>>Paciente</option>
                                            <option value="Auxiliar"<?php if($registro->usuRol=='Auxiliar') echo 'selected'; ?>>Auxiliar</option>
                                        </select>              
                                  </div>
                                
                                <div>
                                    <div class="form-group">
                                      <label class="col-sm-4 control-label"></label>
                                      <div class="col-sm-5">
                                        <button type="submit" class="btn btn-primary btn-user btn-block"> Actualizar</button>        
                                      </div>    
                                    </div>   
                                  </div>   
                                  <input name="idPaciente" type="hidden" value="<?php echo $registro->idUsuario?>">
                            </form>
                            <hr>
                           
                        </div>
                    </div>

                    <!-- Agregar Usuario -->

                </div>
                <!-- /.container-fluid -->

            

<?php
include './footer.php';
  }else {
      echo 'No hay con ese id';
  }
  }else {
      echo 'Err consulta';
  }
}else {
    echo 'No hay get';
}
?>