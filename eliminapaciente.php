<?php
include("conexionv.php");

if(isset($_GET['Identificacion'])) {
  $Identificacion = $_GET['Identificacion'];
  $query = "DELETE FROM paciente WHERE Identificacion = $Identificacion";
  $result = mysqli_query($conn, $query);
  if($result) {
    echo "<script language='javascript'> 
    alert('...: EL PACIENTE SE HA ELIMINADO SATISFACTORIAMENTE :...') 
    window.location='gestion-paciente.php' 
    </script>"; 
    exit;
  } else {
    echo "<script language='javascript'> 
    alert('...: HA OCURRIDO UN ERROR, CONTACTE AL ADMINISTRADOR :...') 
    window.location='gestion-paciente.php' 
    </script>"; 
    exit;
  }
}
?>
