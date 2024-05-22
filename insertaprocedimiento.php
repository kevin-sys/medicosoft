<?php
include('conexionv.php');

if (isset($_POST['insertar_procedimiento'])) {
    $Id_CUPS = $_POST['Id_CUPS'];
    $Nombre = $_POST['Nombre'];
    $PrecioProcedimiento = $_POST['PrecioProcedimiento'];

    $query = "INSERT INTO procedimiento (Id_CUPS, Nombre, PrecioProcedimiento) VALUES ('$Id_CUPS', '$Nombre', '$PrecioProcedimiento')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "
        <script language='javascript'>
        alert('ERROR AL GUARDAR LOS DATOS');
        window.location='gestion-procedimientos.php';
        </script>";
        exit();
    } else {
        echo "
        <script language='javascript'>
        alert('REGISTRO EXITOSO');
        window.location='gestion-procedimientos.php';
        </script>";
    }
}
?>
