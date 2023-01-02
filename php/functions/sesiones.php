<?php

    function estaAutenticado() {

        if(!isset($_SESSION["id_usuarios"])) {

            header("Location: index.php");
            exit();

        }

    }

    session_start();
    estaAutenticado();


?>