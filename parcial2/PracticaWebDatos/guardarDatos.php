<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $sexo = $_POST["sexo"];
    $edad = $_POST["edad"];
    $domicilio = $_POST["domicilio"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];

    $sql = "INSERT INTO usuarios (nombre, edad, sexo, domicilio, fecha_nacimiento)". 
    "VALUES ('".$nombre."', ".$edad.", ".$sexo.",'".$domicilio."', '".$fecha_nacimiento."')";

    if($conexion->query($sql) === TRUE){
     echo "Registro guardado con éxito <a href='consultarDatos.php'>Regresar</a>";
    }
    else{
     echo "Error: " .$sql. "<br>" .$consexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>;";

    }

    $conexion->close();

?>