<?php
include("../Diseños/header.html");
include("../Conexion/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../Css/test2.css">
    <title>NOTICIAS</title>
</head>

<body>
    <div class="my-5" id="borderLeft">
        <h4 class="titulo text-primary">NOTICIAS</h4>
        <p>Sección creada para revisar las principales noticias</p>
    </div>

    <div class="container my-5">
        <?php
        $sql = "SELECT * from noticias";
        $result = mysqli_query($con, $sql);
        $text = ['url'];
        while ($mostrar = mysqli_fetch_array($result)) {
        ?>
            <div class="row">
                <div class="post">
                    <div class="img">
                        <img src="data:image/jpg;base64, <?php echo base64_encode($mostrar["foto"]); ?>">
                    </div>
                    <div class="info">
                        <div class="descripcion fs-3"><?php echo $mostrar['titulo'] ?></div>
                        <div class="fecha">Fecha de publicación: <?php echo $mostrar['fecha'] ?></div>
                        <?php $asd = $mostrar['url'] ?>
                        <a href="<?php echo $asd ?>" class="btn btn-outline-primary mt-5 fs-2" target="_blank">Ver más</a>
                    </div>
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