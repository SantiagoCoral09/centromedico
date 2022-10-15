<?php
session_start();
if (!isset($_SESSION['user']))
    header("location: /centromedico/Vista/iniciarSesion.php");//x=2 significa que no han iniciado sesión

extract ($_REQUEST); /*recoger todas las variables que pasan Método GET o POST*/
require "../Modelo/conexion.php";
require "../Modelo/pacientes.php";

if (isset($_REQUEST['idPaciente'])) {
  
$objPaciente= new Paciente();
$resultado=$objPaciente->ConsultarIdPaciente($_REQUEST['idPaciente']);
//Asignar a una variable el resultado de la consulta

 if (isset($resultado))  //quiere decir que los datos estan bien
     { if($resultado->num_rows >0 ){
    
     $registro=$resultado->fetch_object();
     include './encabezado.php';

?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<!-- Agregar Usuario -->
<div class="card shadow" style="border-radius: 20px; max-height: 420px; overflow: scroll; margin: 20px 10px 10px 10px;">

  <div class="card-header bg-gradient-primary">
    <div class="text-center">
      <h1 class="h4 text-light mb-4">Información del Pacirnte Registrado</h1>
    </div>
  </div>
  <div class="container">
    <div class="card-body">
      <div class="form-horizontal">

        <form class="user" id="form1" name="form1"
          action="/centromedico/Controlador/PacienteValidarActualizar.php?idPaciente=<?php echo $registro->idPaciente?>"
          method="POST">

          <div class="form-group">
            <label class="col-sm-4 control-label">Identificación</label>
            <input name="identificacion" type="number" id="identificacion"
              value="<?php echo $registro->pacIdentificacion?>" placeholder="Digite No de Identificación"
              class="form-control form-control-user col-sm-5" required>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Nombres</label>
            <input name="nombres" type="text" value="<?php echo $registro->pacNombres?>" id="nombres"
              placeholder="Digite sus Nombres" class="form-control form-control-user col-sm-5" required>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Apellidos</label>
            <input name="apellidos" type="text" value="<?php echo $registro->pacApellidos?>" id="apellidos"
              placeholder="Digite sus Apellidos" class="form-control form-control-user col-sm-5" required>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Fecha de Nacimiento </label>
            <input class="form-control col-sm-5" name="fechaNacimiento" type="date" id="fechaNacimiento"
              value="<?php echo $registro->pacFechaNacimiento?>">
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label"> Sexo </label>
            <select class="col-sm-5 form-control input-lg " name="sexo">
              <option value="Masculino" <?php if($registro->pacSexo=='Masculino') echo 'selected'; ?>>Masculino</option>
              <option value="Femenino" <?php if($registro->pacSexo=='FePaciente') echo 'selected'; ?>>Femenino</option>
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
          <input name="idPaciente" type="hidden" value="<?php echo $registro->idPaciente?>">
        </form>
      </div>
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