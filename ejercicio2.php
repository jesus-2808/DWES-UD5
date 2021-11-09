<?php
session_start();
echo $_SESSION["nombre"]="El nombre de la sesion es Jesus Gonzalez";
echo $_SESSION["edad"]=31;
echo "</br>";
echo "el id de sesion es: ";
echo session_id() ;
?>