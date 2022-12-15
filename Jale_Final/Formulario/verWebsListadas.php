<?php
//include("../Session/sessionUser.php");
include("../Diseños/header1.html");
include("../Conexion/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../Css/test3.css">
    <title>Mostrar Sitios web</title>
</head>

<body>
    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Se ha eliminado correctamente el sitio web de su perfil
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>

    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>ERROR!</strong> Vuelva a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>

    <div id="mainTitle">
        <div class="my-5" id="borderLeft">
            <h4 class="titulo text-primary">MIS SITIOS WEBS</h4>
            <p>Sección creada para revisar los principales sitios web guardados por usted</p>
        </div>
    </div>

    <div class="contenedor">

        <div class="contenido">
            <?php
            $sql = "SELECT * from web where activo = idWeb ";
            $result = mysqli_query($con, $sql);
            $text = ['url'];
            while ($mostrar = mysqli_fetch_array($result)) {
            ?>
                <div class="post">
                    <div class="personalImg">
                        <img src="data:image/jpg;base64, <?php echo base64_encode($mostrar["foto"]); ?>">
                    </div>
                    <div class="info">
                        <div class="titulo text-primary"><?php echo $mostrar['nombre'] ?></div>
                        <div class="descripcion fs-3">
                            <h2><?php echo $mostrar['valoracion'] ?> ★</h2>
                            <?php echo $mostrar['descripcion'] ?>
                            <?php $asd1 = $mostrar['tipo'] ?>
                            <h4 class="mt-4 text-primary"><?php echo $mostrar['tipo'] ?></h4>
                        </div>
                        <?php $asd = $mostrar['url'] ?>
                        <div class="botonera">
                            <a href="<?php echo $asd ?>" class="btn btn-outline-primary fs-2" target="_blank">Visitar Sitio</a>
                            <input type="hidden" name="codigo" value="<?php echo $mostrar['idWeb']; ?>">
                            <a onclick="return confirm('¿Desea desvincular este sitio web de su perfil?');" class="text-primary" href="eliminarWeb.php?idWeb=<?php echo $mostrar['idWeb'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="personalCont">
            <div id="borderLeft">
                <h4 class="titulo text-primary">RECOMENDADOS</h4>
                <p>Principales recomendaciones de sitios web según sus gustos</p>
            </div>
            <?php
            if (isset($asd1)) {
                $sql = "SELECT * from web where reco = '1' and tipo='$asd1' order by valoracion DESC";
                $sql2 = "SELECT * from estrellas where cantidad = '5'";
                $result = mysqli_query($con, $sql);
                $text = ['url'];
                $cat = ['tipo'];
                while ($mostrar = mysqli_fetch_array($result)) {
            ?>
                    <div class="post">

                        <div class="info">
                            <div class="titulo"><?php echo $mostrar['nombre'] ?></div>
                            <div class="descripcion fs-3">
                                <h2><?php echo $mostrar['valoracion'] ?> ★</h2>
                                <?php echo $mostrar['descripcion']
                                ?>
                                <?php $asd1 = $mostrar['tipo'] ?>
                                <h4 class="mt-4 text-primary"><?php echo $mostrar['tipo'] ?></h4>
                            </div>
                            <?php $asd = $mostrar['url'] ?>
                            <div class="botonera">
                                <a href="<?php echo $asd ?>" class="btn btn-outline-primary fs-2" target="_blank">Visitar Sitio</a>
                                <input type="hidden" name="codigo" value="<?php echo $mostrar['idWeb']; ?>">

                                <a onclick="return confirm('¿Desea agregar este Sitio Web?');" class="text-primary" href="agregarWeb.php?idWeb=<?php echo $mostrar['idWeb'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php
                }
            } else {
                ?>
                <h3>No se puede recomendar nada</h3>
            <?php
            }
            ?>
        </div>

    </div>

    <!-- Button TOP -->
    <button onclick="topFunction()" id="myBtn">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
            <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z" />
        </svg>
    </button>

</body>

<?php
include("../Diseños/footer.html");
?>
<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>