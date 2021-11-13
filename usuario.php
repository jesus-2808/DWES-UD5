<?php
    session_start();

    if (empty($_SESSION["rol"])) {
        header("Location: ejercicio7.php");    
    }else if ($_SESSION["rol"]=="admin") {
        echo"Eres el jefe supremo, ¿no quieres ir a tu pagina?";    
    }else{
        echo "hola pringao";
    }
?>