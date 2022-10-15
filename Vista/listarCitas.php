<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
    header("location: /centromedico/Vista/iniciarSesion.php");//x=2 significa que no han iniciado sesión
    require "../Modelo/conexion.php";
    $objConexion=Conectarse();
$sql="select idCita,pacNombres, pacApellidos, medNombres, medApellidos, medEspecialidad,conNombre, citFecha, citHora, citEstado, citObservaciones 
from pacientes, medicos, consultorios, citas
where (idPaciente = citPaciente) and 
    (idMedico = citMedico) and 
    (idConsultorio = citConsultorio) and
    (citEstado='Atendido')"; 
$citas= $objConexion->query($sql);
    include './encabezado.php';
?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="card shadow mb-4" style="max-height: 400px; overflow: scroll; margin: 20px 10px 10px 10px; border-radius: 20px;">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary" align="center">CITAS ATENDIDAS</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered  text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th class="text-center">Fecha</th>
                    <th class="text-center">Hora</th>
                    <th class="text-center">Paciente</th>
                    <th class="text-center">Médico</th>
                    <th class="text-center">Especialidad</th>
                    <th class="text-center">Consultorio</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Observaciones</th>

                </thead>
                <?php
                            while($cita=$citas->fetch_object())
                            {
                        ?>
                <tr>
                    <td>
                        <?php echo $cita->citFecha?>
                    </td>
                    <td>
                        <?php echo $cita->citHora?>
                    </td>
                    <td>
                        <?php echo $cita->pacNombres." ".$cita->pacApellidos?>
                    </td>
                    <td>
                        <?php echo $cita->medNombres." ".$cita->medApellidos?>
                    </td>
                    <td>
                        <?php echo $cita->medEspecialidad?>
                    </td>
                    <td>
                        <?php echo $cita->conNombre?>
                    </td>
                    <td>
                        <?php echo $cita->citEstado?>
                    </td>
                    <td>
                        <?php echo $cita->citObservaciones?>
                    </td>


                </tr>
                <?php
                        }  //cerrando el ciclo while
                        ?>
            </table>
        </div>
    </div>
</div>

<!-- /.container-fluid -->

<?php include './footer.php'; ?>