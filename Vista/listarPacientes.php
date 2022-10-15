<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
    header("location: /centromedico/Vista/iniciarSesion.php");//x=2 significa que no han iniciado sesión
    require "../Modelo/conexion.php";
    require "../Modelo/pacientes.php";
    $objPaciente = New Paciente();
    $usuarios=$objPaciente->ListarPacientes();
    include './encabezado.php';
?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="card shadow mb-4" style="max-height: 400px; overflow: scroll; margin: 20px 10px 10px 10px; border-radius: 20px;">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary" align="center">PACIENTES REGISTRADOS</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <table  class="table table-bordered  text-center" id="dataTable" width="100%" cellspacing="0" >
                                <thead>
                                    <th class="text-center">Identificación</th>
                                    <th class="text-center">Nombres</th>
                                    <th class="text-center">Apellidos</th>
                                    <th class="text-center">Fecha de Nacimiento</th>
                                    <th class="text-center">Sexo</th>      

                                    </thead>
                                    <?php
                            while($paciente=$usuarios->fetch_object())
                            {
                        ?>
                                    <tr>
                                    <td><?php echo $paciente->pacIdentificacion?></td>
                                    <td><?php echo $paciente->pacNombres?></td>
                                    <td><?php echo $paciente->pacApellidos?></td>
                                    <td><?php echo $paciente->pacFechaNacimiento?></td>
                                    <td><?php echo $paciente->pacSexo?></td>   


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
