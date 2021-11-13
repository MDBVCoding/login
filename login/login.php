<?php 

include_once 'funciones.php'; 

if (isLoggedIn()) {
  $_SESSION['msg'] = "Ya iniciaste sesión";
  header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CondominioApp - Inicio de Sesión</title>
  <link rel="stylesheet" href="css/login.css">



	
</head>
<body>
<div class="container">
  <div class="login-box">
		
      <form name="form1" action="login.php" method="post">
      <img src="img/Profile.png" class="avatar" alt="Avatar Image">
          <h1>Iniciar Sesion</h1>

          <?php echo display_error(); ?>
 
          <label>Cedula:</label><br />
          <input class="form-control" type="number" name="cedula" id="cedula" placeholder="Introduzca su cedula"><br />
          <label>Contraseña:</label><br />
          <input class="form-control" type="password" name="password" placeholder="Introduzca su contraseña"><br />
          <a href="#">¿Olvidaste tu contraseña?</a><br>
    
 
          <br />
          <button type="submit" class="btn btn-success btn-block" name="login_btn" class="btn btn-default">Entrar</button>
      </form>
	</div>
  </div>
</body>
</html>

