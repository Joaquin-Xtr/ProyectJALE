<?php
include("Session/validarSession.php");
?>

<!DOCTYPE html>

<html lang="es-CL">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/header.css">

    <!-- Scrtipts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    
    <!-- Scrtipts 
    <script src="../js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    -->
  <!-- Scrtipts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <title>Administrador</title>

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
                            <a href="/Jale_Final/indexAdm.php">Inicio</a>
                        </div>
                    </li>
                    <li class="nav-item zoom me-auto">
                        <div class="nav-item me-auto">
                            <a href="/Jale_Final/Formulario/verWebAdm.php">Sitios Webs</a>
                        </div>
                    </li>
                    <li class="nav-item zoom me-auto">
                        <div class="nav-item me-auto">
                            <a href="/Jale_Final/Formulario/infografiasAdm.php">Infografias</a>
                        </div>
                    </li>
                    <li class="nav-item zoom">
                        <div class="nav-item">
                            <a href="/Jale_Final/Formulario/verNoticiasAdm.php">Noticias</a>
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
      <a class="btn btn-outline-success ms-5 text-light" onclick="return confirm('¿Desea cerrar la sesión?');" href="/Jale_Final/Session/killSession.php">Cerrar Sesión</a>
    </nav>
  </div>
</head>

<body>
  <div class="my-5">


  <div class="container-fluid d-flex justify-content-center">

    <div class="row col-lg-9 d-flex justify-content-center">

      <div class="card my-5 mx-5" style="width: 18rem;">
        <img class="card-img-top" src="Imagenes/adminWeb1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Administracion Web</h5>
          <p class="card-text">Añadir, eliminar o revisar paginas Web</p>
          <a href="Web/crudWeb.php" class="btn btn-primary">Crud Web</a>
        </div>
      </div>

      <div class="card my-5 mx-5" style="width: 18rem;">
        <img class="card-img-top" src="Imagenes/adminInfo1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Administracion Infografias</h5>
          <p class="card-text">Añadir, eliminar o revisar Infografías</p>
          <a href="Infografias/crudInfografias.php" class="btn btn-primary">Crud Infografias</a>
        </div>
      </div>

      <div class="card my-5 mx-5" style="width: 18rem;">
        <img class="card-img-top" src="Imagenes/infoNoti1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Administracion Noticias</h5>
          <p class="card-text">Añadir, eliminar o revisar Noticias</p>
          <a href="VistaAdmin2/crudUsuarios1.php" class="btn btn-primary">Crud Noticias</a>
        </div>
      </div>

      <div class="card my-5 mx-5" style="width: 18rem;">
        <img class="card-img-top" src="Imagenes/adminUser1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Administracion Usuario</h5>
          <p class="card-text">Permite manejar a los usuarios, tanto para eliminar como para modificarlos</p>
          <a href="VistaAdmin/crudUsuarios.php" class="btn btn-primary">Crud Usuario</a>
        </div>
      </div>
      <div class="card my-5 mx-5" style="width: 18rem;">
        <img class="card-img-top" src="Imagenes/adminSuge1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Administración Sugerencias</h5>
          <p class="card-text">Revisar y eliminar sugerencias</p>
          <a href="Formulario/verSugerencias.php" class="btn btn-primary">Crud Sugerencias</a>
        </div>
      </div>
      <div class="card my-5 mx-5" style="width: 18rem;">
        <img class="card-img-top" src="Imagenes/adminContacto.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Administración Ticket</h5>
          <p class="card-text">Revisar Tickets orientado al soporte</p>
          <a href="Formulario/verContacto.php" class="btn btn-primary">Crud Contacto</a>
        </div>
      </div>

    </div>

  </div>
  <br>
  <a href="Session/killSession.php" class="btn btn-primary my-5">Cerrar Sesión</a>
  </br>

    <!-- Button TOP -->
    <button onclick="topFunction()" id="myBtn">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
            <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z" />
        </svg>
    </button>

</body>

<?php
include("Diseños/footer.html");
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