<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SISTEMA DE REPORTES</title>

    

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido</h1>
                                        <form id="formularioLogin">
                                            <div class="form-group">
                                                <input 
                                                    type="text" 
                                                    required
                                                    autocomplete="off"
                                                    class="form-control form-control-user"
                                                    id="usuario" 
                                                    name="usuario"
                                                    aria-describedby="usuario"
                                                    placeholder="Indique su usuario...">
                                            </div>
                                            <div class="form-group">
                                                <input 
                                                    type="password" 
                                                    autocomplete="off"
                                                    required
                                                    class="form-control form-control-user"
                                                    id="password" 
                                                    name="password"
                                                    placeholder="Indique su contraseña...">
                                            </div>
                                            <button id="iniciarSesion" class="btn btn-primary btn-user btn-block">Iniciar Sesion</button>
                                            <hr>
                                        </form>
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

    <!-- sweetalert -->
    <script src="js/sweetalert2@11.js"></script>

    <!-- Axios -->
    <script src="js/axios.min.js"></script>

    <!-- Script login -->
    <script src="js/login.js"></script>
</body>
</html>