<?php
require "conexion.php";
session_start();
$Usuario = $_SESSION['Usuario'];
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
$Eps = '';
$GrupoSanguineo = '';
$RH = '';

if (isset($_GET['Identificacion'])) 
{
  $Identificacion = $_GET['Identificacion'];
  //$query = "SELECT * FROM activos WHERE Identificacion=$Identificacion";
  $query = "SELECT * FROM paciente WHERE Identificacion='$Identificacion'";

  $result = mysqli_query($mysqli, $query);
  if (mysqli_num_rows($result) == 1) 
  {
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
    $Eps = $row['Eps'];
    $GrupoSanguineo = $row['GrupoSanguineo'];
    $RH = $row['RH'];


}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CREAR AGENDA MÉDICA - MEDICOSOFT</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css" />
    <link rel="stylesheet" type="text/css"
    href="assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href=""></a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
        aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"
                aria-label="Open Profile Menu"><i class="fa fa fa-info"></i></a>
            </li>
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"
                aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i>Salir</a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php if ($Usuario == "Administrador") { ?>
        <aside class="app-sidebar">
            <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
                src="images/logoUpc.png" width="60" height="50" alt="User Image">
                <div>
                    <p class="app-sidebar__user-name">Administrador</p>
                    <p class="app-sidebar__user-designation">SimulaSoft</p>
                </div>
            </div>
            <ul class="app-menu">
                <li><a class="app-menu__item" href="principal.php"><i class="app-menu__icon fa fa-home fa-lg"></i><span
                    class="app-menu__label">Menu Principal</span></a></li>

                    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Gestión General</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="treeview-item" href="GestionDocente.php"><i class="icon fa fa-circle-o"></i>Registro del aspirante</a></li>
                            <li><a class="treeview-item" href="ConsultarDocente.php"><i class="icon fa fa-circle-o"></i> Listado de aspirantes</a></li>
                            <li><a class="treeview-item" href="http://www2.unicesar.edu.co/unicesar/hermesoft/vortal/miVortal/logueo.jsp"><i class="icon fa fa-circle-o"></i>Vortal HermeSoft</a></li>
                            <li><a class="treeview-item" href="https://github.com/kevin-sys"><i class="icon fa fa-circle-o"></i>Contactar al desarrollador</a></li>
                        </ul>
                    </li>
                    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Gestión financiera</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="treeview-item" href="docs/LiquidacionGeneral.php"><i class="icon fa fa-circle-o"></i>Liquidación general</a></li>
                            <li><a class="treeview-item" href="docs/CargarDocumentos.php"><i class="icon fa fa-circle-o"></i>Cargar hoja de vida</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </aside>
        <?php } ?>

        <?php if ($Usuario != "Administrador") { ?>
            <aside class="app-sidebar">
                <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
                    src="images/logo.png" width="60" height="50" alt="User Image">
                    <div>
                        <p class="app-sidebar__user-name">Docente</p>
                        <p class="app-sidebar__user-designation">SimulaSoft</p>
                    </div>
                </div>
                <ul class="app-menu">
                    <li><a class="app-menu__item" href="principal.php"><i class="app-menu__icon fa fa-home fa-lg"></i><span
                        class="app-menu__label">Menu Principal</span></a></li>

                        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                            class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Gestión General</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="treeview-item" href="GestionDocente.php"><i class="icon fa fa-circle-o"></i>Formato de puntos</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </aside>
            <?php } ?>


            <main class="app-content">
                <div>
                    <h4>Apartar cita médica para el paciente registrado en el sistema MEDICOSOFT.</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tile">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="employeeForm" action="insertacita.php" method="POST">
                                        <div class="row">
                                          <div class="col-lg-2">
                                            <div class="form-group">
                                              <label class="control-label">Fecha de la cita</label>
                                              <input class="form-control" type="date" name="FechaCita"
                                              placeholder="*Ingrese Fecha de la cita" required="required">
                                          </div>
                                      </div>

                                      <div class="col-lg-2">
                                        <div class="form-group">
                                            <label class="control-label">Hora de la cita</label>
                                            <input class="form-control" type="time" name="HoraCita"
                                            placeholder="*Seleccione la hora de la cita" required="required">
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="control-label">Seleccione Procedimiento</label>
                                            <select id="procedimiento" class="form-control" name="NombreProcedimiento" onchange="actualizarPrecio()">
                                                <option value="">Seleccione...</option>
                                                <?php
                                                include 'conexion.php';

                                                $query = $mysqli->query("SELECT * FROM procedimiento");
                                                if ($query) {
                                                    while ($row = $query->fetch_assoc()) {
                                                        echo '<option value="' . $row['Nombre'] . '" data-precio="' . $row['PrecioProcedimiento'] . '">' . htmlspecialchars($row['Nombre']) . '</option>';
                                                    }
                                                } else {
                                                    echo "Error en la consulta: " . $mysqli->error;
                                                }

                                                $mysqli->close();
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label">Precio del Procedimiento</label>
                                            <input id="precioProcedimiento" class="form-control" type="text" name="PrecioProcedimiento" readonly>
                                        </div>
                                    </div>



                                    <!-- Select para Nombre del Usuario -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Seleccione el profesional que va a atender</label>
                                            <select id="usuario" class="form-control" name="NombreProfesional" onchange="actualizarIdentificacion()">
                                                <option value="">Seleccione...</option>
                                                <?php
                                                include 'conexion.php';

                                                $query = $mysqli->query("SELECT * FROM usuario WHERE usuario='Especialista'");
                                                if ($query) {
                                                    while ($row = $query->fetch_assoc()) {
                                                        echo '<option value="' . $row['Nombre'] . '" data-identificacion="' . $row['Identificacion'] . '">' . htmlspecialchars($row['Nombre']) . '</option>';
                                                    }
                                                } else {
                                                    echo "Error en la consulta: " . $mysqli->error;
                                                }

                                                $mysqli->close();
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Caja de texto para la Identificación del Usuario -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Identificación del profesional</label>
                                            <input id="identificacionUsuario" class="form-control" type="text" name="IdentificacionProfesional" readonly>
                                        </div>
                                    </div>


                                    <script>
                                        function actualizarIdentificacion() {
                                            var select = document.getElementById('usuario');
                                            var identificacion = select.options[select.selectedIndex].getAttribute('data-identificacion');
                                            document.getElementById('identificacionUsuario').value = identificacion;
                                        }
                                    </script>


                                    <script>
                                        function actualizarPrecio() {
                                            var select = document.getElementById('procedimiento');
                                            var precio = select.options[select.selectedIndex].getAttribute('data-precio');
                                            document.getElementById('precioProcedimiento').value = precio;
                                        }
                                    </script>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                          <label class="control-label">Identificación</label>
                                          <input type="text" class="form-control" name="Identificacion"
                                          value="<?php echo $Identificacion; ?>" readonly minlength="6" maxlength="11"
                                          pattern="[0-9]{1,12}" title="Solamente se admiten números"
                                          required="required">
                                      </div>
                                  </div>
                                  <div class="col-lg-2">
                                    <div class="form-group">
                                      <label class="control-label">Primer Nombre</label>
                                      <input type="text" class="form-control" name="PrimerNombre"
                                      value="<?php echo $PrimerNombre; ?>" readonly minlength="2" maxlength="30"

                                      required="required">
                                  </div>
                              </div>
                              <div class="col-lg-2">
                                <div class="form-group">
                                  <label class="control-label">Segundo Nombre</label>
                                  <input type="text" class="form-control" name="SegundoNombre"
                                  required="required" minlength="3" maxlength="35" title="Campo de solo lectura" value="<?php echo $SegundoNombre; ?> "readonly>
                              </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="form-group">
                              <label class="control-label">Primer Apellido</label>
                              <input type="text" class="form-control" name="PrimerApellido"
                              required="required" minlength="3" maxlength="35" title="Campo de solo lectura" value="<?php echo $PrimerApellido; ?> "readonly>
                          </div>
                      </div>

                      <div class="col-lg-3">
                        <div class="form-group">
                          <label class="control-label">Segundo Apellido</label>
                          <input type="text" class="form-control" name="SegundoApellido"
                          required="required" minlength="3" maxlength="150" title="Campo de solo lectura" value="<?php echo $SegundoApellido; ?> "readonly>
                      </div>
                  </div>

              </div>
              <div class="row">

                  <div class="col-lg-2">
                    <div class="form-group">
                      <label class="control-label">Fecha de Nacimiento</label>
                      <input type="text" class="form-control" name="FechaNacimiento"

                      required="required" minlength="3" maxlength="150" title="Campo de solo lectura" value="<?php echo $FechaNacimiento; ?> "readonly>
                  </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="control-label">Genero</label>
                  <input type="text" class="form-control" name="Genero"
                  required="required" minlength="2" maxlength="35" title="Campo de solo lectura" value="<?php echo $Genero; ?> "readonly>
              </div>
          </div>

          <div class="col-lg-2">
            <div class="form-group">
              <label class="control-label">GrupoSanguineo</label>
              <input type="text" class="form-control" name="GrupoSanguineo"
              minlength="3" maxlength="35" title="Campo de solo lectura" value="<?php echo $GrupoSanguineo; ?> "readonly>
          </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label class="control-label">RH</label>
          <input type="text" class="form-control" name="RH"
          minlength="3" maxlength="250" title="Campo de solo lectura" value="<?php echo $RH; ?> "readonly>
      </div>
  </div>

  <div class="col-lg-3">
    <div class="form-group">
      <label class="control-label">Telefono</label>
      <input type="text" class="form-control" name="Telefono"
      required="required" minlength="3" maxlength="35" title="Campo de solo lectura" value="<?php echo $Telefono; ?> "readonly>
  </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
      <label class="control-label">Email</label>
      <input type="text" class="form-control" name="Email"
      minlength="3" maxlength="35" title="Campo de solo lectura" value="<?php echo $Email; ?> "readonly>
  </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
      <label class="control-label">Direccion</label>
      <input type="text" class="form-control" name="Direccion"
      minlength="3" maxlength="250" title="Campo de solo lectura" value="<?php echo $Direccion; ?> "readonly>
  </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
      <label class="control-label">Ciudad</label>
      <input type="text" class="form-control" name="Ciudad"
      minlength="3" maxlength="250" title="Campo de solo lectura" value="<?php echo $Ciudad; ?> "readonly>
  </div>
</div>
</div>


<div class="modal-footer">
  <button type="submit" name="insertacita" class="btn btn-success"><i
    class="fa fa-fw fa-lg fa-check-circle"></i>Registrar</button>
    <button type="button" id="btnLimpiar" class="btn btn-danger"><i
      class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</button>
  </div>
</form>
</div>
</div>

</div>
</div>
</div>

</main>
<!-- Essential javascripts for application to work-->
<script src="assets/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/main.js"></script>
<script type="text/javascript" src="main.js"></script>
<script type="text/javascript" src="assets/sweetalert.min.js"></script>
<script type="text/javascript" src="assets/datatables/datatables.min.js"></script> 



<!-- Modal de confirmación -->
<div class="modal fade" id="confirmacionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Se perderán los datos ingresados. ¿Deseas continuar?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnConfirmarCancelar" class="btn btn-danger">Sí, cancelar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#btnConfirmarCancelar").click(function() {
            limpiarCampos();
            $('#confirmacionModal').modal('hide');
        });
    });

    function limpiarCampos() {
        $('input[type="text"]').val('');
        $('input[type="date"]').val('');
        $('input[type="email"]').val('');
        $('select').prop('selectedIndex', 0);
    }
</script>

<!-- Google analytics script-->
<script type="text/javascript">
    if (document.location.hostname == 'pratikborsadiya.in') {
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }
</script>
</body>

</html>
