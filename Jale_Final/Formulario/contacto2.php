<?php
include("../Diseños/header.html");
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Contacto</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <?php
        $conexion = mysqli_connect("localhost","root","","jale") or
                die("Problema de conexión");

        mysqli_query($conexion, "insert into ticket(nombre,correo,problema,descripcion,activo) values"
                . "('$_REQUEST[nombre]','$_REQUEST[correo]','$_REQUEST[problema]','$_REQUEST[descripcion]',1)")
                or die("Error en consulta ". mysqli_error($conexion));

        mysqli_close($conexion);
        echo "<h3>Su ticket al soporte ha sido enviado correctamente</h3> <br>";
        echo "<h5>La administración se contactará mediante un correo, porfavor atento a su correo de Spam o no deseado</h5> <br>";
        ?>
        <a href="../Formulario/verWebsListadas.php" class="volver">Volver</a>

    </body>
</html>