<?php

session_start();

if (!isset($_SESSION['CambiarContraseña']) || !$_SESSION['CambiarContraseña']) {
  // Si la sesión 'CambiarContraseña' no está establecida o es falsa, redirecciona al usuario a la página de inicio
  header("Location: index.php");
  exit();
}

if ($_POST) {
  // Procesar el formulario para cambiar la contraseña

  require "conexion.php";

  $NuevaContraseña = $_POST['NuevaContraseña'];
  $ConfirmarContraseña = $_POST['ConfirmarContraseña'];

  // Validar que las contraseñas coincidan
  if ($NuevaContraseña != $ConfirmarContraseña) {
    echo "<script>alert('Las contraseñas no coinciden. Por favor, inténtelo de nuevo.');</script>";
  } else {
    // Actualizar la contraseña en la base de datos
    $Identificacion = $_SESSION['Identificacion'];
    $hashed_password = password_hash($NuevaContraseña, PASSWORD_DEFAULT);

    $sql = "UPDATE usuario SET Contraseña='$NuevaContraseña', ValidacionUsuario=1 WHERE Identificacion='$Identificacion'";

    if ($mysqli->query($sql) === TRUE) {
      // Contraseña actualizada exitosamente
      echo "<script>alert('¡Contraseña actualizada correctamente!');</script>";
      // Redireccionar al usuario a la página principal
      header("Location: Principal.php");
      exit();
    } else {
      // Error al actualizar la contraseña
      echo "<script>alert('Error al actualizar la contraseña. Por favor, inténtelo de nuevo.');</script>";
    }
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Cambiar Contraseña - SIMULASOFT</title>
</head>
<body>
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">
    <div class="login-head">
      <h1>SIMULASOFT</h1>
    </div>
    <br>
    <div class="login-box">
     <form method="POST" class="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <h4 class="login-head">Cambiar Contraseña</h4>
      <div class="form-group">
        <label class="control-label">Nueva Contraseña</label>
        <input class="form-control" type="password" name="NuevaContraseña" placeholder="Nueva Contraseña" required>
      </div>
      <div class="form-group">
        <label class="control-label">Confirmar Contraseña</label>
        <input class="form-control" type="password" name="ConfirmarContraseña" placeholder="Confirmar Contraseña" required>
      </div>
      <div class="form-group btn-container">
        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-lock fa-lg fa-fw"></i>Cambiar Contraseña</button>
      </div>
    </form>
  </div>
</section>
<!-- Essential javascripts for application to work-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<script type="text/javascript">
  // Login Page Flipbox control
  $('.login-content [data-toggle="flip"]').click(function() {
   $('.login-box').toggleClass('flipped');
   return false;
 });
</script>
</body>
</html>
