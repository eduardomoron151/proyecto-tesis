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
                        <h1 class="h3 mb-0 text-gray-800">Administracion de Usuarios (Eliminar Usuario)</h1>
                    </div>

                    <!-- Boton para buscar en auditoria -->
                    <div class="row">
                        <form method="POST" id="formularioBuscarAuditoria" class=" d-sm-inline-block form-inline my-4 mx-auto p-auto">
                            <div class="input-group">
                                <input type="text" id="cedulaBuscar" class="form-control border-1 small" placeholder="Indique cedula" autofocus>
                                <div id="btnCedulaBuscar" class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Resultados busqueda de usuario -->
                    <div class="row mb-4 usuario-auditoria justify-content-center">

                        <div class="col-md-12">

                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Usuarios</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Usuario</th>
                                                    <th>Cedula</th>
                                                    <th>Rol</th>
                                                    <th>Fecha creacion</th>
                                                    <th>Fecha actualizacion</th>
                                                    <th>Accion</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td id="nombre"></td>
                                                    <td id="apellido"></td>
                                                    <td id="usuario"></td>
                                                    <td id="cedula"></td>
                                                    <td id="rol"></td>
                                                    <td id="fe_creacion">N/A</td>
                                                    <td id="fe_actualizacion">N/A</td>

                                                    <td>
                                                        <input type="hidden" id="idusuario">
                                                        <button id="eliminarUsuario" class="btn btn-danger btn-block btn-sm">Eliminar</button>
                                                    </td>

                                                </tr>
                                                
                                            </tbody>
                                        </table>
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

    <script src="js/eliminarUsuario.js"></script>



</body>

</html>