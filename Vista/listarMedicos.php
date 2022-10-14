<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
    header("location: /centromedico/Vista/iniciarSesion.php");//x=2 significa que no han iniciado sesión
    require "../Modelo/conexion.php";
    require "../Modelo/medicos.php";
    $objMedico = New Medico();
    $usuarios=$objMedico->ListarMedicos();
    include './encabezado.php';
?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="card shadow mb-4" style="max-height: 400px; overflow: scroll;">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary" align="center">MEDICOS REGISTRADOS</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <table  class="table table-bordered  text-center" id="dataTable" width="100%" cellspacing="0" >
                                <thead>
                                        <th class="text-center">Identificación</th>
                                        <th class="text-center">Nombres</th>
                                        <th class="text-center">Apellidos</th>
                                        <th class="text-center">Especialidad</th>
                                        <th class="text-center">Teléfono</th>
                                        <th class="text-center">Correo</th>    

                                    </thead>
                                    <?php
                            while($registro=$usuarios->fetch_object())
                            {
                        ?>
                                    <tr>
                                        <td><?php echo $registro->medIdentificacion?></td>
                                        <td><?php echo $registro->medNombres?></td>
                                        <td><?php echo $registro->medApellidos?></td>
                                        <td><?php echo $registro->medEspecialidad?></td>
                                        <td><?php echo $registro->medTelefono?></td>
                                        <td><?php echo $registro->medCorreo?></td>


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
