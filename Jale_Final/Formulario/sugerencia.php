<?php
include("../Session/sessionUser.php");
include("../Diseños/header1.html");
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

    <title>Sugerencias</title>
</head>

<body>
<div class="card-sugerencia">
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="box my-5 px-0 py-0">
                
                    <form action="sugerencia2.php" method="POST">
                        
                            <h5 class="mt-4">Ingresar titulo de la página</h5>
                            <input type="text" class="sugerencia-input" placeholder="Ingresar titulo" name="nombre" required="" />

                            <h5 class="mt-4">Ingresar categoria</h5>
                            <h6>*Seleccionar al menos 1 categoria</h6>
                            <select class="selectMultiple" name="Tipo[]">
                                <option selected> ------ Elegir ------ </option>
                                <option value="Entretencion">Entretención</option>
                                <option value="Deportes">Deportes</option>
                                <option value="Noticias">Noticias</option>
                                <option value="Ocio">Ocio</option>
                                <option value="Otros">Otros</option>
                            </select>
<!--
                            <div class="container">
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
                            </div>-->

                            <h5 class="mt-4">Ingresar el URL del sitio web
                                <button type="button" class="btn btn-primary" tooltip="Ejemplo de URL-> https://www.ejemplo.cl" flow="down">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-question-diamond-fill" viewBox="0 0 16 16">
                                        <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435zM5.495 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z" />
                                    </svg>
                                </button>
                            </h5>
                            <input class="sugerencia-input" type="url" name="url" required="" placeholder="Ingresar url" />

                            <h5 class="card-title">Ingresa una descripción del sitio web</h5>
                            <textarea class="descripcion" name="descripcion" cols="40" rows="4" required="" placeholder="Ingresar descripcion"></textarea>
                        </div>
                        <input class="mt-5 mb-3" type="submit" value="INGRESAR" />
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