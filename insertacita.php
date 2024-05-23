<?php
include('conexionv.php');

if (isset($_POST['insertacita'])) {
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

    $query = "INSERT INTO cita_medica (FechaCita, HoraCita, NombreProcedimiento, PrecioProcedimiento, NombreProfesional, IdentificacionProfesional, Identificacion, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, FechaNacimiento, Genero, GrupoSanguineo, RH, Telefono, Email, Direccion, Ciudad) 
              VALUES ('$FechaCita', '$HoraCita', '$NombreProcedimiento', '$PrecioProcedimiento', '$NombreProfesional', '$IdentificacionProfesional', '$Identificacion', '$PrimerNombre', '$SegundoNombre', '$PrimerApellido', '$SegundoApellido', '$FechaNacimiento', '$Genero', '$GrupoSanguineo', '$RH', '$Telefono', '$Email', '$Direccion', '$Ciudad')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "
        <script language='javascript'> 
        alert('...: ERROR AL GUARDAR LOS DATOS, CONTACTE AL ADMINISTRADOR :...') 
        window.location='asignar-cita.php' 
        </script>";
        exit();
    } else {
        echo "
        <script language='javascript'> 
        alert('...: LA CITA MÉDICA SE HA REGISTRADO CON ÉXITO :...') 
        window.location='asignar-cita.php' 
        </script>";
    }
}
?>
