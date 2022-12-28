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
                        <h1 class="h3 mb-0 text-gray-800">Administracion de Usuarios (Consultar Usuario)</h1>
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
                            <div class="card border-left-secondary shadow">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center mb-4">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Usuario</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-capitalize">
                                                <span id="usuarioAuditoria">moronen</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>

                                    <div class="row no-gutters align-items-center mb-4">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Cedula</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <span id="cedulaAuditoria">20740857</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-id-card fa-2x text-gray-300"></i>
                                        </div>
                                    </div>

                                    <div class="row no-gutters align-items-center mb-4">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nombre</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <span id="cedulaAuditoria">Eduardo</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-id-card fa-2x text-gray-300"></i>
                                        </div>
                                    </div>

                                    <div class="row no-gutters align-items-center mb-4">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Apellido</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <span id="cedulaAuditoria">Moron</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-id-card fa-2x text-gray-300"></i>
                                        </div>
                                    </div>

                                    <div class="row no-gutters align-items-center mb-4">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Rol</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <span id="correoAuditoria">Administrador</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-address-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>

                                    <div class="row no-gutters align-items-center mb-4">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Fecha de registro</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <span id="fechaRegistroAuditoria">24-12-2022</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>

                                    <div class="row no-gutters align-items-center mb-4">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Fecha de Actualización</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <span id="fechaActualizadoAuditoria">Sin fecha de actualizacion</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-calendar-check fa-2x text-gray-300"></i>
                                        </div>
                                    </div>

                                </div>
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