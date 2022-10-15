<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
    header("location: /centromedico/Vista/iniciarSesion.php");//x=2 significa que no han iniciado sesión
    include 'encabezado.php';

?>
<!-- End of Topbar -->
<!-- Begin Page Content -->
<div class="card shadow" style="border-radius: 20px; height: 300px; max-width: 1000px;  margin: 20px 100px 0px 100px;">
  <!-- Agregar Usuario -->
  <div class="card-header bg-gradient-primary">
      <div class="text-center">
          <h1 class="h4 text-light mb-4">Bienvenido a nuestro Centro Médico</h1>
      </div>
  </div>
<div class="container">

  <!-- Page Heading --><br>
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class="h3 mb-0 text-gray-800 text-center">Puedes acceder a las opciones del menu lateral</h3>
  </div>



</div>
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