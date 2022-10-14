<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
    header("location: /centromedico/Vista/iniciarSesion.php");//x=2 significa que no han iniciado sesión
    include 'encabezado.php';

?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    ---------------------------------------------------------------------------------------
                    Contenido principal
                    ----------------------------------------------------------------------------------



                </div>
                <!-- /.container-fluid -->

            

<?php
include 'footer.php'; 
if(isset($msj) and $msj==1){
  ?>
<script type="text/javascript">
    alert("El registro se ha guardado correctamente!");
    window.location.href = '/centromedico/Vista/index2.php';
</script>
<?php
  };
if(isset($msj) and $msj==2){
  ?>
<script type="text/javascript">
    alert("El registro no pudo ser guardado, favor validar!");
    window.location.href = '/centromedico/Vista/index2.php';
</script>
<?php
}
?>