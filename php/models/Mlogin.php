<?php
    $_POST = json_decode(file_get_contents("php://input"),true);

    try {
        //code...
        // conexion base de datos   
        include_once "../conexion.php";

        // $usuario = $_POST["usuario"];
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];

        $stmt = $db->prepare("SELECT id_usuarios, tx_nombre, tx_apellido, tx_usuario, tx_cedula, id_rol FROM tb_001_usuarios WHERE tx_usuario = ? AND tx_password = ? ");

        $stmt->bind_param("ss", $usuario, $password);
        $stmt->execute();
        $stmt->bind_result($id_usuario, $nombre, $apellido, $usuario, $cedula, $rol );

        if($stmt->affected_rows) {

            $existe = $stmt->fetch();

            if($existe) {

                session_start();

                $_SESSION["id_usuarios"] = $id_usuario;
                $_SESSION["tx_nombre"] = $nombre;
                $_SESSION["tx_apellido"] = $apellido;
                $_SESSION["tx_usuario"] = $usuario;
                $_SESSION["tx_cedula"] = $cedula;
                $_SESSION["id_rol"] = $rol;

                $respuesta = array(
                    "tipo" => "success",
                    "data" => "Inicio de sesion Exitoso",
                    "usuario" => $usuario,
                    "rol" => $rol
                );

            } else {
                $respuesta = array(
                    "tipo" => "warning",
                    "data" => "El usuario no se encuentra registrado"
                );
            }
        }
    } catch (Exception $e) {
        $respuesta = array(
            "tipo" => "error",
            "data" => $e->getMessage()
        );
    }

    die(json_encode($respuesta));






?>