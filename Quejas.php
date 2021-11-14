<?php

include '../funciones.php';

if (!isLoggedIn()) {
	$_SESSION['msg'] = "Tienes que iniciar sesión";
	header('location: ../login.php');
}

?>



<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/quejas.css">
  <link rel="stylesheet" href="../css/header.css">
  <title>Condominio Atlantis</title>
</head>
<body>
	  
<section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#inicio"><img src="../img/Atlantis.png" alt="Atlantis" srcset="">
        </div>
        
		
		<div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
		  	<li><a href="../index.php">Inicio</a></li>
			<li><a href="../quejas/Quejas.php">Quejas</a></li>
			<li><a href="../reservaciones/reservacion.php">Reservaciones</a></li>
    
			<li class="menu">
				
				<a href="#">Pagos</a>
				<ul>
						<li><a href="../notificacionpago/notificarpago.php" >Notificar pago</a></li>
						<li><a href="../notificacionpago/vernotificacionespago.php" >Historial de pagos</a></li>
				</ul>
			</li>
           
			<li><a href="../noticias.php">Noticias</a></li>
			<li><a href="Quejas.php?logout='1'">Salir</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  
  <section id="inicio">

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>
		function enviar(cedula, asunto, mensaje) {
			if (!cedula || !asunto || !mensaje) {
				alert("Hay campos vacios");
			} else {
				var parametros = {
					"cedula" : cedula,
					"asunto" : asunto,
					"mensaje" : mensaje
				};
				$.ajax({
                	data:  parametros,
                	url:   'procesoQuejas.php',
                	type:  'post',
                	beforeSend: function () {
                        	$("#resultado").html("Procesando, espere por favor...");
                	},
                	success:  function (response) {
                        	$("#resultado").html(response);
                	}
        		});
			}
		}
	</script>
</head>
<body>
<div class="contenedor">
	<div id="containerQuejas" class="quejas_container">
	<div class="title">
				Ingrese su queja
		</div>
		<div class="form-group">


			<div class="inputfield">
			  	  <label>Razón:</label>
					<input class="input" type="text"  name="asunto" id="asunto" placeholder="Ingrese la razón de su queja">

				</div>
	
			<div class="inputfield">
				<label>Descripción:</label>
				<textarea class="textarea" name="mensaje" id="mensaje"></textarea>
			</div>

			<div class="resultados">
			<label><h3 id="resultado"></h3></label>
			</div>
			
			<div class="inputfield">	
				<input type="submit" name="Enviar" class="btn btn-primary" onclick="enviar(<?php echo $_SESSION['usuario']['Cedula']; ?>, $('#asunto').val(), $('#mensaje').val()); return false;" value="Enviar">
			</div>
		
	</div>
	</div>
	</div>
</section>
<script src="../app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



