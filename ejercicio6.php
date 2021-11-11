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
     include "ejercicio6BBDD.php";
  
   
   
     if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name= $_POST["usuario"];
        $name = strip_tags($name);
        $name = stripslashes($name);
        $name = htmlspecialchars($name);
        $contraseña=  $_POST["contraseña"];
        $contraseña= strip_tags($contraseña);
        $contraseña = stripslashes($contraseña);
        $contraseña = htmlspecialchars($contraseña);
        $completo=getUser($name);

        if($completo==false){
            echo "el usuario no es correcto";
        }else{
            if(password_verify($contraseña,$completo["contraseña"])){
                echo "Usuario y contraseña correctas";
            }else{
                echo "Usuario y contraseña incorrectas";
            }    
        }
        }
       
     
     
    ?>

<form class="form-register"    action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    <h2 class="form-titulo">Registro:</h2>
    <div class="contenedor-inputs">
      
        <input type="usuario" name="usuario" placeholder="usuario" class="input-100" required>
        <input type="password" name="contraseña" placeholder="contraseña" class="input-100" required>
       
        
        <input type="submit" value="Entrar" class="btn-enviar">
        <div id="errores"></div>
    </div>
</form>
</body>
</html>