<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
    header("location: /centromedico/Vista/iniciarSesion.php");//x=2 significa que no han iniciado sesión
include './encabezado.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Agregar Usuario -->
                    <div class="container">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Agregar Nuevo Paciente</h1>
                        </div>
                        <div class="form-horizontal">
                            
                            <form class="user" id="form1" name="form1"
                                action="/centromedico/Controlador/PacienteValidarInsertar.php" method="POST">

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Identificación</label>
                                    <input name="identificacion" type="number" id="identificacion"
                                        placeholder="Digite No de Identificación" class="form-control form-control-user col-sm-5"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" >Nombres</label>
                                     <input name="nombres" type="text" id="nombres" placeholder="Digite sus Nombres" class="form-control form-control-user col-sm-5" required>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-4 control-label" >Apellidos</label>
                                     <input name="apellidos" type="text" id="apellidos" placeholder="Digite sus Apellidos" class="form-control form-control-user col-sm-5" required>
                                  </div>
                                  <div class="form-group">
          <label class="col-sm-4 control-label" >Fecha de Nacimiento</label>
           <input name="fechaNacimiento" type="date" id="fechaNacimiento"  class="form-control col-sm-5" required>
        </div>

                                  <div class="form-group">    
                                    <label class="col-sm-4 control-label" > Sexo   </label>             
                                    <select class="col-sm-5 form-control input-lg " name="sexo">    
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>              
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
                <!-- /.container-fluid -->

<?php include './footer.php'; ?>
