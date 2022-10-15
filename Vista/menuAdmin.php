<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/centromedico/Vista/index2.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Centro Médico</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/centromedico/Vista/index2.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Gestión de Usuarios
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user"></i>
            <span>Usuarios</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Acciones:</h6>
                <a class="collapse-item" href="/centromedico/Vista/agregarUsuario.php">Agregar Usuario</a>
                <a class="collapse-item" href="/centromedico/Vista/actualizarUsuario.php">Editar Usuario</a>
                <a class="collapse-item" href="/centromedico/Vista/consultarUsuario.php">Consultar un Usuario</a>
                <a class="collapse-item" href="/centromedico/Vista/listarUsuarios.php">Listar Usuarios</a>
                <a class="collapse-item" href="/centromedico/Vista/eliminarUsuario.php">Eliminar Usuario</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-user"></i>
            <span>Médicos</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Acciones:</h6>
                <a class="collapse-item" href="/centromedico/Vista/agregarMedico.php">Agregar Médico</a>
                <a class="collapse-item" href="/centromedico/Vista/actualizarMedico.php">Editar Médico</a>
                <a class="collapse-item" href="/centromedico/Vista/consultarMedico.php">Consultar un Médico</a>
                <a class="collapse-item" href="/centromedico/Vista/listarMedicos.php">Listar Médicos</a>
                <a class="collapse-item" href="/centromedico/Vista/eliminarMedico.php">Eliminar Médico</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
            aria-expanded="true" aria-controls="collapseUtilities2">
            <i class="fas fa-fw fa-user"></i>
            <span>Pacientes</span>
        </a>
        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Acciones:</h6>
                <a class="collapse-item" href="/centromedico/Vista/agregarPaciente.php">Agregar Paciente</a>
                <a class="collapse-item" href="/centromedico/Vista/actualizarPaciente.php">Editar Paciente</a>
                <a class="collapse-item" href="/centromedico/Vista/consultarPaciente.php">Consultar un Paciente</a>
                <a class="collapse-item" href="/centromedico/Vista/listarPacientes.php">Listar Pacientes</a>
                <a class="collapse-item" href="/centromedico/Vista/eliminarPaciente.php">Eliminar Paciente</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Gestión de Citas
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Citas</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Acciones:</h6>
                <a class="collapse-item" href="/centromedico/Vista/agregarCita.php">Registrar Cita</a>
                <a class="collapse-item" href="/centromedico/Vista/atenderCita.php">Citas sin Atender</a>
                <a class="collapse-item" href="/centromedico/Vista/listarCitas.php">Listar Citas Atendidas</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Tables 
        //////Estos listados ya estan en cada menu de arriba
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true"
            aria-controls="collapsePages2">
            <i class="fas fa-fw fa-table"></i>
            <span>Reportes</span></a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Mostrar reportes:</h6>
                <a class="collapse-item" href="/centromedico/Vista/listarUsuarios.php">Listar Usuarios</a>
                <a class="collapse-item" href="/centromedico/Vista/listarMedicos.php">Listar Médicos</a>
                <a class="collapse-item" href="/centromedico/Vista/listarPacientes.php">Listar Pacientes</a>
                <a class="collapse-item" href="/centromedico/Vista/listarCitas.php">Listar Citas Atendidas</a>
                <a class="collapse-item" href="/centromedico/Vista/atenderCita.php">Listar Citas sin Atender</a>
            </div>
        </div>
    </li>-->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->