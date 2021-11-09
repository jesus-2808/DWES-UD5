<?php
session_start();
echo session_id();
echo  $_SESSION["nombre"];
echo "</br>";
echo $_SESSION["edad"];

?>