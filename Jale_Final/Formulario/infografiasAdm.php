<?php
include("../Diseños/header2.html");
include("../Conexion/conexion.php");
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
    <script src="../js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Infografias</title>
</head>

<body>
    <section class="w-75 mx-auto text-center pt-5">
        <h4 class="p-3 fs-2 border-top border-3">Sección creada para ayudar con la utilización de los <span class="text-primary">principales sitios web</span></h4>
    </section>
    <br>
    <br>

    <section class="container-fluid">
        <div class="row w-75 mx-auto servicio-fila">

            <div class="card">
                <div class="card-header">
                    Listado de Infografias
                </div>
                <div class="p-4">
                    <table class="table align-middle" width="50">
                        <tbody>
                            <?php
                            $sql = "SELECT * from infografia";
                            $result = mysqli_query($con, $sql);
                            $text = ['url'];
                            while ($mostrar = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td>
                                        <img width="180px" height="160px" name="Foto" style="margin-top: 20px;" src="data:image/jpg;base64, <?php echo base64_encode($mostrar["foto"]); ?>">
                                    </td>
                                    <td>
                                        <h3><?php echo $mostrar['nombre'] ?></h3>
                                        <?php $asd = $mostrar['url'] ?>
                                        <a href="<?php echo $asd ?>" class="link1" target="_blank">Ver más</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
    <br>

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