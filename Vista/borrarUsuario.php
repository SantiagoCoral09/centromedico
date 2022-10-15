<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
    header("location: /centromedico/Vista/iniciarSesion.php");//x=2 significa que no han iniciado sesión
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

    <!-- Agregar Usuario -->
    <!-- Agregar Usuario -->
    <div class="card shadow"
        style="border-radius: 20px; max-height: 420px; overflow: scroll; margin: 20px 10px 10px 10px;">

        <div class="card-header bg-gradient-primary">
            <div class="text-center">
                <h1 class="h4 text-light mb-4">Información del Usuario Registrado</h1>
            </div>
        </div>
        <div class="container">
            <div class="card-body">
                <div class="form-horizontal">

                    <form class="user" id="form1" name="form1"
                        action="/centromedico/Controlador/validarEliminarUsuario.php?idUsuario=<?php echo $registro->idUsuario?>"
                        method="POST">

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Usuario</label>
                            <input name="usuario" type="text" id="usuario" placeholder="Digite el nombre del usuario"
                                class="form-control form-control-user col-sm-5" value="<?php echo $registro->usuLogin?>"
                                disabled>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Password</label>
                            <input name="password" type="password" id="password" placeholder="Digite la contraseña"
                                class="form-control form-control-user col-sm-5"
                                value="<?php echo $registro->usuPassword?>" disabled>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Estado</label>
                            <select class="col-sm-5 form-control input-lg " name="estado" disabled>
                                <option value="" class="col-sm-4 control-label text-left">
                                    <?php echo $registro->usuEstado?>
                                </option>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label"> Rol del sistema </label>
                            <select disabled class="col-sm-5 form-control input-lg " name="rol">
                                <?php echo $registro->usuRol?>
                                <option class="col-sm-4 control-label text-left">
                                    <?php echo $registro->usuRol?>
                                </option>
                                <option value="Administrador">Administrador</option>
                                <option value="Medico">Medico</option>
                                <option value="Paciente">Paciente</option>
                                <option value="Auxiliar">Auxiliar</option>
                            </select>
                        </div>

                        <div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label"></label>
                                <div class="col-sm-5">
                                    <button type="submit" class="btn btn-primary btn-user btn-block"> Confirmar
                                        Eliminar</button>
                                </div>
                            </div>
                        </div>
                        <input name="idUsuario" type="hidden" value="<?php echo $registro->idUsuario?>">
                    </form>
                </div>
                <hr>

            </div>
        </div>

        <!-- Agregar Usuario -->

    </div>
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