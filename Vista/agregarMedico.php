<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
    header("location: /centromedico/Vista/iniciarSesion.php");//x=2 significa que no han iniciado sesión
include './encabezado.php'; ?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="card shadow"
  style="border-radius: 20px; max-height: 420px; overflow: scroll; margin: 20px 100px 0px 100px;">
  <!-- Agregar Usuario -->
  <div class="card-header bg-gradient-primary">
    <div class="text-center">
      <h1 class="h4 text-light mb-4">Agregar Médico</h1>
    </div>
  </div>
  <div class="container">
    <div class="card-body">
      <div class="form-horizontal">

        <form class="user" id="form1" name="form1" action="/centromedico/Controlador/MedicoValidarInsertar.php"
          method="POST">

          <div class="form-group">
            <label class="col-sm-4 control-label">Identificación</label>
            <input name="identificacion" type="number" id="identificacion" placeholder="Digite No de Identificación"
              class="form-control form-control-user col-sm-5" required>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Nombres</label>
            <input name="nombres" type="text" id="nombres" placeholder="Digite sus Nombres"
              class="form-control form-control-user col-sm-5" required>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Apellidos</label>
            <input name="apellidos" type="text" id="apellidos" placeholder="Digite sus Apellidos"
              class="form-control form-control-user col-sm-5" required>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label"> Especialidad </label>
            <select class="col-sm-5 form-control input-lg " name="especialidad">
              <option value="Medico General">Médico General</option>
              <option value="Pediatra">Pediatra</option>
              <option value="Dermatologo">Dermatólogo</option>
            </select>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Celular</label>
            <input name="telefono" type="number" id="telefono" placeholder="Digite su No de celular"
              class="form-control form-control-user col-sm-5" required>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Correo</label>
            <input name="correo" type="email" id="correo" placeholder="Digite su Correo"
              class="form-control form-control-user col-sm-5" required>
          </div>


          <div>
            <div class="form-group">
              <label class="col-sm-4 control-label"></label>
              <div class="col-sm-5">
                <button type="submit" class="btn btn-primary btn-user btn-block"> Guardar</button>
              </div>
            </div>
          </div>
        </form>
        <hr>

      </div>
    </div>

    <!-- Agregar Usuario -->

  </div>
</div>
<!-- /.container-fluid -->

<?php include './footer.php'; ?>