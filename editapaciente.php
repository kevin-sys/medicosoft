<?php
require "conexion.php";
session_start();
if (!isset($_SESSION['Identificacion'])) {
  header("Location: index.php");
}
$Identificacion = $_SESSION['Identificacion'];

$PrimerNombre = '';
$SegundoNombre = '';
$PrimerApellido = '';
$SegundoApellido = '';
$FechaNacimiento = '';
$Genero = '';
$Telefono = '';
$Email = '';
$Direccion = '';
$Ciudad = '';
$Pais = '';
$Eps = '';
$GrupoSanguineo = '';
$RH = '';

if (isset($_GET['Identificacion'])) {
  $Identificacion = $_GET['Identificacion'];
  $query = "SELECT * FROM paciente WHERE Identificacion=$Identificacion";
  $result = mysqli_query($mysqli, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $PrimerNombre = $row['PrimerNombre'];
    $SegundoNombre = $row['SegundoNombre'];
    $PrimerApellido = $row['PrimerApellido'];
    $SegundoApellido = $row['SegundoApellido'];
    $FechaNacimiento = $row['FechaNacimiento'];
    $Genero = $row['Genero'];
    $Telefono = $row['Telefono'];
    $Email = $row['Email'];
    $Direccion = $row['Direccion'];
    $Ciudad = $row['Ciudad'];
    $Pais = $row['Pais'];
    $Eps = $row['Eps'];
    $GrupoSanguineo = $row['GrupoSanguineo'];
    $RH = $row['RH'];
  }
}

if (isset($_POST['update'])) {
  $Identificacion = $_GET['Identificacion'];
  $PrimerNombre = $_POST['PrimerNombre'];
  $SegundoNombre = $_POST['SegundoNombre'];
  $PrimerApellido = $_POST['PrimerApellido'];
  $SegundoApellido = $_POST['SegundoApellido'];
  $FechaNacimiento = $_POST['FechaNacimiento'];
  $Genero = $_POST['Genero'];
  $Telefono = $_POST['Telefono'];
  $Email = $_POST['Email'];
  $Direccion = $_POST['Direccion'];
  $Ciudad = $_POST['Ciudad'];
  $Pais = $_POST['Pais'];
  $Eps = $_POST['Eps'];
  $GrupoSanguineo = $_POST['GrupoSanguineo'];
  $RH = $_POST['RH'];

  $query = "UPDATE paciente SET PrimerNombre='$PrimerNombre', SegundoNombre='$SegundoNombre', PrimerApellido='$PrimerApellido', SegundoApellido='$SegundoApellido', FechaNacimiento='$FechaNacimiento', Genero='$Genero', Telefono='$Telefono', Email='$Email', Direccion='$Direccion', Ciudad='$Ciudad', Pais='$Pais', Eps='$Eps', GrupoSanguineo='$GrupoSanguineo', RH='$RH' WHERE Identificacion=$Identificacion";
  mysqli_query($mysqli, $query);
  echo "<script language='javascript'> 
  alert('...: PACIENTE ACTUALIZADO SATISFACTORIAMENTE :...') 
  window.location='gestion-paciente.php' 
  </script>";
}

?>
<?php include('includes/header.php'); ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-body">
        <h3>¡Señor usuario, usted va a modificar los datos del paciente, tenga precaución!</h3>        
        <div class="row">
    <div class="col-md-4">
        <form action="editapaciente.php?Identificacion=<?php echo $_GET['Identificacion']; ?>" method="POST">
          <div class="form-group">
            <label>Identificación</label>
            <input name="Identificacion" type="text" class="form-control" value="<?php echo $Identificacion; ?>" readonly>
          </div></div>
          <div class="col-md-4">
          <div class="form-group">
            <label>Primer Nombre</label>
            <input name="PrimerNombre" type="text" class="form-control" value="<?php echo $PrimerNombre; ?>" required>
          </div></div>
          <div class="col-md-4">
          <div class="form-group">
            <label>Segundo Nombre</label>
            <input name="SegundoNombre" type="text" class="form-control" value="<?php echo $SegundoNombre; ?>">
          </div></div>
          </div>
          <div class="row">
    <div class="col-md-4">
          <div class="form-group">
            <label>Primer Apellido</label>
            <input name="PrimerApellido" type="text" class="form-control" value="<?php echo $PrimerApellido; ?>" required>
          </div></div>
    <div class="col-md-4">
          <div class="form-group">
            <label>Segundo Apellido</label>
            <input name="SegundoApellido" type="text" class="form-control" value="<?php echo $SegundoApellido; ?>">
          </div></div>
    <div class="col-md-4">
          <div class="form-group">
            <label>Fecha de Nacimiento</label>
            <input name="FechaNacimiento" type="date" class="form-control" value="<?php echo $FechaNacimiento; ?>" required>
          </div></div></div>

          
          <div class="row">
    <div class="col-md-4">
          <div class="form-group">
            <label>Género</label>
            <select name="Genero" class="form-control" required>
              <option value="Masculino" <?php if($Genero == 'Masculino') echo 'selected'; ?>>Masculino</option>
              <option value="Femenino" <?php if($Genero == 'Femenino') echo 'selected'; ?>>Femenino</option>
            </select>
          </div></div>
          <div class="col-md-4">
          <div class="form-group">
            <label>Teléfono</label>
            <input name="Telefono" type="text" class="form-control" value="<?php echo $Telefono; ?>" required>
          </div></div>
          <div class="col-md-4">
          <div class="form-group">
            <label>Correo Electrónico</label>
            <input name="Email" type="email" class="form-control" value="<?php echo $Email; ?>" required>
          </div></div></div>

          <div class="row">
    <div class="col-md-4">
          <div class="form-group">
            <label>Dirección</label>
            <input name="Direccion" type="text" class="form-control" value="<?php echo $Direccion; ?>" required>
          </div></div>
          <div class="col-md-4">
          <div class="form-group">
            <label>Ciudad</label>
            <input name="Ciudad" type="text" class="form-control" value="<?php echo $Ciudad; ?>" required>
          </div></div>
          <div class="col-md-4">
          <div class="form-group">
            <label>País</label>
            <input name="Pais" type="text" class="form-control" value="<?php echo $Pais; ?>" required>
          </div></div></div>

          <div class="row">
    <div class="col-md-4">
          <div class="form-group">
            <label>EPS</label>
            <input name="Eps" type="text" class="form-control" value="<?php echo $Eps; ?>" required>
          </div></div>
          <div class="col-md-4">
          <div class="form-group">
            <label>Grupo Sanguíneo</label>
            <input name="GrupoSanguineo" type="text" class="form-control" value="<?php echo $GrupoSanguineo; ?>" required>
          </div></div>
          <div class="col-md-4">
          <div class="form-group">
            <label>RH</label>
            <input name="RH" type="text" class="form-control" value="<?php echo $RH; ?>" required>
          </div></div></div>
          <button type="submit" class="btn btn-warning btn-lg btn-block" name="update">Actualizar datos del paciente</button>

        </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
