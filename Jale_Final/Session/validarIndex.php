<?php

session_start();

if (isset($_SESSION['idUsuario']) && isset($_SESSION['email']) && isset($_SESSION['pass'])) {
    header('location: ../index.php');
} else {
    header('location: ../indexSession.php');
}

?>