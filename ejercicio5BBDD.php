 <?php
 
 function creaConexion(){
    $servidor = "localhost";
   $baseDatos = "autenticacion";
   $usuario = "developer";
   $pass = "developer";
      try{
          $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
      return $conexion;
     
   
      }catch (PDOException $e){
          return false;
          echo"Connection fallida: " . $e->getMessage();
      }
  }
 function insertaUser( $usuario, $contraseña, $cuenta){
  
        $conexion=creaConexion();
   
    
        $sql = $conexion->prepare("INSERT into registro(usuario,contraseña,cuenta) values(?,?,?)");
        $sql->bindParam(1, $usuario);
        $sql->bindParam(2, $contraseña);
        $sql->bindParam(3, $cuenta);
       
        $sql->execute();
        $id = $conexion->lastInsertId();
        $conexion = null;
        return $id;
      }
  
  

      ?>