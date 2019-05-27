<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EXAMEN</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php base_url() ?>assets/css/animate.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php base_url() ?>assets/css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php base_url() ?>assets/css/style.css">
    <!-- Examen stilos -->
    <link rel="stylesheet" href="<?php base_url() ?>assets/css/examen.css">

	<!-- Modernizr JS -->
	<script src="<?php base_url() ?>js/modernizr-2.6.2.min.js"></script>

    </head>
    
    <header>
        <div class="exam">
            <h1>Examen<h1>
		
        </div>
    </header>

    <body>
        <div class="instrucciones">Lee con atención cada una de las preguntas y escoge la opción que consideres adecuada. 
            Para resolver el examen tienes un tiempo máximo de 50 minutos. 
            No se requiere ningún instrumento (formulario, calculadora o tabla periódica).
        </div>
		<center><label id= "TiempoExamen">Tiempo de Exámen</label></center>
        <center><label id = "tiempo">50:00</label></center>

        <div class="preguntas">
        <form role="form"  onchange="javascript:detector()">
				<h4>1.- Son los sistemas de medidas que se usan comúnmente en las herramientas.</h4>
				<div  id="1">
					<label class="radio-inline">
				    <input name="a" type="radio" id="primer" value="Sistema decimal e ingles" required>
				    	a) Sistema decimal e inglés.
				    </label>
				    	<label class="radio-inline">
			  		<input name= "a" type="radio" id="primer" value="Sistema ingles y metrico" required>
			  			b) Sistema inglés y métrico.
			  		</label>
			  		<label class="radio-inline">
			  		<input name="a" type="radio" id="primer" value="Sistema vigesimal y decimal" required>
			  			c) Sistema vigesimal y decimal.
			  		</label>
				</div>				

				<!-- -->
				<h4>2.- Son las medidas de matracas, manerales, dados, extensiones y accesorios.</h4>
				<div id="2">
					<label class="radio-inline">
				    <input type="radio" id="segunda" name ="b" value="5/8, 13/16, 1/4 y 3/8" required>
				    	a) 5/8, 13/16, 1/4 y 3/8.  
						<br>
			  		<input type="radio" id="segunda" name ="b" value="1/5, 3/8, 10/16 y 7/8" required>
			  			b) 1/5, 3/8, 10/16 y 7/8.
			  			<br>
			  			<input type="radio" id="segunda" name ="b" value="1/4, 3/8, 1/2 y 3/4" required>
						  c) 1/4, 3/8, 1/2 y 3/4.
					</label>
				</div>
				<!-- -->
				<h4>3.- Son las herramientas para quitar y poner las bujías de 5/8 de un vehículo. </h4>
				<div id="3">
				    <input name="c" type="radio" id="tercera" value="Dado 5/8 para bujías, matraca 3/8 ,extensión larga 3/8 y calibrador de bujías">
				    	a) Dado 5/8 para bujías, matraca 3/8 ,extensión larga 3/8 y calibrador de bujías.   
				    	<br>
			  		<input name="c" type="radio" id="tercera" value="Dado 5/8,matraca 1/2, extensión corta 1/2 y lainas">
			  			b)  Dado 5/8,matraca 1/2, extensión corta 1/2 y lainas.
			  			<br>
			  			<input name="c" type="radio" id="tercera" value="Ninguna de las opciones">
			  			c) Ninguna de las opciones.
				</div>
				<!-- -->
				<h4>4.- Son las herramientas para desarmar y armar una cabeza de motor con tornillos estándar.</h4>
				<div  id="4">
				    <input name="d" type="radio" id="cuarta" value="Dados estándar y accesorios, torquimetro, juego de desarmadores, llaves allen, pinzas y martillos">
				    	a) Dados estándar y accesorios, torquimetro, juego de desarmadores, llaves allen, pinzas y martillos.
				    	<br>
			  		<input name="d" type="radio" id="cuarta" value="Dados milimétricos, pinzas mecánicas y matracas">
			  			b) Dados milimétricos, pinzas mecánicas y matracas.
			  			<br>
			  			<input name="d" type="radio" id="cuarta" value="Dados y accesorios">
			  			c) Dados y accesorios. 
				</div>
				<!-- -->
				<h4>5.- Herramienta de medición que realiza mediciones de exteriores, interiores profundidad.</h4>
				<div  id="5">
				    <input name="e" type="radio" id="quinta" value="Micrómetro">
				    	a) Micrómetro.
				    	<br>
			  		<input name="e" type="radio" id="quinta" value="Flexómetro">
			  			b) Flexómetro.
			  			<br>
			  			<input name="e" type="radio" id="quinta" value="Vernier o pie de rey">
			  			c) Vernier o pie de rey.
				</div>
				<!-- -->
				<h4>6.- Forma y color de los señalamientos de prohibición.</h4>
				<div  id="6">
				    <input name="f" type="radio" id="sexta" value="Triangulo, amarillo y negro">
				    	a) Triangulo, amarillo y negro.
				    	<br>
			  		<input name="f" type="radio" id="sexta" value="Circulo y línea en diagonal, rojo y blanco">
			  			b) Circulo y línea en diagonal, rojo y blanco.
			  			<br>
			  			<input name="f" type="radio" id="sexta" value="Círculo, azul y blanco">
			  			c) Círculo, azul y blanco.
				</div>
				<!-- -->
				<h4>7.- Forma y color de los señalamientos obligación.</h4>
				<div  id="7">
				    <input name="g" type="radio" id="septima" value="Triangulo, amarillo y negro">
				    	a) Triangulo, amarillo y negro.
				    	<br>
			  		<input name="g" type="radio" id="septima" value="Circulo y línea en diagonal, rojo y blanco">
			  			b) Circulo y línea en diagonal, rojo y blanco.
			  			<br>
			  			<input name="g" type="radio" id="septima" value="Círculo, azul y blanco">
			  			c) Círculo, azul y blanco.
				</div>
				<!-- -->
				<h4>8.- Forma y color de los señalamientos advertencia.</h4>
				<div  id="8">
				    <input name="h" type="radio" id="octava" value="Triangulo, amarillo y negro">
				    	a) Triangulo, amarillo y negro.
				    	<br>
			  		<input name="h" type="radio" id="octava" value="Circulo y línea en diagonal, rojo y blanco">
			  			b) Circulo y línea en diagonal, rojo y blanco.
			  			<br>
			  			<input name="h" type="radio" id="octava" value="Círculo, azul y blanco">
			  			c) Círculo, azul y blanco.
				</div>
				<!-- -->
				<h4>9.- Forma y color de los señalamientos de vías de evacuación.</h4>
				<div  id="9">
				    <input name="i" type="radio" id="novena" value="Cuadrado o rectángulo, verde y blanco">
				    	a) Cuadrado o rectángulo, verde y blanco.
				    	<br>
			  		<input name="i" type="radio" id="novena" value="Cuadrado o rectángulo, rojo">
			  			b) Cuadrado o rectángulo, rojo.
			  			<br>
			  			<input name="i" type="radio" id="novena" value="Círculo, azul y blanco">
			  			c) Círculo, azul y blanco.
				</div>
				<!-- -->
				<h4>10.- Forma y color de los señalamientos contra incendios.</h4>
				<div  id="10">
				    <input name="j" type="radio" id="decima" value="Cuadrado o rectángulo, verde y blanco">
				    	a) Cuadrado o rectángulo, verde y blanco.
				    	<br>
			  		<input name="j"  type="radio"  id="decima" value="Cuadrado o rectángulo, rojo">
			  			b) Cuadrado o rectángulo, rojo.
			  			<br>
			  			<input name="j"  type="radio" id="decima" value="Círculo, azul y blanco">
			  			c) Círculo, azul y blanco.
				</div>
				<br>
				<!-- Boton para terminar examen-->
				<center><a href="perfil_alum.php"><button type="button" class="btn btn-success" id="fin">Terminar.</button></a></center>	
			</form>	
						
</div>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
    </body>

    </html>


    <!--Contador-->
	<script type="text/javascript">
	//
	//Respuestas seleccionadas
	function detector() {
		//Respuestas
					var formulario = document.forms[0];
					for (var i = 0; i < formulario.a.length; i++) {
						if (formulario.primer[i].checked) {
							var respuesta1=formulario.primer[i].value+'.';
						//break;
						//alert('el marcado es: ' + formulario.primer[i].value + '.')
					   	//console.log('el marcado es: ' + formulario.primer[i].value + '.');
						}
						if (formulario.segunda[i].checked) {
							var respuesta2=formulario.segunda[i].value+'.';
						//break;
						}
						if (formulario.tercera[i].checked) {
							var respuesta3=formulario.tercera[i].value+'.';
						}
						if (formulario.cuarta[i].checked) {
							var respuesta4=formulario.cuarta[i].value+'.';
						}
						if (formulario.quinta[i].checked) {
							var respuesta5=formulario.quinta[i].value+'.';
						}
						if (formulario.sexta[i].checked) {
							var respuesta6=formulario.sexta[i].value+'.';
						}
						if (formulario.septima[i].checked) {
							var respuesta7=formulario.septima[i].value+'.';
						}
						if (formulario.octava[i].checked) {
							var respuesta8=formulario.octava[i].value+'.';
						}
						if (formulario.novena[i].checked) {
							var respuesta9=formulario.novena[i].value+'.';
						}
						if (formulario.decima[i].checked) {
							var respuesta10=formulario.decima[i].value+'.';
						}
					}
					console.log("R1"+respuesta1);
					console.log("R2"+respuesta2);
					console.log("R3"+respuesta3);
					console.log("R4"+respuesta4);
					console.log("R5"+respuesta5);
					console.log("R6"+respuesta6);
					console.log("R7"+respuesta7);
					console.log("R8"+respuesta8);
					console.log("R9"+respuesta9);
					console.log("R10"+respuesta10);

					}
					
					//
					//
					// Temporizador
		function redireccionar(){
			alert("Haz llegado al tiempo límite.");
		}

			var salida = document.getElementById("tiempo"),
				minutos = 50,
				segundos = 0,
				intervalo = setInterval(function(){
					if (--segundos < 0){
					    segundos = 59;
					    minutos--;
					    setTimeout("redireccionar()",3000000); //50 min - 3,000,000 ms

					}
					      
					if (!minutos && !segundos)
					    clearInterval(intervalo);
					    salida.innerHTML = minutos + ":" + (segundos < 10 ? "0" + segundos : segundos);
					}, 1000);
    </script>
       <!-- fin del contador -->
<script language="javascript">
	function checkKeyCode(evt)
	{

	var evt = (evt) ? evt : ((event) ? event : null);
	var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
	if(event.keyCode==116)
	{
	evt.keyCode=0;
	return false
	}
	}
	document.onkeydown=checkKeyCode;
	document.onkeydown=checkKeyCode;
	window.location.hash="no-back-button";
	window.location.hash="Again-No-back-button" //chrome
	window.onhashchange=function(){window.location.hash="no-back-button";}
</script>