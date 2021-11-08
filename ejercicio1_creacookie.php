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
    $name = 'Jesus Gonzalez Muñoz';
    $edad=31;
    $frase= $name . " tiene " . $edad;
    setcookie(
        "pruebaCookie",
       $frase,
        time()+10800,
        );

        setcookie("nombre", $name,  time()+10800);
        setcookie("Edad", $edad,  time()+10800);
    
    ?>
</body>
</html>