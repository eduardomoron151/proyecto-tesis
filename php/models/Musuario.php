<?php 

    include_once "../conexion.php";

    $_POST = json_decode(file_get_contents("php://input"),true);
    date_default_timezone_set("america/caracas");

    if($_POST["tipo"] == "registrarUsuario") {

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $cedula = (int) $_POST["cedula"];
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $rol = (int)$_POST["rol"];
        $fecha = date("Y-m-d H:i:s");

        try {
            $stmt = $db->prepare("SELECT * FROM tb_001_usuarios WHERE tx_usuario = ? OR tx_cedula = ?");
            $stmt->bind_param("si", $usuario, $cedula);
            $stmt->execute();

            if($stmt->affected_rows) {
                $existe = $stmt->fetch();
                if($existe) {
                    $respuesta = array(
                        "titulo" => "Usuario Ya Registrado",
                        "data" => "La cedula y/o el usuario ya se encuentran registrados o estan siendo usados",
                        "tipo" => "warning"
                    );
                } else {
                    $stmt = $db->prepare("INSERT INTO tb_001_usuarios (tx_nombre, tx_apellido, tx_usuario, tx_password, tx_cedula, id_rol, fe_creacion, fe_actualizacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

                    $stmt->bind_param("ssssiiss", $nombre, $apellido, $usuario, $password, $cedula, $rol, $fecha, $fecha);

                    $stmt->execute();

                    if($stmt->affected_rows > 0) {
                        $respuesta = array(
                            "titulo" => "Exito",
                            "data" => "El usuario se creo correctamente",
                            "tipo" => "success"
                        );
                    } else {
                        $respuesta = array(
                            "titulo" => "Advertencia",
                            "data" => "Ocurrio un error al agregar el usuario",
                            "tipo" => "warning"
                        );
                    }
                }
            }

        } catch (Exception $e) {
            $respuesta = array(
                "titulo" => "Error al realizar la consulta",
                "data" => $e->getMessage(),
                "tipo" => "error"
            );
        }

        die(json_encode($respuesta));

    }

    if(isset($_GET['tipo']) && $_GET["tipo"] == "buscarUsuario") {
        
        $cedula = (int)$_GET["cedula"];

        try {
            $sql = "SELECT U.*, R.tx_nombre as rol FROM tb_001_usuarios U JOIN tb_002_rol R ON R.id_rol = U.id_rol  WHERE tx_cedula = $cedula";
            $resultado = $db->query($sql);
            $datos = $resultado->fetch_assoc();

            if($datos) {
                $respuesta = array(
                    "titulo" => "Usuario encontrado",
                    "data" => $datos,
                    "tipo" => "success"
                );
            } else {
                $respuesta = array(
                    "titulo" => "Usuario no encontrado",
                    "data" => "Este usuario no se encuentra registrado",
                    "tipo" => "warning"
                );
            }
        } catch (Exception $e) {
            $respuesta = array(
                "titulo" => "Error al realizar la consulta",
                "data" => $e->getMessage(),
                "tipo" => "error"
            );
        }
        die(json_encode($respuesta));

    }

    if($_POST["tipo"] == "actualizarUsuario") {

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $cedula = (int) $_POST["cedula"];
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $rol = (int)$_POST["rol"];
        $idusuario = (int)$_POST["idusuario"];
        $fecha = date("Y-m-d H:i:s");

        try {
            
            $stmt = $db->prepare("UPDATE tb_001_usuarios SET tx_nombre = ?, tx_apellido = ?, tx_usuario = ?, tx_password = ?, tx_cedula = ?, id_rol = ?, fe_actualizacion = ? WHERE id_usuarios = ?");
            $stmt->bind_param("ssssiisi", $nombre, $apellido, $usuario, $password, $cedula, $rol, $fecha, $idusuario);
            $stmt->execute();

            if($stmt->affected_rows > 0){
                $respuesta = array(
                    "titulo" => "Exito",
                    "data" => "El usuario se Edito exitosamente",
                    "tipo" => "success"
                );
            } else {
                $respuesta = array(
                    "titulo" => "Advertencia",
                    "data" => "Ocurrio un error al Editar el usuario",
                    "tipo" => "warning"
                );
            }

        } catch (Exception $e) {
            $respuesta = array(
                "titulo" => "Error al realizar la consulta",
                "data" => $e->getMessage(),
                "tipo" => "error"
            );
        }

        die(json_encode($respuesta));

    }

    if($_POST["tipo"] == "eliminarUsuario") {

        $idusuario = (int)$_POST["idusuario"];

        try {
            
            $stmt = $db->prepare("DELETE FROM tb_001_usuarios WHERE id_usuarios = ?");
            $stmt->bind_param("i", $idusuario);
            $stmt->execute();

            if($stmt->affected_rows > 0){
                $respuesta = array(
                    "titulo" => "Exito",
                    "data" => "El usuario se ha eliminado exitosamente",
                    "tipo" => "success"
                );
            } else {
                $respuesta = array(
                    "titulo" => "Advertencia",
                    "data" => "Ocurrio un error al Eliminar el usuario",
                    "tipo" => "warning"
                );
            }

        } catch (Exception $e) {
            $respuesta = array(
                "titulo" => "Error al realizar la consulta",
                "data" => $e->getMessage(),
                "tipo" => "error"
            );
        }

        die(json_encode($respuesta));

    }



?>