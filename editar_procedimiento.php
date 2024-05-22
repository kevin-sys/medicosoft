<?php
require "conexion.php";
session_start();
if (!isset($_SESSION['Identificacion'])) {
  header("Location: index.php");
}
$Id_CUPS = '';
$Nombre = '';
$PrecioProcedimiento = '';
$FechaRegistro = '';

if (isset($_GET['Id_CUPS'])) {
  $Id_CUPS = $_GET['Id_CUPS'];
  $query = "SELECT * FROM procedimiento WHERE Id_CUPS='$Id_CUPS'";
  $result = mysqli_query($mysqli, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['Nombre'];
    $PrecioProcedimiento = $row['PrecioProcedimiento'];
    $FechaRegistro = $row['FechaRegistro'];
  }
}

if (isset($_POST['update'])) {
  $Id_CUPS = $_GET['Id_CUPS'];
  $Nombre = $_POST['Nombre'];
  $PrecioProcedimiento = $_POST['PrecioProcedimiento'];

  $query = "UPDATE procedimiento SET Nombre='$Nombre', PrecioProcedimiento='$PrecioProcedimiento' WHERE Id_CUPS='$Id_CUPS'";
  $result = mysqli_query($mysqli, $query);

  if (!$result) {
    echo "<script language='javascript'> 
    alert('ERROR AL ACTUALIZAR LOS DATOS') 
    window.location='gestion-procedimientos.php' 
    </script>";
    exit();
  } else {
    echo "<script language='javascript'> 
    alert('PROCEDIMIENTO ACTUALIZADO SATISFACTORIAMENTE') 
    window.location='gestion-procedimientos.php' 
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modificar procedimientos - MEDICOSOFT</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <!-- BOOTSTRAP 4 -->
  <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
  <!-- FONT AWESOEM -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="gestion-paciente.php">Modificar procedimientos del sistema MEDICOSOFT</a>
    </div>
  </nav>

  <div class="container p-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-body">
          <h3>¡Señor usuario, usted va a modificar los datos del procedimiento, tenga precaución!</h3>
          <form action="editar_procedimiento.php?Id_CUPS=<?php echo $_GET['Id_CUPS']; ?>" method="POST">
            <div class="form-group">
              <label>ID CUPS</label>
              <input name="Id_CUPS" type="text" class="form-control" value="<?php echo $Id_CUPS; ?>" readonly>
            </div>
            <div class="form-group">
              <label>Nombre</label>
              <textarea name="Nombre" class="form-control" required minlength="3" maxlength="150" rows="4"><?php echo $Nombre; ?></textarea>
            </div>
            <div class="form-group">
              <label>Precio del Procedimiento</label>
              <input name="PrecioProcedimiento" type="number" class="form-control" step="0.01" value="<?php echo $PrecioProcedimiento; ?>" required>
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block" name="update">Actualizar datos del procedimiento</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php include('includes/footer.php'); ?>
