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
    session_start();
    echo "<table border =2>";
    echo "<th>", "session.use_cookies", "</th>";
    echo "<th>", "session.use_only_cookies", "</th>";
    echo "<th>", "session.save_handler", "</th>";
    echo "<th>", "session.name", "</th>";
    echo "<th>", "session.auto_start", "</th>";
    echo "<th>", "session.cookie_lifetime", "</th>";
    echo "<th>", "session.gc_maxlifetime", "</th>";
       
        echo "<tr>";

        echo "<td>";
     
        echo "puede ser 0 o 1. Por defecto es 1";
   
        echo "</td>";
        echo "<td>";
     
        echo "Puede ser 0 o 1, por defecto es 1";
   
        echo "</td>";

        echo "<td>";
     
        echo "Definicion del nombre del gestor que se usa para almacenar y recuperar info relacionada con una sesion, por defecto es files";
   
        echo "</td>";

        echo "<td>";
     
        echo "Nombre de la sesion usada como cookie.Solo debería contener caracteres alfanumericos. Por defecto es PHPSESSID";
   
        echo "</td>";

        echo "<td>";
     
        echo "especifica si el módulo de sesión inicia una sesión automáticamente cuando arranque una petición. Por defecto es 0 (deshabilitado).";
   
        echo "</td>";

        echo "<td>";
     
        echo "especifica el tiempo de vida en segundos de la cookie que es enviada al navegador. El valor 0 significa hasta que el navegador se cierre. Por defecto es 0.";
   
        echo "</td>";

        echo "<td>";
     
        echo "especifica el número de segundos después de lo cual la información sea vista como 'basura' y potencialmente limpiada. La recolección de basura puede suceder durante el inicio de sesiones ";
        echo "</td>";
       
        echo "</tr>";
      
    
    echo "</table>";
    ?>
</body>
</html>