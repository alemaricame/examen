<!DOCTYPE html>
<html lang="en">
<head>
	<title>EXAMEN EN LÍNEA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Modernizr JS -->
	<script src="<?=base_url()?>js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css">
<!--===============================================================================================-->
</head>

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<div class="login100-form validate-form">
					<span class="login100-form-title">
						<strong>BIENVENIDO</strong>
					</span>
					<form method="post" action="<?php echo base_url()?>index.php/Login/iniciar_sesion_post">

						<input class="input100" type="text" id="usuario" name="usuario" placeholder="Usuario">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
							<br>
						<input class="input100" id="password" type="password" name="password" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						<br>
						<div class="select">
							<label>Tipo de usuario </label><select name="user" id="user">
								<option value=""></option>
								<option value="profesor">Profesor</option>
								<option value="alumno">Alumno</option>
							</select>
						</div>
					<div class="container-login100-form-btn">
						<button type="submit" id="iniciar" class="login100-form-btn">
							Iniciar sesión
						</button>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
	
	

<!--===============================================================================================-->
<script src="<?=base_url()?>js/jquery.min.js"></script>
<!--===============================================================================================-->

</body>
</html>
