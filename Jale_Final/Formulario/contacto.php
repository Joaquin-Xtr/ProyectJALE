<?php
include("../Diseños/header.html");
?>

<!DOCTYPE html>

<html lang="es-CL">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/style.css">

    <!-- CDN ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Contacto</title>
</head>

<body>
<div class="card-sugerencia">
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="box my-5 px-0 py-0">
                
                    <form action="contacto2.php" method="POST">
                    <br></br>                       
                        <h3> <b>Contacto</b></h3>
                        <br></br>
                        <p>¿Tienes alguna duda acerca de algo dentro del sitio? <b> ¡No dudes en ponerte en contacto con nosotros!</b></p>
                        <p>Una vez rellenado el formulario a continuación, la administración se contactará via Correo electronico</p>
                        <br></br>
                        <h5 class="mt-4"> <b>Ingrese su Nombre: </b></h5>
                            <input type="text" class="sugerencia-input" placeholder="Nombre" name="nombre" required="" />
                            <b><h5 class="mt-4"><b>Ingrese su correo:</b> </h5></b>
                            <h6><i>*Esto para poder ponernos en contacto contigo*</i></h6>
                            <input type="email" class="sugerencia-input" placeholder="Correo" name="correo" required="" />
                            <b> <h5 class="mt-4"><b>Ingrese su problema:</b> </h5></b>
                            <input type="text" class="sugerencia-input" placeholder="Problema" name="problema" required="" />
                            <b><h5 class="card-title"><b>Ingrese una descripción del problema</b></h5>
                            <textarea class="descripcion" name="descripcion" cols="40" rows="4" required="" placeholder="Ingresar descripcion"></textarea>
                            <input class="mt-5 mb-3" type="submit" value="INGRESAR" />
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


</body>
<?php
include("../Diseños/footer.html");
?>

</html>