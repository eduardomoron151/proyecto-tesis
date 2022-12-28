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

<body id="page-top">

    <div id="wrapper">

        <?php include_once "./php/templates/menu.php"; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include_once "./php/templates/navbar.php"; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Administracion de Usuarios (Modificar Usuario)</h1>
                    </div>

                    <!-- Boton para buscar en auditoria -->
                    <div class="row">
                        <form method="POST" id="formularioBuscarAuditoria" class="d-none d-sm-inline-block form-inline my-4 mx-auto p-auto">
                            <div class="input-group">
                                <input type="text" id="cedulaIndicador" class="form-control border-1 small" placeholder="Indique cedula" autofocus>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Resultados busqueda de usuario -->
                    <div class="row mb-4 usuario-auditoria justify-content-center">
                        <div class="col-md-6">
                            <div class="p-4">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Datos a Actualizar</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="nombre" placeholder="Ingrese el nombre">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="apellido" placeholder="Ingrese el apellido">
                                    </div>

                                    <div class="form-group">
                                        <input type="number" class="form-control form-control-user" id="cedula" placeholder="Ingrese la cedula">
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="usuario" placeholder="Usuario">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user" id="password" placeholder="Contraseña">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Seleccione un Rol:</label>
                                        <select class="form-control" name="" id="">
                                            <option selected disabled value="">-Opciones-</option>
                                            <option value="1">Administrador</option>
                                            <option value="2">Tecnico</option>
                                            <option value="3">Usuario</option>
                                        </select>
                                    </div>

                                    <button class="btn btn-primary btn-user btn-block">Actualizar</button>
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include_once "./php/templates/footer.php"; ?>

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>


</body>

</html>