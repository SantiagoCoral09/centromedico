<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Centro médico</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body background="img/fondo.webp">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center"  >
            <div class="col-xl-10 col-lg-12 col-md-9 bg-gradient-primary" style="margin-top: 20px; border-radius: 40px;">
                <div class="card o-hidden border-0 shadow-lg my-5" style="border-radius: 40px;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="img/perfil1.jpg" alt="" width="500px">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="text-primary card-title mb-4">Bienvenido!</h1>
                                    </div>
                                    <form class="user" id="form1" name="form1" method="post"
                                        action="../Controlador/validarIniciarSesion.php" role="form">

                                        <hr>
                                        <div class="form-group">
                                            <label for="usrname"><span class="glyphicon glyphicon-user"></span>
                                                Usuario</label>
                                            <input name="login" type="text" id="login"
                                                class="form-control form-control-user" placeholder="Ingrese Usuario"
                                                required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>
                                                Password</label>
                                            <input name="pass" type="password" id="pass"
                                                class="form-control form-control-user" placeholder="Enter password"
                                                required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block"><span
                                                class="glyphicon glyphicon-off"></span> Ingresar</button>

                                    </form>
                                    <hr>
                                    <?php
                                        if (isset($_GET['errorlogin']) and $_GET['errorlogin'] == 1) {
                                    ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Usuario no está Registrado! o Contraseña Incorrecta</strong> Ingrese los datos correctos.
                                        <!-- <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button> -->
                                    </div>
                                    <?php } ?>
                                    <div class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>