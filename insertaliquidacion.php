<?php


include('conexionv.php');

if (isset($_POST['insertaliquidacion'])) {

  $Identificacion = $_POST['Identificacion'];
  $TipoAreaDesempeño = $_POST['TipoAreaDesempeño'];
  $PuntosAreaDesempeño   = $_POST['PuntosAreaDesempeño'];

  $BonificacionAreaDesempeño = $_POST['BonificacionAreaDesempeño'];
  $TotalBonificacionAreaDesempeño  = $_POST['TotalBonificacionAreaDesempeño'];
  $TipoCategoriaDocente = $_POST['TipoCategoriaDocente'];

  $PuntosCategoriaDocente  = $_POST['PuntosCategoriaDocente'];
  $RemuneracionCategoriaDocente  = $_POST['RemuneracionCategoriaDocente'];
  $TotalLiquidarCategoriaDocente = $_POST['TotalLiquidarCategoriaDocente'];

  $TipoExperienciaDocente = $_POST['TipoExperienciaDocente'];
  $PuntosAñoExperiencia = $_POST['PuntosAñoExperiencia'];
  $CantidadAniosExperiencia  = $_POST['CantidadAniosExperiencia'];

  $PuntosTotalesExperienciaDocente = $_POST['PuntosTotalesExperienciaDocente'];
  $PuntosInvestigador = $_POST['PuntosInvestigador'];
  $PuntoGrupoInvestigacion = $_POST['PuntoGrupoInvestigacion'];



  $PrimerNombre = $_POST['PrimerNombre'];
  $SegundoNombre = $_POST['SegundoNombre'];
  $PrimerApellido = $_POST['PrimerApellido'];
  $SegundoApellido = $_POST['SegundoApellido'];
  $Facultad = $_POST['Facultad'];


  if(isset($_POST['PuntosArticulosRevistasIdexadas'])){
    $PuntosArticulosRevistasIdexadas   = $_POST['PuntosArticulosRevistasIdexadas'];
  }else{
    $PuntosArticulosRevistasIdexadas =0;
  }

  if(isset($_POST['PuntosArticulosMediosReconocidosISBN'])){
    $PuntosArticulosMediosReconocidosISBN   = $_POST['PuntosArticulosMediosReconocidosISBN'];
  }else{
    $PuntosArticulosMediosReconocidosISBN =0;
  }

  if(isset($_POST['PuntosLibrosISBN'])){
    $PuntosLibrosISBN   = $_POST['PuntosLibrosISBN'];
  }else{
    $PuntosLibrosISBN =0;
  }

  if(isset($_POST['PuntosCapitulosLibrosISBN'])){
    $PuntosCapitulosLibrosISBN   = $_POST['PuntosCapitulosLibrosISBN'];
  }else{
    $PuntosCapitulosLibrosISBN =0;
  }

  if(isset($_POST['PuntosModulosISBN'])){
    $PuntosModulosISBN   = $_POST['PuntosModulosISBN'];
  }else{
    $PuntosModulosISBN =0;
  }

  if(isset($_POST['PuntosSoftwareDerechoAutor'])){
    $PuntosSoftwareDerechoAutor   = $_POST['PuntosSoftwareDerechoAutor'];
  }else{
    $PuntosSoftwareDerechoAutor =0;
  }

  if(isset($_POST['PuntosPatentes'])){
    $PuntosPatentes   = $_POST['PuntosPatentes'];
  }else{
    $PuntosPatentes =0;
  }
  if(isset($_POST['PuntosAsesorMonografias'])){
    $PuntosAsesorMonografias   = $_POST['PuntosAsesorMonografias'];
  }else{
    $PuntosAsesorMonografias =0;
  }

  if(isset($_POST['PuntosAsesoriasPracticasOpcionGrado'])){
    $PuntosAsesoriasPracticasOpcionGrado   = $_POST['PuntosAsesoriasPracticasOpcionGrado'];
  }else{
    $PuntosAsesoriasPracticasOpcionGrado =0;
  }

  


  $query = "INSERT INTO liquidacion(Identificacion, TipoAreaDesempeño, PuntosAreaDesempeño, BonificacionAreaDesempeño,TotalBonificacionAreaDesempeño, TipoCategoriaDocente,   PuntosCategoriaDocente,  RemuneracionCategoriaDocente, TotalLiquidarCategoriaDocente, TipoExperienciaDocente, PuntosAñoExperiencia, CantidadAniosExperiencia,  PuntosTotalesExperienciaDocente, PuntosInvestigador, PuntosArticulosRevistasIdexadas, PuntosArticulosMediosReconocidosISBN, PuntosLibrosISBN, PuntosCapitulosLibrosISBN,  PuntosModulosISBN, PuntosSoftwareDerechoAutor, PuntosPatentes, PuntosAsesorMonografias, PuntosAsesoriasPracticasOpcionGrado,  PuntoGrupoInvestigacion, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Facultad) VALUES ('$Identificacion', '$TipoAreaDesempeño', '$PuntosAreaDesempeño', '$BonificacionAreaDesempeño','$TotalBonificacionAreaDesempeño', '$TipoCategoriaDocente',   '$PuntosCategoriaDocente',  '$RemuneracionCategoriaDocente', '$TotalLiquidarCategoriaDocente', '$TipoExperienciaDocente', '$PuntosAñoExperiencia', '$CantidadAniosExperiencia',  '$PuntosTotalesExperienciaDocente', '$PuntosInvestigador', '$PuntosArticulosRevistasIdexadas', '$PuntosArticulosMediosReconocidosISBN', '$PuntosLibrosISBN', '$PuntosCapitulosLibrosISBN',  '$PuntosModulosISBN', '$PuntosSoftwareDerechoAutor', '$PuntosPatentes', '$PuntosAsesorMonografias', '$PuntosAsesoriasPracticasOpcionGrado',  '$PuntoGrupoInvestigacion', '$PrimerNombre', '$SegundoNombre', '$PrimerApellido', '$SegundoApellido', '$Facultad')";


 /* $QueryUpdateDocente = "UPDATE docente set Estado = 'Revisado' WHERE Identificacion=$Identificacion";
  $ResultadoUpdateDocente = mysqli_query($conn, $QueryUpdateDocente);
*/

  
  $result = mysqli_query($conn, $query);


  if(!$result) 
  { 
    echo" 
    <script language='javascript'> 
    alert('ERROR: YA SE HA REVISADO A ESTE DOCENTE') 
    window.location='ConsultarDocente.php' 
    </script>"; 
    exit(); 
  } 
  else 
  { 
    echo" 
    <script language='javascript'> 
    alert('ASIGNACIÓN DE PUNTOS EXITOSA!') 
    window.location='ConsultarDocente.php' 
    </script>"; 
  }
}
else
{
  echo" 
  <script language='javascript'> 
  alert('USTED NO ESTA AUTORIZADO PARA ACCEDER A ESTE RECURSO') 
  window.location='ConsultarDocente.php' 
  </script>"; 
  exit(); 
}

?>
