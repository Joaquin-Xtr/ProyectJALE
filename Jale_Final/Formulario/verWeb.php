<?php
include("../Session/sessionUser.php");
include("../Diseños/header1.html");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="../Css/test2.css">
    <title>SITIOS WEB</title>

    <!-- Scrtipts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>

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

    <div class="my-5" id="borderLeft">
        <h4 class="titulo text-primary">SITIOS WEBS</h4>
        <p>Sección creada para revisar los principales sitios web</p>
    </div>

    <!-- Codigo Martin - Buscador-->
    <div class="container-lg my-4">
        <div class="row d-flex justify-content-center mb-5">
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
                    <!--
                    <div class="row mt-4 g-1 px-4 mb-5">
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center zoom"> <img src="https://i.imgur.com/Mb8kaPV.png" width="50">
                                <div class="text-center mg-text"> <span class="mg-text">Account</span> </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="https://i.imgur.com/ueLEPGq.png" width="50">
                                <div class="text-center mg-text"> <span class="mg-text">Payments</span> </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="https://i.imgur.com/tmqv0Eq.png" width="50">
                                <div class="text-center mg-text"> <span class="mg-text">Delivery</span> </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="https://i.imgur.com/D0Sm15i.png" width="50">
                                <div class="text-center mg-text"> <span class="mg-text">Product</span> </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="https://i.imgur.com/Z7BJ8Po.png" width="50">
                                <div class="text-center mg-text"> <span class="mg-text">Return</span> </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="https://i.imgur.com/YLsQrn3.png" width="50">
                                <div class="text-center mg-text"> <span class="mg-text">Guarantee</span> </div>
                            </div>
                        </div>
                    </div>
                        -->
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <!--class="containerVerWeb"-->
        <?php
        include '../App/buscar1.php';
        while ($mostrar = mysqli_fetch_array($result1)) {
            $resultadobacan =  $mostrar['idWeb']
        ?>
            <div class="row">
                <div class="post">
                    <div class="img">
                        <img src="data:image/jpg;base64, <?php echo base64_encode($mostrar["foto"]); ?>">
                    </div>


                    <div class="info">
                        <div class="titulo"><?php echo $mostrar['nombre'] ?></div>
                        <div class="descripcion fs-3"><?php echo $mostrar['descripcion'] ?></div>
                        <div class="descripcion mt-5">Categoria: <?php echo $mostrar['tipo'] ?></div>
                        <div class="descripcion font-weight-bold fs-4">Valoración: <?php echo $mostrar['valoracion'] ?></div>
                        <?php $asd = $mostrar['url'];
                        $query = $con->query("SELECT * FROM web WHERE idWeb = {$resultadobacan}");
                        $sql1 = "SELECT descripcion * from web where idWeb = $resultadobacan;" ?>
                        <div class="botonera">
                            <a href="<?php echo $asd ?>" class="btn btn-outline-primary fs-2" target="_blank">Visitar Sitio</a>
                            <a onclick="return confirm('¿Desea calificar este Sitio Web?');" class='text-primary mb-1' href="valoracion.php?idWeb=<?php echo  $mostrar['idWeb']; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-sta" viewBox="0 0 16 16">
                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                </svg>
                            </a>
                            <a onclick="return confirm('¿Desea agregar este Sitio Web?');" class="text-primary mb-1" href="agregarWeb.php?idWeb=<?php echo $mostrar['idWeb'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                </svg>
                            </a>
                        </div>
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






<!-- BUSCADOR ANTIGUO CON BOTON
    <form action="verWeb.php" method="GET">
        <div class="row w-75 mx-auto servicio-fila">
            <div class="col-md-auto">
                <label for="Ingresa">Ingrese nombre del Sitio web: </label>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" name="Buscar">
            </div>
            <div class="col-3">
                <input class="btn btn-primary" type="submit" value="Buscar">
            </div>
        </div>
    </form>
    <br>
    

     Buscador 
    <div class="">
        <label for="caja_busqueda">Buscar:</label>
        <input type="text" name="caja_busqueda" id="caja_busqueda"></input>
    </div>
    <br>

    <section class="container" id="datos">
        <div class="row w-75 mx-auto servicio-fila">
            
        </div>
    </section>

    
    <div class="container-fluid d-flex justify-content-center">
        <div class="row justify-content-center">
            <?php
            // PARA QUE FUNCIONE SE DEBE ELIMINAR O COMENTAR EL INCLUDE DE BUSCAR1
            //include '../App/buscar1.php';
            //while ($mostrar = mysqli_fetch_array($result1)) {
            ?>
                <div class="card text-dark mx-5 my-5" style="max-width: 20rem; background-color: #EAECEE;padding-right: 0px;padding-left: 0px;">

                    <h5 class="card-header"><?php //echo $mostrar['nombre'] 
                                            ?></h5>

                    <div class="">
                        <img class="card-img-top img-fluid" name="Foto" style="min-height: 250px; max-width: 250px; margin-top: 20px;" src="data:image/jpg;base64, <?php echo base64_encode($mostrar["foto"]); ?>">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Categoría: <?php //echo $mostrar['tipo'] 
                                                        ?></p>
                        <div class="module line-clamp">
                            <p class="card-text"><?php //echo $mostrar['descripcion'] 
                                                    ?></p>
                        </div>
                    </div>
                    <div class="card-footer mt-auto">
                        <?php //$asd = $mostrar['url'] 
                        ?>
                        <a href="<?php //echo $asd 
                                    ?>" class="link1" target="_blank">Visitar Sitio</a>
                        <input type="hidden" name="codigo" value="<?php //echo $mostrar['idWeb']; 
                                                                    ?>">

                        <a onclick="return confirm('¿Desea calificar este Sitio Web?');" class='text-primary' href="valoracion.php?idWeb=<?php //echo  $mostrar['idWeb']; 
                                                                                                                                            ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-sta" viewBox="0 0 16 16">
                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                            </svg>
                        </a>

                        <a onclick="return confirm('¿Desea agregar este Sitio Web?');" class="text-primary" href="agregarWeb.php?idWeb=<?php //echo $mostrar['idWeb'] 
                                                                                                                                        ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                        </a>
                    </div>
                </div>
            <?php
            //}
            ?>
        </div>
    </div>
    

</body>
<?php
//include("../Diseños/footer.html");
?>

</html>-->