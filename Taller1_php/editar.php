<?php

    require("conexion.php");

    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $telefono = $_GET['telefono'];
    $profesion = $_GET['profesion'];
    $tecnologia = $_GET['tecnologia'];

    $sql = "UPDATE `alumnos`  SET 
    `nombre` = '$nombre', 
    `apellido` = '$apellido', 
    `profesion` = '$profesion', 
    `tecFavorita` =  '$tecnologia' WHERE id_alumnos='$id'";

    mysqli_query($conexion, $sql);

    header('Location: taller1.php');

    ?>