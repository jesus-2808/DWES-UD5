<?php
    session_start();

    if (isset($_SESSION['rol'])) {
        if ($_SESSION['rol'] == "usuario") {
            echo "Hola pringao";
        } else if ($_SESSION['rol'] == "admin") {
            echo "Eres el jefe supremo, ¿no quieres ir a tu página?";
        }
    } else {
        header("Location: ejercicio6.php");
    }
?>