<?php
include("../Diseños/header2.html");
?>

<!DOCTYPE html>
<html lang="es-CL">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/style.css">

    <!-- CDN ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Scrtipts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../js/verWeb.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>

    <title>Sitios Web</title>
</head>

<body>
    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Se ha añadido exitosamente</strong> Revisa la pestaña mis links para ver mis links
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

    <section class="w-75 mx-auto my-auto text-center pt-5">
        <h4 class="p-3 fs-2 border-top border-3">Sección creada para revisar los <span class="text-primary">principales sitios web</span></h4>
    </section>
    <br>
    <br>

    <!-- Codigo Martin -->
    <div class="container-lg mt-4">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9">
                <div class="card p-4 mt-3">
                    <h3 class="heading mt-5 text-center">¿Desea buscar el nombre de una noticia?</h3>
                    <div class="d-flex justify-content-center px-5">
                        <form action="verWeb.php" method="get">
                            <div class="search">
                                <input type="text" class="search-input" placeholder="Buscar..." name="Buscar">
                                <button type="submit" class="search-icon"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div>
        <h2 class="mt-4"> Sitios Web</h2>
    </div>

    <div class="container-fluid mb-2 mt-4 d-flex justify-content-center">
        <div class="row d-flex justify-content-center">

            <?php
            include '../App/buscar1.php';
            while ($mostrar = mysqli_fetch_array($result1)) {
                $resultadobacan =  $mostrar['idWeb']
            ?>
                <div class="card text-dark mx-5 my-5" style="max-width: 20rem; background-color: #EAECEE;padding-right: 0px;padding-left: 0px;">

                    <h5 class="card-header">
                        <?php
                        echo $mostrar['nombre']
                        ?>
                    </h5>

                    <div class="">
                        <img class="card-img-top img-fluid" name="Foto" style="min-height: 250px; max-width: 250px; margin-top: 20px;" src="data:image/jpg;base64, <?php echo base64_encode($mostrar["foto"]); ?>">
                    </div>
                    <div class="card-body">
                        <? ?>
                        <p class="card-text"><b>Categoría:</b>
                            <?php echo $mostrar['tipo']
                            ?></p>

                        <div class="module line-clamp">
                            <p class="card-text">
                                <?php echo $mostrar['descripcion']
                                ?></p>
                        </div>
                        <div class="module line-clamp">
                            <p class="card-text">
                                <b> Valoración: </b> <?php echo $mostrar['valoracion']
                                                        ?>
                            </p>
                        </div>


                        <div class="module line-clamp">

                        </div>
                    </div>
                    <div class="card-footer mt-auto">
                        <?php $asd = $mostrar['url'];
                        $query = $con->query("SELECT * FROM web WHERE idWeb = {$resultadobacan}");
                        $sql1 = "SELECT descripcion * from web where idWeb = $resultadobacan;"
                        ?>
                        <a href="<?php echo $asd
                                    ?>" class="link1" target="_blank">Visitar Sitio</a>

                        </a>
                    </div>
                </div>
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

</html>