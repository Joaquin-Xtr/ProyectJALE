<?php
//include("../Diseños/header.html");
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
	<link rel="stylesheet" href="../Css/test.css">

	<!-- CDN ICON -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css%22%3E">

	<title>Iniciar sesión</title>

	<header class="header container-fluid p-3">
		<div class="d-flex flex-content justify-content-between align-items-center">
			<a href="../index.php" class="justify-content-start">
				<img src="../Imagenes/logo-JALE-amarillo.png" style="width: 80px; height: 80px; filter: drop-shadow(0 2px 3px #222);" alt="logoJALE">
			</a>
			<a href="../index.php" class="btn btn-primary me-1">Volver Atras</a>
		</div>
	</header>

</head>

<body>
	<div class="content">
		<div class="container">
			<div class="card px-5 py-5 shadow p-3 bg-body rounded">
				<div class="row" id="row-card">
					<div class="col-md-6">
						<img src="../Imagenes/login_Image" alt="Image" class="img-fluid mb-5">
					</div>
					<div class="col-md-6 contents">
						<div class="row " id="card-cont">
							<div class="col-md-10">
								<div class="mb-4">
									<h1 class="p-3 fs-2 border-bottom text-primary"><span class="text-primary">REGISTRAR USUARIO</span></h1>
									<p class="mb-5">Aquí puede registrar su correo electrónico para ser un usuario de <span class="text-primary"> JALE </span></p>
								</div>

								<form class="contact-form mt-5" action="registro2.php" method="POST">
									<label class="label" for="email">Nombre de Usuario</label>
									<div class="input-group mb-5">
										<div class="input-group-text ms-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
												<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
											</svg>
										</div>
										<input name="nombre" id="nombre" class="input-text js-input" placeholder="Nombre" type="text" required>
									</div>
									<label class="label" for="email">Correo Electrónico</label>
									<div class="input-group mb-5">
										<div class="input-group-text ms-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
												<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
											</svg>
										</div>
										<input name="email" id="email" class="input-text js-input" placeholder="ejemplo@gmail.cl" type="email" required>
									</div>

									<!-- checkbox que nos permite activar o desactivar la opcion -->
									<label class="label" for="password">Contraseña Nueva</label>
									<div class="input-group">
										<div class="input-group-text ms-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
												<path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
											</svg>
										</div>
										<input name="pass" id="contrasena" class="input-text js-input" value="" placeholder="********" type="password" required>
									</div>

									<div class="item">
										<div class="checkbox-rect">
											<input type="checkbox" id="checkbox-rect1" onclick="myFunction()" name="check">
											<label id="checkbox-label" for="checkbox-rect1">Mostrar Contraseña</label>
										</div>
									</div>
									<script type="text/javascript">
										function myFunction() {
											var x = document.getElementById("contrasena");
											if (x.type === "password") {
												x.type = "text";
											} else {
												x.type = "password";
											}
										}
									</script>

									<input type="submit" value="Registrar" class="btn btn-block btn-primary mt-5 fs-4">

								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--footer starts from here-->
	<footer class="footer" id="footer">
		<div class="container bottom_border">
			<div class="row" style="align-items: center;">
				<div class="col-lg-6 col-md-6 col-sm-12 mt-5 ">
					<img src="../Imagenes/logo-JALE-amarillo.png" alt="Image" class="img-fluid mb-5">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 mt-5 footer-text">
					<div class="container">
						<!-- Seccion Contacto starts here -->
						<p class="text-center"><a href="/Jale_Final/Formulario/contacto.php"> Contacto vía Web</a></p>
						<p>Contacto directo con nuestro correo:</p>
						<a href="mailto:EquipoJale@gmail.com" class="link-correo">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
								<path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
							</svg>
							EquipoJale@gmail.com
						</a>
						<!-- Seccion Contacto ends here -->
					</div>
				</div>
			</div>
		</div>
		</div>

	</footer>
</body>

</html>