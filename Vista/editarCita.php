<?php
session_start();
if (!isset($_SESSION['user']))
    header("location: /centromedico/Vista/iniciarSesion.php");//x=2 significa que no han iniciado sesión

extract ($_REQUEST); /*recoger todas las variables que pasan Método GET o POST*/
require "../Modelo/conexion.php";
$idCita=$_REQUEST['idCita'];
$objConexion=Conectarse();
$sql="Select pacNombres,pacApellidos,citObservaciones
from pacientes, citas 
where (idPaciente=citPaciente) and (idCita='$idCita')";	  
$citas = $objConexion->query($sql);
$cita=$citas->fetch_object();

     include './encabezado.php';

?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Agregar Usuario -->
  <div class="container">
    <div class="text-center">
      <h1 class="h4 text-gray-900 mb-4">Información de la cita Registrada</h1>
    </div>
    <div class="form-horizontal">

      <form class="user" id="form1" name="form1" action="/centromedico/Controlador/CitaValidarEditar.php?idCita=<?php echo $idCita?>" method="POST">

        <div class="form-group">
          <label class="col-sm-4 control-label">Información del paciente</label>
          <input name="paciente" type="text" id="paciente"
            value="<?php echo $cita->pacNombres." ".$cita->pacApellidos?>"
            class="form-control form-control-user col-sm-5" disabled>
        </div>
        <div class="form-group">
          <label class="col-sm-4 control-label">Observaciones</label>
          <textarea type="text" name="observaciones" id="observaciones" class="form-control col-sm-5" placeholder="Escriba sus Observaciones" required> </textarea>					
				
        </div>
        
       


        <div>
          <div class="form-group">
            <label class="col-sm-4 control-label"></label>
            <div class="col-sm-5">
              <button type="submit" class="btn btn-primary btn-user btn-block"> Guardar</button>
            </div>
          </div>
        </div>
        <input name="idCita" type="text" value="<?php echo $idCita?>">
      </form>
      <hr>

    </div>
  </div>

  <!-- Agregar Usuario -->

</div>
<!-- /.container-fluid -->



<?php
include './footer.php';
?>