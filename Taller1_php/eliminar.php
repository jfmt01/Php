 
<?php

require('conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM alumnos WHERE id_alumnos='$id'";

mysqli_query($conexion, $sql);

header('Location: taller1.php');


?>
