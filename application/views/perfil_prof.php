<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EXAMEN EN LÍNEA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <!-- Examen stilos -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/examen.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/profesor.css">

	<!-- Modernizr JS -->
	<script src="<?=base_url()?>js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    </head>

    <header>
        <div class="exam">
            <h1>Examen<h1>
            <a style="float:right" href="<?=base_url()?>index.php/login/cerrar_sesion"><i class="material-icons">exit_to_app</i></a>
        </div>

    </header>
	<body>
		
	<div class="qbootstrap-loader"></div>
    <div class="datos">

    <h3>Datos generales del profesor</h3>
    <hr>
        <label for="inputName"class="control-label" >Nombre del profesor: </label>
        <input type="text" class="form-control" id="profesor" value="<?php echo $nombre ?>" placeholder="Nombre del profesor" disabled> 
		<label for="inputName"class="control-label" >Número de profesor: </label>
        <input type="text" class="form-control" value="<?php echo $idprofesor ?>" id="idprofesor" placeholder="Número de profesor" disabled>
		<hr>
		<button class="btn btn-info">Editar</button>
    </div>

	<div class="clases">
		<h3>Materias y grupos</h3>
		<hr>
			<div>
				<button id="altam" class="btn btn-up">Dar de alta una materia</button>
			</div>
			<br>
		<hr>
		<!-- MODAL DAR DE ALTA MATERIA -->
        <div class="modal fade" id="materia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">   
                  <div id="page" style="padding:5% 15% 5%;">
                    <nav class="qbootstrap-nav" role="navigation">
					<form method="post" action="<?php echo base_url()?>index.php/Login/altamateria">
						<label>Número de profesor: </label>
						<input type="text" class="form-control" id="nprof" placeholder="Número de profesor" value="<?php echo $idprofesor ?>" disabled>
						<label>Nombre del profesor: </label>
						<input type="text" class="form-control" id="prof" placeholder="Nombre del profesor" value="<?php echo $nombre ?>" disabled> 
						<label for="inputName"class="control-label" >Código de materia: </label>
						<input type="text" class="form-control" name="idmateria" id="idmateria" placeholder="Código de materia" required>
						<label for="inputName"class="control-label" >Nombre de la materia: </label>
						<input type="text" class="form-control" name="nombremat" id="nombremat" placeholder="Nombre de la materia" required>
						<label for="inputName"class="control-label" >Grupo:</label>
						<input type="text" class="form-control" id="idgrupo" name="idgrupo" placeholder="Grupo" >

						<label for="inputName"class="control-label" >Lista de alumnos </label>
						<p style="color:red;  font-weight: bold;"> *La lista de alumnos debe contener NÚMERO DE CONTROL/ NOMBRE DEL ALUMNO</p>
						<input type="file" name="xlfile" id="xlf" />
						<br>
						<button id="subiralum" class="btn btn-info">Subir</button>
						<pre id="out"></pre>
						<div id="htmlout"></div>
						<button id="subirmat" type="submit" class="btn btn-info">Alta</button>
					</form>
					
					</nav>
				 </div>
				 </div>
				 </div>
			
		</div>
		<!-- FIN MODAL DAR DE ALTA MATERIA -->


			<li class="class">Materias</li>
			<br>
			<div>
			<table id="table" class="table">
				<thead>
					<tr>
						<th>Grupo</th>
						<th>Materia</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody id="datamat">
					
				</tbody>
			</table>
			</div>
	</div>
		<!-- MODAL 	SUBIR ALUMNOS -->
		
		<!-- FIN MODAL SUBIR ALUMNOS -->
		<!-- MODAL 	SUBIR EXAMEN -->
        <div class="modal fade" id="sexamen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">   
                  <div id="page" style="padding:5% 15% 5%;">
                    <nav class="qbootstrap-nav" role="navigation">
					<p style="color:red;  font-weight: bold;"> *El examen debe contener NÚMERO DE PREGUNTA/PREGUNTA/OPCIÓN 1/OPCIÓN 2/OPCIÓN 3/RESPUESTA</p>
						<label for="inputName"class="control-label">Examen</label>
						<input type="file" id="lista" >
						<br>
						<button id="subirmat" class="btn btn-info">Subir</button>
					</nav>
				 </div>
				 </div>
				 </div>
		</div>
		<!-- FIN MODAL SUBIR EXAMEN -->
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="<?=base_url()?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?=base_url()?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?=base_url()?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?=base_url()?>js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?=base_url()?>js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="<?=base_url()?>js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="<?=base_url()?>js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="<?=base_url()?>js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="<?=base_url()?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?=base_url()?>js/magnific-popup-options.js"></script>
	<!-- Sticky Kit -->
	<script src="<?=base_url()?>js/sticky-kit.min.js"></script>
	<!-- Main -->
	<script src="<?=base_url()?>js/main.js"></script>
	<script src="<?=base_url()?>js/examen.js"></script>
	<!-- profesor js -->
	<script src="<?=base_url()?>js/profesor.js"></script>
	<script src="<?=base_url()?>dist/cpexcel.js"></script>
	<!-- importar excel -->
	<script src="<?=base_url()?>js/shim.js"></script>
	<script src="<?=base_url()?>js/jszip.js"></script>
	<script src="<?=base_url()?>js/xlsx.js"></script>
	<script>
	    
	</script>
	</body>
</html>

