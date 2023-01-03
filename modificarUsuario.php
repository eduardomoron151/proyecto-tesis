<?php
    include_once "./php/functions/sesiones.php";
    include_once "./php/conexion.php";

    $sql = "SELECT id_rol, tx_nombre FROM tb_002_rol";
    $resultado = $db->query($sql);
    // $data = $resultado->fetch_all();

    while($row = $resultado->fetch_assoc() ){
        $respuesta[] = $row;
    }
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
                        <h1 class="h3 mb-0 text-gray-800">Administracion de Usuarios (Modificar Usuario)</h1>
                    </div>

                    <!-- Boton para buscar en auditoria -->
                    <div class="row">
                        <form class="d-sm-inline-block form-inline my-4 mx-auto p-auto">
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
                        <div class="col-md-6">
                            <div class="p-4">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Datos a Actualizar</h1>
                                </div>
                                <form class="user">
                                        <input type="hidden" id="idusuario">

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
                                        <select class="form-control" name="rol" id="rol">
                                            <option selected disabled value="">-Opciones-</option>
                                            <?php foreach ($respuesta as $key => $value) { ?>
                                                <option value="<?php echo $value['id_rol']; ?>"><?php echo $value["tx_nombre"]; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <button id="actualizarUsuario" class="btn btn-primary btn-user btn-block">Actualizar</button>
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



    <!-- sweetalert -->
    <script src="js/sweetalert2@11.js"></script>

    <!-- Axios -->
    <script src="js/axios.min.js"></script>

    <script src="js/modificarUsuario.js"></script>


</body>

</html>