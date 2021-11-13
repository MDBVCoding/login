<?php 

include_once 'funciones.php'; 

if (isLoggedIn()) {
  $_SESSION['msg'] = "Ya iniciaste sesión";
  header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/login.css" />
    <title>Iniciar sesion</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin">
          <form  action="login.php" method="post">
            <h2 class="title">Iniciar sesion</h2>
            <?php echo display_error(); ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input class="form-control" type="number" name="cedula" id="cedula" placeholder="Introduzca su cedula">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input class="form-control" type="password" name="password" placeholder="Introduzca su contraseña"><br />
            </div>
            <a href="cambiarcontrasena/cambiarcontrasena.php" >¿Olvidaste tu contraseña?</a><br>
            <button type="submit" class="btn btn-success btn-block" name="login_btn" class="btn btn-default">Entrar</button>
           
          </form>
        
        </div>
      </div>


    <script src="app.js"></script>
  </body>
</html>
