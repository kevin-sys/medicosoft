<?php


include('conexionv.php');

if (isset($_POST['insertapaciente'])) {
  $Identificacion = $_POST['Identificacion'];
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
  $Eps = $_POST['Eps'];
  $Pais = $_POST['Pais'];
  $GrupoSanguineo = $_POST['GrupoSanguineo'];
  $RH = $_POST['RH']; 


  $query = "INSERT INTO paciente(Identificacion,PrimerNombre,SegundoNombre, PrimerApellido, SegundoApellido, FechaNacimiento, Genero, Telefono, Email, Direccion, Ciudad, Eps, Pais, GrupoSanguineo,RH) VALUES ('$Identificacion', '$PrimerNombre', '$SegundoNombre', '$PrimerApellido', '$SegundoApellido', '$FechaNacimiento', '$Genero', '$Telefono', '$Email', '$Direccion', '$Ciudad', '$Eps', '$Pais', '$GrupoSanguineo', '$RH')";
  $result = mysqli_query($conn, $query);
  

  if(!$result) 
  { 
    echo" 
    <script language='javascript'> 
    alert('...: ERROR AL GUARDAR LOS DATOS, CONTACTE AL ADMINISTRADOR :...') 
    window.location='gestion-paciente.php' 
    </script>"; 
    exit(); 
  } 
  else 
  { 
    echo" 
    <script language='javascript'> 
    alert('...: EL PACIENTE SE HA REGISTRADO CON EXITO :...') 
    window.location='gestion-paciente.php' 
    </script>"; 
  }


}

?>
