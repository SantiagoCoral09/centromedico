<?php
session_start();
extract ($_REQUEST);
require"../Modelo/conexion.php";

if (!isset($_SESSION['user']))
    header("location: /centromedico/Vista/iniciarSesion.php");//x=2 significa que no han iniciado sesión
    $objConexion = Conectarse();

  $sql="Select idMedico, medNombres, medApellidos, medEspecialidad from medicos";
  $medicos=$objConexion->query($sql);

  $sql= "select idPaciente, pacIdentificacion, pacNombres, pacApellidos from pacientes";
  $pacientes=$objConexion->query($sql);

  $sql="select * from consultorios";
  $consultorios=$objConexion->query($sql);
include './encabezado.php'; ?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Agregar Usuario -->
  <div class="container">
    <div class="text-center">
      <h1 class="h4 text-gray-900 mb-4">Agregar Nueva Cita</h1>
    </div>
    <div class="form-horizontal" style="max-height: 400px; overflow: scroll;">

      <form class="user" id="form1" name="form1" action="/centromedico/Controlador/CitaValidarInsertar.php"
        method="POST">

        <div class="form-group">
          <label for="paciente" class="col-sm-4 control-label">Seleccione Paciente</label>
          <select class="form-control col-sm-5" name="paciente" id="paciente" required>
            <option value="0">Seleccione Paciente</option>
            <?php    
                                    while ($paciente=$pacientes->fetch_object())
                                    {
                                      ?>
            <option value="<?php echo $paciente->idPaciente;?> ">
              <?php echo $paciente->pacIdentificacion."-".$paciente->pacNombres." ".$paciente->pacApellidos;?>
            </option>
            <?php 
                                    }
                                    ?>
          </select>
        </div>

        <div class="form-group">
          <label class="col-sm-4 control-label">Fecha de la Cita</label>
          <input type="date" name="fecha" id="fecha" class="form-control  col-sm-5" required>
        </div>

        <div class="form-group">
          <label class="col-sm-4 control-label">Hora</label>
          <input type="time" name="hora" id="hora" class="form-control  col-sm-5" required>
        </div>

        <div class="form-group">
          <label for="medico" class="col-sm-4 control-label">Medico</label>
          <select class="form-control col-sm-5" name="medico" id="medico">
            <option value="0">Seleccione Medico</option>
            <?php
             while ($medico=$medicos->fetch_object())
             {
             ?>
            <option value="<?php echo $medico->idMedico;?>">
              <?php echo $medico->medNombres." ".$medico->medApellidos. " ( ".$medico->medEspecialidad." )" ?>
            </option>
            <?php 
             }
             ?>
          </select>
        </div>

        <div class="form-group">
          <label for="consultoro" class="col-sm-4 control-label">Consultorio</label>
          <select class="form-control col-sm-5" name="consultorio" id="consultorio">
            <option value="0">Seleccione Consultorio</option>
            <?php
             while ($consultorio=$consultorios->fetch_object())
             {
             ?>
            <option value="<?php echo $consultorio->idConsultorio;?> ">
              <?php echo $consultorio->conNombre?>
            </option>
            <?php
             } 
             ?>
          </select>
        </div>




        <div>
          <div class="form-group">
            <label class="col-sm-4 control-label"></label>
            <div class="col-sm-5">
              <button type="submit" class="btn btn-primary btn-user btn-block"> Guardar</button>
            </div>
          </div>
        </div>
      </form>
      <hr>

    </div>
  </div>

  <!-- Agregar Usuario -->

</div>
<!-- /.container-fluid -->

<?php include './footer.php'; ?>