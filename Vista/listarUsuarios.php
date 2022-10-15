<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
    header("location: /centromedico/Vista/iniciarSesion.php");//x=2 significa que no han iniciado sesión
    require "../Modelo/conexion.php";
    require "../Modelo/usuarios.php";
    $objUsuario = New Usuario();
    $usuarios=$objUsuario->ListarUsuarios();
    include './encabezado.php';
?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="card shadow mb-4" style="max-height: 400px; overflow: scroll; margin: 20px 10px 10px 10px; border-radius: 20px;">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary" align="center">USUARIOS REGISTRADOS</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <table  class="table table-bordered  text-center" id="dataTable" width="100%" cellspacing="0" >
                                    <thead>
                                        <th class="text-center">Usuario</th>
                                        <th class="text-center">Password</th>
                                        <th class="text-center">Estado</th>
                                        <th class="text-center">Rol</th>
                                    </thead>
                                    <?php
                            while($usuario=$usuarios->fetch_object())
                            {
                        ?>
                                    <tr>
                                        <td>
                                            <?php echo $usuario->usuLogin?>
                                        </td>
                                        <td>
                                            <?php echo $usuario->usuPassword?>
                                        </td>
                                        <td>
                                            <?php echo $usuario->usuEstado?>
                                        </td>
                                        <td>
                                            <?php echo $usuario->usuRol?>
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
