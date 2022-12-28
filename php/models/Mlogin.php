<?php
    // conexion base de datos   


    // parametros
    $data = json_decode(file_get_contents('php://input'), true);

    $usuario = $data["formData"]["usuario"];
    $password = $data["formData"]["password"];

    $respuesta = [];

    // Consulta sql

    // generar variables de sesion


    // devolver respuesta

    echo json_encode(true)



?>