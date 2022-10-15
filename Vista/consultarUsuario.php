<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
    header("location: /centromedico/Vista/iniciarSesion.php");//x=2 significa que no han iniciado sesión
    include './encabezado.php';
?>

<div class="card shadow" style="border-radius: 20px; max-height: 420px; overflow: scroll; margin: 20px 10px 10px 10px;">
    <!-- Agregar Usuario -->
    <div class="card-header bg-gradient-primary">
        <div class="text-center">
            <h1 class="h4 text-light mb-4">Digite el nombre del usuario a Consultar</h1>
        </div>
    </div>
    <div class="container">
        <div class="card-body">
            <div class="form-horizontal">
                <form id="form1" name="form1" action="" method="POST">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Usuario</label>
                        <input name="usuario" type="text" id="usuario" class="form-control form-control-user  col-sm-5"
                            required>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label"></label>
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-dark btn-block">Buscar</button>
                        </div>
                    </div>

                </form>
            </div>
            <hr>

            <?php
                        extract ($_POST); 
                        require "../Modelo/conexion.php";
                        require "../Modelo/usuarios.php";

                        if (isset($_POST['usuario'])) {
                            $objMedico= new Usuario();
                            $resultado=$objMedico->ConsultarUsuario($_POST['usuario']);
                            if (isset($resultado))  
                                { if($resultado->num_rows >0 ){
                    ?>
            <div class="card-header py-3">
                <h1 class="m-0 font-weight-bold text-primary" align="center">DATOS DEL USUARIO</h1>
            </div>
            <div class="table-responsive text-center">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <th class="text-center">Usuario</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Estado</th>
                        <th class="text-center">Rol</th>

                    </thead>
                    <?php
                            while($registro=$resultado->fetch_object())
                            {
                        ?>
                    <tr>
                        <td>
                            <?php echo $registro->usuLogin?>
                        </td>
                        <td>
                            <?php echo $registro->usuPassword?>
                        </td>
                        <td>
                            <?php echo $registro->usuEstado?>
                        </td>
                        <td>
                            <?php echo $registro->usuRol?>
                        </td>


                    </tr>
                    <?php
                        }  //cerrando el ciclo while
                        ?>
                </table>
            </div>

            <?php 
                        }else{  echo '<div class="alert alert-danger text-center">El Usuario No existe en la base de datos</div>';}
                        }
                        }
                    ?>
        </div>
    </div>
    <!-- Agregar Usuario -->

</div>
<!-- /.container-fluid -->

<?php include './footer.php'; ?>