<?php 
    include_once "./php/functions/sesiones.php";
?>

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

    <!-- estilos propios -->
    <link rel="stylesheet" href="css/main.css">
    

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
                        <form class=" d-sm-inline-block form-inline my-4 mx-auto p-auto">
                            <div class="input-group">
                                <input type="text" id="cedulaBuscar" class="form-control border-1 small" placeholder="Indique cedula" autofocus>
                                <div class="input-group-append">
                                    <button id="btnCedulaBuscar" class="btn btn-primary" type="submit">
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
                                                <span id="usuario"></span>
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
                                                <span id="cedula"></span>
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
                                                <span id="nombre"></span>
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
                                                <span id="apellido"></span>
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
                                                <span id="rol"></span>
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
                                                <span id="fe_creacion">N/A</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>

                                    <div class="row no-gutters align-items-center mb-4">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Fecha de Actualizaci??n</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <span id="fe_actualizacion">N/A</span>
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



    <!-- sweetalert -->
    <script src="js/sweetalert2@11.js"></script>

    <!-- Axios -->
    <script src="js/axios.min.js"></script>

    <script src="js/consultarUsuario.js"></script>


</body>

</html>