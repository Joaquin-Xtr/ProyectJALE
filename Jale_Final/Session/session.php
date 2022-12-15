<?php

include("../Conexion/conexion.php");

session_start();

$email = $_POST['email'];
$pass = $_POST['pass'];
$queryusuario = mysqli_query($con,"SELECT * from usuario where email ='$email' ");
$nr = mysqli_num_rows($queryusuario);
$buscarpass = mysqli_fetch_array($queryusuario);
$consulta = "SELECT * from usuario WHERE email = '" . $email . "' AND pass = '" . $pass . "'";

$resultado = mysqli_query($con, $consulta);

$arrayDatos = mysqli_fetch_array($resultado);
if(($nr==1)&&(password_verify($pass,$buscarpass['pass']))){


if (is_array($buscarpass)) {

        if ($buscarpass['nivel'] == 99) {

            $_SESSION['idUsuario'] = $buscarpass['idUsuario'];
            $_SESSION['email'] = $buscarpass['email'];
            $_SESSION['pass'] = $buscarpass['pass'];

            header("Location:../indexAdm.php");
        }
        if ($buscarpass['nivel'] == 0) {

            $_SESSION['idUsuarioUser'] = $buscarpass['idUsuario'];
            $_SESSION['emailUser'] = $buscarpass['email'];
            $_SESSION['passUser'] = $buscarpass['pass'];

            header("Location:../Formulario/verWebsListadas.php");
        }
} 
}else {
    echo '<script language="javascript">alert("USUARIO NO ENCONTRADO!");window.location.href="/Jale_Final/Formulario/ingresar.php"</script>';
}
?>