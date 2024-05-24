<?php
require "conexion.php";
session_start();
if (!isset($_SESSION['Identificacion'])) {
  header("Location: index.php");
}
$Id = '';

if (isset($_GET['Id'])) {
  $Id = $_GET['Id'];
  $query = "SELECT * FROM cita_medica WHERE Id=$Id";
  $result = mysqli_query($mysqli, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $FechaCita = $row['FechaCita'];
    $HoraCita = $row['HoraCita'];
    $NombreProcedimiento = $row['NombreProcedimiento'];
    $PrecioProcedimiento = $row['PrecioProcedimiento'];
    $NombreProfesional = $row['NombreProfesional'];
    $IdentificacionProfesional = $row['IdentificacionProfesional'];
    $Identificacion = $row['Identificacion'];
    $PrimerNombre = $row['PrimerNombre'];
    $SegundoNombre = $row['SegundoNombre'];
    $PrimerApellido = $row['PrimerApellido'];
    $SegundoApellido = $row['SegundoApellido'];
    $FechaNacimiento = $row['FechaNacimiento'];
    $Genero = $row['Genero'];
    $GrupoSanguineo = $row['GrupoSanguineo'];
    $RH = $row['RH'];
    $Telefono = $row['Telefono'];
    $Email = $row['Email'];
    $Direccion = $row['Direccion'];
    $Ciudad = $row['Ciudad'];
    $EstadoCita = $row['EstadoCita'];
    $Valoracion = $row['Valoracion'];
  }
}

if (isset($_POST['update'])) {
  $FechaCita = $_POST['FechaCita'];
  $HoraCita = $_POST['HoraCita'];
  $NombreProcedimiento = $_POST['NombreProcedimiento'];
  $PrecioProcedimiento = $_POST['PrecioProcedimiento'];
  $NombreProfesional = $_POST['NombreProfesional'];
  $IdentificacionProfesional = $_POST['IdentificacionProfesional'];
  $Identificacion = $_POST['Identificacion'];
  $PrimerNombre = $_POST['PrimerNombre'];
  $SegundoNombre = $_POST['SegundoNombre'];
  $PrimerApellido = $_POST['PrimerApellido'];
  $SegundoApellido = $_POST['SegundoApellido'];
  $FechaNacimiento = $_POST['FechaNacimiento'];
  $Genero = $_POST['Genero'];
  $GrupoSanguineo = $_POST['GrupoSanguineo'];
  $RH = $_POST['RH'];
  $Telefono = $_POST['Telefono'];
  $Email = $_POST['Email'];
  $Direccion = $_POST['Direccion'];
  $Ciudad = $_POST['Ciudad'];
  $EstadoCita = $_POST['EstadoCita'];
  $Valoracion = $_POST['Valoracion'];

  $query = "UPDATE cita_medica SET FechaCita='$FechaCita', HoraCita='$HoraCita', NombreProcedimiento='$NombreProcedimiento', PrecioProcedimiento='$PrecioProcedimiento', NombreProfesional='$NombreProfesional', IdentificacionProfesional='$IdentificacionProfesional', Identificacion='$Identificacion', PrimerNombre='$PrimerNombre', SegundoNombre='$SegundoNombre', PrimerApellido='$PrimerApellido', SegundoApellido='$SegundoApellido', FechaNacimiento='$FechaNacimiento', Genero='$Genero', GrupoSanguineo='$GrupoSanguineo', RH='$RH', Telefono='$Telefono', Email='$Email', Direccion='$Direccion', Ciudad='$Ciudad', EstadoCita='$EstadoCita', Valoracion='$Valoracion' WHERE Id=$Id";
  mysqli_query($mysqli, $query);
  echo "<script language='javascript'> 
  alert('...: CITA MÉDICA ACTUALIZADA SATISFACTORIAMENTE :...') 
  window.location='mis-citas-medicas.php' 
  </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CONFIRMAR CITA - MEDICOSOFT</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <!-- BOOTSTRAP 4 -->
  <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
  <!-- FONT AWESOEM -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="gestion-paciente.php">CONFIRMAR CITA AGENDADA EN EL SISTEMA MEDICOSOFT</a>
    </div>
  </nav>

  <div class="container p-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-body">
          <form action="confirma-cita.php?Id=<?php echo $_GET['Id']; ?>" method="POST">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Fecha de Cita</label>
                  <input name="FechaCita" type="date" class="form-control" value="<?php echo $FechaCita; ?>" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Hora de Cita</label>
                  <input name="HoraCita" type="time" class="form-control" value="<?php echo $HoraCita; ?>" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Nombre del Procedimiento</label>
                  <input name="NombreProcedimiento" type="text" class="form-control" value="<?php echo $NombreProcedimiento; ?>" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Precio del Procedimiento</label>
                  <input name="PrecioProcedimiento" type="text" class="form-control" value="<?php echo $PrecioProcedimiento; ?>" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Nombre del Profesional</label>
                  <input name="NombreProfesional" type="text" class="form-control" value="<?php echo $NombreProfesional; ?>" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Identificación del Profesional</label>
                  <input name="IdentificacionProfesional" type="text" class="form-control" value="<?php echo $IdentificacionProfesional; ?>" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Identificación del Paciente</label>
                  <input name="Identificacion" type="text" class="form-control" value="<?php echo $Identificacion; ?>" readonly>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Primer Nombre del Paciente</label>
                  <input name="PrimerNombre" type="text" class="form-control" value="<?php echo $PrimerNombre; ?>" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Segundo Nombre del Paciente</label>
                  <input name="SegundoNombre" type="text" class="form-control" value="<?php echo $SegundoNombre; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Primer Apellido del Paciente</label>
                  <input name="PrimerApellido" type="text" class="form-control" value="<?php echo $PrimerApellido; ?>" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Segundo Apellido del Paciente</label>
                  <input name="SegundoApellido" type="text" class="form-control" value="<?php echo $SegundoApellido; ?>">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Fecha de Nacimiento del Paciente</label>
                  <input name="FechaNacimiento" type="date" class="form-control" value="<?php echo $FechaNacimiento; ?>" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Género del Paciente</label>
                  <select name="Genero" class="form-control" required>
                    <option value="Masculino" <?php if($Genero == 'Masculino') echo 'selected'; ?>>Masculino</option>
                    <option value="Femenino" <?php if($Genero == 'Femenino') echo 'selected'; ?>>Femenino</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Teléfono del Paciente</label>
                  <input name="Telefono" type="text" class="form-control" value="<?php echo $Telefono; ?>" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Email del Paciente</label>
                  <input name="Email" type="email" class="form-control" value="<?php echo $Email; ?>" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Dirección del Paciente</label>
                  <input name="Direccion" type="text" class="form-control" value="<?php echo $Direccion; ?>" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Ciudad del Paciente</label>
                  <input name="Ciudad" type="text" class="form-control" value="<?php echo $Ciudad; ?>" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Estado de la Cita</label>
                  <select name="EstadoCita" class="form-control" required>
                    <option value="Completada">Completada</option>
                    <option value="Cancelada">Cancelada</option>
                    <option value="No asistió">No asistió</option>
                  </select>
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Valoración de la Cita</label>
                  <textarea name="Valoracion" class="form-control"><?php echo $Valoracion; ?></textarea>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block" name="update">Confirmar los datos de la cita</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php include('includes/footer.php'); ?>
