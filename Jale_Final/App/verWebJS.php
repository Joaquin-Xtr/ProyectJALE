<?php
include('../Conexion/conexion.php');
$mysqli = mysqli_connect('localhost', 'root', '', 'jale');

$salida = "";
$query = "SELECT * FROM web ORDER By idWeb";

if (isset($_POST['consulta'])) {
    $q = $mysqli->real_escape_string($_POST['consulta']);
    $query = "SELECT idWeb, nombre, url, foto, tipo, descripcion FROM web WHERE nombre LIKE '%" . $q . "%' OR url LIKE '%" . $q . "%' OR tipo LIKE '%" . $q . "%'";
}

$resultado = $mysqli->query($query);


if ($resultado->num_rows > 0) {
    $salida.= " <div class='container-fluid d-flex justify-content-center'>
                    <div class='row justify-content-center'>";
                    while ($fila = $resultado->fetch_assoc()) {

                    $sql = "SELECT * from web where activo = '1' or '3'";
                    $result = mysqli_query($con, $sql);

                    $mostrar = mysqli_fetch_array($result);
                    $asd = $mostrar['url'];
            $salida.= "<div class='card text-dark mx-5 my-5' style='max-width: 20rem; background-color: #EAECEE;padding-right: 0px;padding-left: 0px;'>

                <h5 class='card-header'>". $fila['nombre'] ."</h5>

                <div>
                    <img class='card-img-top img-fluid' name='Foto' style='min-height: 250px; max-width: 250px; margin-top: 20px;' src='data:image/jpg;base64, ". base64_encode($fila["foto"]) ."'>
                </div>

                <div class='card-body'>
                    <p class='text'>Categoría: ". $fila['tipo'] ."</p>
                    <div class='module line-clamp'>
                        <p class='card-text'>". $fila['descripcion']."</p>
                    </div>
                </div>

                <div class='card-footer mt-auto'>
                    <a href='". $asd ."' class='link1' target='_blank'>Visitar Sitio</a>
                    <input type='hidden' name='codigo' value='". $fila['idWeb'] ."'>

                    <a onclick='return confirm('¿Desea calificar este Sitio Web?');' class='text-primary' href='valoracion.php?idWeb=". $fila['idWeb'] ."'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='36' height='36' fill='currentColor' class='bi bi-sta' viewBox='0 0 16 16'>
                            <path d='M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z' />
                        </svg>
                    </a>

                    <a onclick='return confirm('¿Desea agregar este Sitio Web?');' class='text-primary' href='agregarWeb.php?idWeb=". $fila['idWeb'] ."'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='36' height='36' fill='currentColor' class='bi bi-plus-circle' viewBox='0 0 16 16'>
                            <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z' />
                            <path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z' />
                        </svg>
                    </a>
                </div>
            </div>";
        
        }
    $salida.= "</div> </div>
    <button class='btn btn-primary mb-5'>Ver Más</button>
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
    <script>
        $('.card').slice(0, 2).show()
        $('.btn').on('click', function(){
            $('.card:hidden').slice(0, 2).slideDown()
            if ($('.card:hidden').length == 0) {
                $('.btn').fadeOut('slow')
            }
        })
    </script>

    <!-- Button TOP -->
    <button onclick='topFunction()' id='myBtn' xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-caret-up-square-fill' viewBox='0 0 16 16'>
        <path d='M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 9h8a.5.5 0 0 0 .374-.832l-4-4.5a.5.5 0 0 0-.748 0l-4 4.5A.5.5 0 0 0 4 11z' />
    </button>
    <script>
    //Get the button
    var mybutton = document.getElementById('myBtn');

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = 'block';
        } else {
            mybutton.style.display = 'none';
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
    </body>";
} else {
    $salida.= "No hay datos que coincidan :c";
}

echo $salida;
$mysqli->close();
?>