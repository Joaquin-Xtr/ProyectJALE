<?php


include_once '../Conexion/conexion.php';
$codigo = $_GET['idSuge'];
$sentencia = $con->prepare("UPDATE contacto SET activo = '0' where idTicket = ?;");
$resultado = $sentencia->execute([$codigo]);


if ($resultado === TRUE){
    header('Location: verContacto.php?mensaje=eliminado');
}else{
    header('Location: verContacto.php?mensaje=error');
    exit();
}

?>