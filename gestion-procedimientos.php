<?php
require "conexion.php";
session_start();
$Usuario = $_SESSION['Usuario'];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gestión de Procedimientos medicos - MEDICOSOFT</title>
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
    <?php include('includes/menu.php'); ?>
    <main class="app-content">
        <div>
            <h4>Crear procedimiento médico en el sistema MEDICOSOFT.</h4>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <div class="tile">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="insertaprocedimiento.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Codigo CUPS</label>
                                            <input type="text" class="form-control" name="Id_CUPS"
                                            placeholder="Digite codigo CUPS" minlength="2" maxlength="11" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Precio del procedimiento</label>
                                            <input type="text" class="form-control" name="PrecioProcedimiento"
                                            placeholder="Digite el precio del procedimiento" minlength="3" maxlength="30"
                                            pattern="[0-9]{1,12}" title="Solamente se admiten números"
                                            required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="control-label">Descripción</label>
                                            <textarea class="form-control" name="Nombre"
                                            placeholder="Digite la descripción del procedimiento"
                                            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}"
                                            required="required" minlength="3" maxlength="150"
                                            title="Solamente se admiten caracteres"
                                            rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="insertar_procedimiento" class="btn btn-primary"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Registrar
                                    </button>
                                    <button type="button" id="btnLimpiar" class="btn btn-danger"><i
                                        class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar
                                    </button>
                                </div>
                            </form>
                            <h4>Sobre los CUPS en Colombia</h4>
                            <p>El Código Único de Procedimientos en Salud (CUPS) en Colombia es un sistema de codificación que se utiliza para identificar de manera única los procedimientos y servicios médicos en el sistema de salud, estos códigos son esenciales para la facturación y para garantizar que los pacientes reciban el tratamiento adecuado según los estándares nacionales.</p>
                            <a href="cups/cups.xlsx" class="btn btn-info" download><i class="fa fa-download"></i> Clic aquí para acceder al archivo CUPS</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="tile">
                <h3 class="tile-title">Procedimientos médicos registrados en el sistema</h3>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>ID CUPS</th>
                                <th>DESCRIPCIÓN</th>
                                <th>PRECIO</th>
                                <th>FECHA DE REGISTRO</th>
                                <th>EDITAR</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $query = "SELECT * FROM procedimiento";
                            $result_tasks = mysqli_query($mysqli, $query);

                            while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                <tr>
                                    <td><?php echo $row['Id_CUPS']; ?></td>
                                    <td><?php echo $row['Nombre']; ?></td>
                                    <td><?php echo $row['PrecioProcedimiento']; ?></td>
                                    <td><?php echo $row['FechaRegistro']; ?></td>
                                    <td>
                                        <a href="editar_procedimiento.php?Id_CUPS=<?php echo $row['Id_CUPS'] ?>" class="btn btn-warning">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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
     <!--
    <script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script>
-->
<script type="text/javascript" src="assets/sweetalert.min.js"></script>
<script type="text/javascript" src="assets/datatables/datatables.min.js"></script> 
<!-- Page specific javascripts-->
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