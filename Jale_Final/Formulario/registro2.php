<?php
include("../Diseños/header.html");
include("../Conexion/conexion.php");
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuario Registrado</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <?php
        $xdd1 = $_REQUEST['pass'];
        $pass_fuerte= password_hash($xdd1, PASSWORD_DEFAULT);
        mysqli_query($con, "insert into usuario(nombre,email,pass) values"
                . "('$_REQUEST[nombre]','$_REQUEST[email]','$pass_fuerte')")
                or die("Error en consulta ". mysqli_error($con));
        mysqli_close($con);
        echo "<h1>El usuario se ingreso correctamente</h1> <br>";
        ?>
        <a href="ingresar.php" class="volver">Volver</a>
    </body>
</html>
