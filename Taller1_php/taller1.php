<?php
require('conexion.php');
$sql = "SELECT * FROM alumnos";
$resultado = mysqli_query($conexion, $sql);
$alumnos = mysqli_fetch_all($resultado);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Clase Fullstack</h1><br>
    <form action="agregar.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellido" placeholder="Apellido">
        <input type="number" name="telefono" placeholder="Teléfono">
        <input type="text" name="profesion" placeholder="Profesión">
        <input type="text" name="tecnologia" placeholder="Tecnología favorita">
        <input type="submit" name="enviar" value="Registrar">
    </form>
    <h2>Lista de alumnos:</h2> <br>
    <?php
    foreach ($alumnos as $alumno) :
    ?>
        <p>
            <form action="editar.php" method="GET">
                
                <input type="hidden" name="id" value="<?php echo $alumno[0]; ?>">
                <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $alumno[1]; ?>">
                <input type="text" name="apellido" placeholder="Apellido" value="<?php echo $alumno[2]; ?>">
                <input type="number" name="telefono" placeholder="Teléfono" value="<?php echo $alumno[3]; ?>">
                <input type="text" name="profesion" placeholder="Profesión" value="<?php echo $alumno[4]; ?>">
                <input type="text" name="tecnologia" placeholder="Tecnología favorita" value="<?php echo $alumno[5]; ?>">
                <button type="submit">Editar</button>
                <button><a href="eliminar.php?id=<?php echo $alumno[0] ?>">Eliminar</a></button>
            </form>
            
        </p>
    <?php endforeach; ?>


</body>

</html>