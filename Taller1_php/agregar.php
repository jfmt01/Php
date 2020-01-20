<?php
    require ('conexion.php');

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $profesion = $_POST['profesion'];
    $tecnologia = $_POST['tecnologia'];

    $sql = "INSERT INTO alumnos (nombre, apellido, telefono, profesion, tecFavorita) 
    VALUES ('$nombre', '$apellido', '$telefono', '$profesion', '$tecnologia')";

    mysqli_query($conexion, $sql);

    header('Location: taller1.php');
?>