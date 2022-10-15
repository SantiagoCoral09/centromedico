<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
    header("location: /centromedico/Vista/iniciarSesion.php");//x=2 significa que no han iniciado sesión
///////Se muestra en todas las páginas

include './encabezado.php'; ?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="card shadow" style="border-radius: 20px; max-height: 420px; overflow: scroll; margin: 20px 10px 10px 10px;">
    <!-- Agregar Usuario -->
    <div class="card-header bg-gradient-primary">
        <div class="text-center">
            <h1 class="h4 text-light mb-4">Digite el No de Documento del Médico a Actualizar</h1>
        </div>
    </div>
    <div class="container">
        <div class="card-body">
            <div class="form-horizontal">
                <form id="form1" name="form1" action="" method="POST">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">No de Documento</label>
                        <input name="usuario" type="text" id="usuario" placeholder="Ingrese el documento de identidad"
                            class="form-control form-control-user  col-sm-5" required>
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
                        require "../Modelo/medicos.php";

                        if (isset($_POST['usuario'])) {
                            $objMedico= new Medico();
                            $resultado=$objMedico->ConsultarMedico($_POST['usuario']);
                            if (isset($resultado))  
                                { if($resultado->num_rows >0 ){
                    ?>
            <div class="card-header py-3">
                <h1 class="m-0 font-weight-bold text-primary" align="center">DATOS DEL MÉDICO</h1>
            </div>
            <div class="table-responsive text-center">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <th class="text-center">Identficacion.</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Apellidos</th>
                        <th class="text-center">Especialidad</th>
                        <th class="text-center">Telefono </th>
                        <th class="text-center">Correo </th>
                        <th class="text-center">Opción</th>

                    </thead>
                    <?php
                            while($registro=$resultado->fetch_object())
                            {
                        ?>
                    <tr>
                        <td>
                            <?php echo $registro->medIdentificacion?>
                        </td>
                        <td>
                            <?php echo $registro->medNombres?>
                        </td>
                        <td>
                            <?php echo $registro->medApellidos?>
                        </td>
                        <td>
                            <?php echo $registro->medEspecialidad?>
                        </td>
                        <td>
                            <?php echo $registro->medTelefono?>
                        </td>
                        <td>
                            <?php echo $registro->medCorreo?>
                        </td>
                        <td> <a href="/centromedico/Vista/editarMedico.php?idMedico=<?php echo $registro->idMedico?>">
                                <span class="class btn btn-warning">Editar</span>
                            </a></td>

                    </tr>
                    <?php
                        }  //cerrando el ciclo while
                        ?>
                </table>
            </div>

            <?php 
                        }else{  echo '<div class="alert alert-danger text-center">El Medico No existe en la base de datos</div>';}
                        }
                        }
                    ?>
        </div>
    </div>
</div>

<?php
if(isset($msj) && $msj==1){
  ?>
<script type="text/javascript">
    alert("EL MEDICO FUE EDITADO CORRECTAMENTE");
    window.location.href = '/centromedico/Vista/index2.php';
</script>
<?php
}

if(isset($msj) && $msj==2){
  ?>
<script type="text/javascript">
    alert("La Información no se actualizó de manera adecuada");
    window.location.href = '/centromedico/Vista/actualizarUsuario.php';
</script>
<?php
}

?>

<!-- Agregar Usuario -->

<!-- /.container-fluid -->
<?php include './footer.php'; ?>