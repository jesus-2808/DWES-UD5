<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "ejercicio5BBDD.php";
    $usuario="";
    $contraseña="";
    $cuenta="";



    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $usuario = $_POST["usuario"];
        $contraseña=  $_POST["contraseña"];
        $cuenta= $_POST["cuenta"];



        $contraseña= password_hash($contraseña, PASSWORD_DEFAULT);
        insertaUser($usuario,$contraseña,$cuenta);

    }
    
    ?>
    

    <form class="form-register"    action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <h2 class="form-titulo">Registro:</h2>
            <div class="contenedor-inputs">
              
                <input type="usuario" name="usuario" placeholder="usuario" class="input-100" required>
                <input type="password" name="contraseña" placeholder="contraseña" class="input-100" required>
                <input type="cuenta" name="cuenta" placeholder="cuenta" class="input-100" required>
                
                <input type="submit" value="Entrar" class="btn-enviar">
                <div id="errores"></div>
            </div>
        </form>

</body>
</html>