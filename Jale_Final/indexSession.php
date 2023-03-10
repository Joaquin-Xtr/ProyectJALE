<!DOCTYPE html>

<html lang="es-CL">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/header.css">

    <!-- CDN ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css%22%3E">

    <!-- Scrtipts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Scrtipts 
    <script src="../js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    -->
    <title>Bienvenido a J.A.L.E</title>

    <!-- Header -->

    <!-- Encabezado -->


                <div>
        <nav class="navbar navbar-light stroke navbar-expand-lg p-3" id="mainNav">
            <a class="navbar-brand">
                <img class="drop" src="Imagenes/logo-JALE-amarillo.png" style="width: 50px;" alt="logoJALE">
                <span class="fs-5 fw-bold">J.A.L.E</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse centrar" id="navbarSupportedContent">
                <ul class="navbar-nav centrar me-auto mt-4 ps-3">
                    <li class="nav-item zoom me-auto">
                        <div class="nav-item me-auto">
                            <a href="/Jale_Final/indexSession.php">Inicio</a>
                        </div>
                    </li>
                    <li class="nav-item zoom me-auto">
                        <div class="nav-item me-auto">
                            <a href="/Jale_Final/Formulario/verWeb.php">Sitios Webs</a>
                        </div>
                    </li>
                    <li class="nav-item zoom me-auto">
                        <div class="nav-item me-auto">
                            <a href="/Jale_Final/Formulario/verWebsListadas.php">Ver Mis Sitios Web</a>
                        </div>
                    </li>
                    <li class="nav-item zoom me-auto">
                        <div class="nav-item me-auto">
                            <a href="/Jale_Final/Formulario/verInfografiaListadas.php">Infografias</a>
                        </div>
                    </li>
                    <li class="nav-item zoom">
                        <div class="nav-item">
                            <a href="/Jale_Final/Formulario/verNoticiasListadas.php">Noticias</a>
                        </div>
                    </li>
                    <li class="nav-item zoom">
                        <div class="nav-item">
                            <a href="/Jale_Final/AmbienteT.php">Ambiente Aprendizaje</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>





        </nav>
        <nav class="d-flex justify-content-end align-items-center py-4">
            <a class="btn btn-outline-success ms-5 text-light" onclick="return confirm('??Desea cerrar la sesi??n?');" href="/Jale_Final/Session/killSession.php">Cerrar Sesi??n</a>
        </nav>
    </div>

</head>

<body>
    <!-- Intro -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="shadow p-3 mb-5 bg-body rounded">
                <h1 class="p-3 fs-2 border-bottom">Sitio web creado para ayudar a personas de la <span class="text-primary">Tercera Edad</span></h1>
                <p class="p-3 fs-4"><strong class="text-primary">J.A.L.E</strong> es un proyecto dedicado a la recopilaci??n de sitios web importantes y ??tiles, adem??s de contar con ayudant??as virtuales.</p>
            </div>
        </div>
    </div>

    <!-- Intro -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6">
                <img src="Imagenes/slide-1.jpg" class="d-block w-100 shadow p-3 mb-5 bg-body rounded" alt="slide1">
            </div>
            <div class="col-lg-6">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <h1 class="p-3 fs-2 border-bottom">Equipo peque??o con <span class="text-primary">Resultados Grandes</span></h1>
                    <p class="p-3 fs-4"><strong class="text-primary">J.A.L.E</strong> es un portal web el cual podr?? facilitarte la visita a todos tus sitios de inter??s adem??s de presentar gu??as y tutoriales acerca de toda la navegaci??n y por supuesto muy f??cil de utilizar. <span></span></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Acerca de nosotros -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <h1 class="p-3 fs-2 border-bottom">??C??mo surgi?? <span class="text-primary">esta idea</span>?</h1>
                    <p class="p-3 fs-4">Debido a la reciente <strong class="text-primary">masificaci??n de medio digitales</strong>, hemos decidido incluir a la tercera edad en esta temporada de evoluci??n.<span></span></p>
                </div>
            </div>
            <div class="col-lg-12">
                <img src="Imagenes/observatorio-envejecimiento.png" class="d-block w-100 shadow p-3 mb-5 bg-body rounded" alt="slide3">
            </div>
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
include("Dise??os/footer.html");
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

</html>