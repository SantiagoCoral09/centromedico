<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
    header("location: /centromedico/Vista/iniciarSesion.php");//x=2 significa que no han iniciado sesión
    include './encabezado.php';
?>


<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="card shadow" style="border-radius: 20px; max-height: 420px; overflow: scroll; margin: 20px 10px 10px 10px;">
<!-- Agregar Usuario -->
<div class="card-header bg-gradient-primary">
    <div class="text-center">
        <h1 class="h4 text-light mb-4">Digite el documento del paciente a Eliminar</h1>
    </div>
</div>
<div class="container">
    <div class="card-body">
        <div class="form-horizontal">
            <form id="form1" name="form1" action="" method="POST">
                <div class="form-group">
                    <label class="col-sm-4 control-label">No de documento</label>
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
                        require "../Modelo/pacientes.php";

                        if (isset($_POST['usuario'])) {
                            $objPaciente= new Paciente();
                            $resultado=$objPaciente->ConsultarPaciente($_POST['usuario']);
                            if (isset($resultado))  
                                { if($resultado->num_rows >0 ){
                    ?>
        <div class="card-header py-3">
            <h1 class="m-0 font-weight-bold text-primary" align="center">DATOS DEL PACIENTE</h1>
        </div>
        <div class="table-responsive text-center">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <th class="text-center">Identficacion.</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Apellidos</th>
                    <th class="text-center">Fecha de Nacimiento</th>
                    <th class="text-center">Sexo </th>
                    <th class="text-center">Opción</th>
                </thead>
                <?php
                            while($registro=$resultado->fetch_object())
                            {
                        ?>
                <tr>
                    <td>
                        <?php echo $registro->pacIdentificacion?>
                    </td>
                    <td>
                        <?php echo $registro->pacNombres?>
                    </td>
                    <td>
                        <?php echo $registro->pacApellidos?>
                    </td>
                    <td>
                        <?php echo $registro->pacFechaNacimiento?>
                    </td>
                    <td>
                        <?php echo $registro->pacSexo?>
                    </td>
                    <td align="center">
                        <a href="/centromedico/Vista/borrarPaciente.php?idPaciente=<?php echo $registro->idPaciente?>"
                            title="Clic para Eliminar Paciente">
                            <span class="glyphicon glyphicon-edit text-gray-dark class btn btn-warning">
                                <i class="text-gray-dark">Eliminar</i>
                            </span>
                        </a>
                    </td>


                </tr>
                <?php
                        }  //cerrando el ciclo while
                        ?>
            </table>
        </div>
    </div>
</div>
<?php 
                        }else{  echo '<div class="alert alert-danger text-center">El Paciente No existe en la base de datos</div>';}
                        }
                        }
                    ?>

<?php
if(isset($msj) and $msj==1){
  ?>
<script type="text/javascript">
    alert("EL Paciente FUE ELIMINADO CORRECTAMENTE");
    window.location.href = '/centromedico/Vista/index2.php';
</script>
<?php
}

if(isset($msj) and $msj==2){
  ?>
<script type="text/javascript">
    alert("NO SE PUDO ELIMINAR de manera adecuada");
    window.location.href = '/centromedico/Vista/eliminarPaciente.php';
</script>
<?php
}

?>

<!-- Agregar Usuario -->

<!-- /.container-fluid -->

<?php include './footer.php'; ?>