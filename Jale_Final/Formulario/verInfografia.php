<?php
include("../Diseños/header.html");
include("../Conexion/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFOGRAFIAS</title>
    <link rel="stylesheet" href="../Css/test2.css">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>
    <div class="my-5" id="borderLeft">
        <h4 class="titulo text-primary">INFOGRAFIAS</h4>
        <p>Sección creada para ayudar con la utilización de los principales sitios web</p>
        <p>Cada manual representará de manera gráfica como utilizar las principales redes sociales y aplicaciones de hoy en día</p>
    </div>
    <div class="container">
        <?php
        $sql = "SELECT * from infografia";
        $result = mysqli_query($con, $sql);
        $text = ['url'];
        while ($mostrar = mysqli_fetch_array($result)) {
        ?>
            <div class="post">
                <div class="img">
                    <img src="data:image/jpg;base64, <?php echo base64_encode($mostrar["foto"]); ?>">
                </div>
                <div class="info">
                    <div class="titulo"><?php echo $mostrar['nombre'] ?></div>
                    <div class="descripcion fs-3">Haz click en <a href="<?php echo $asd ?>" class="link1" target="_blank">Ver más</a> para revisar el material</div>
                    <?php $asd = $mostrar['url'] ?>
                    <a href="<?php echo $asd ?>" class="btn btn-outline-primary mt-5 fs-2" target="_blank">Visitar Sitio</a>
                    <a onclick="return confirm('Debes inciar sesión');" class="btn mt-5 text-danger" href="ingresar.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                    </a>
                </div>
            </div>
        <?php
        }
        ?>
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