<?php


include('conexionv.php');

if (isset($_POST['insertausuario'])) {
  $Identificacion = $_POST['Identificacion'];
  $Usuario = $_POST['Usuario'];
  $Contraseña = $_POST['Contraseña'];
  $query = "INSERT INTO usuario(Identificacion,Usuario,Contraseña) VALUES ('$Identificacion', '$Usuario', '$Contraseña')";
  $result = mysqli_query($conn, $query);
  

  if(!$result) 
  { 
    echo" 
    <script language='javascript'> 
    alert('ERROR AL GUARDAR LOS DATOS') 
    window.location='gestion-usuario.php' 
    </script>"; 
    exit(); 
  } 
  else 
  { 
    echo" 
    <script language='javascript'> 
    alert('REGISTRO EXITOSO') 
    window.location='gestion-usuario.php' 
    </script>"; 
  }


}

?>
