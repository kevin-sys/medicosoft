<?php
require "conexion.php";
session_start();
$Usuario = $_SESSION['Usuario'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>MIS CITAS MEDICAS - MEDICOSOFT</title>
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
    <?php if ($Usuario == "Especialista") { ?>
        <aside class="app-sidebar">
            <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
                src="images/logo.png" width="70" height="60" alt="User Image">
                <div>
                    <p class="app-sidebar__user-name"> <?php echo($Usuario)?> </p>
                    <p class="app-sidebar__user-designation">MEDICOSOFT</p>
                </div>
            </div>
            <ul class="app-menu">
                <li><a class="app-menu__item" href="principal.php"><i class="app-menu__icon fa fa-home fa-lg"></i><span
                    class="app-menu__label">Menu Principal</span></a></li>

                    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Citas Médicas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="treeview-item" href="mis-citas-medicas.php"><i class="icon fa fa-circle-o"></i> Mis citas médicas</a></li>
                            <li><a class="treeview-item" href="listado-pacientes.php"><i class="icon fa fa-circle-o"></i> Listado de pacientes</a></li>
                            
                            
                        </ul>
                    </li>
                    
                </ul>
            </aside>
        <?php } ?>

        <?php if ($Usuario != "Especialista") { ?>
            <aside class="app-sidebar">
                <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
                    src="images/logo.png" width="70" height="60" alt="User Image">
                    <div>
                        <p class="app-sidebar__user-name"> <?php echo($Usuario)?> </p>
                        <p class="app-sidebar__user-designation">MEDICOSOFT</p>
                    </div>
                </div>
                <ul class="app-menu">
                    <li><a class="app-menu__item" href="principal.php"><i class="app-menu__icon fa fa-home fa-lg"></i><span
                        class="app-menu__label">Menu Principal</span></a></li>

                        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                            class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Parametros generales</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="treeview-item" href="GestionDocente.php"><i class="icon fa fa-circle-o"></i> Gestión de citas médicas</a></li>
                                <li><a class="treeview-item" href="ConsultarDocente.php"><i class="icon fa fa-circle-o"></i> Registro de pacientes</a></li>
                                <li><a class="treeview-item" href="http://www2.unicesar.edu.co/unicesar/hermesoft/vortal/miVortal/logueo.jsp"><i class="icon fa fa-circle-o"></i> Administración de usuarios</a></li>

                            </ul>
                        </li>

                    </ul>
                </aside>
            <?php } ?>


            <main class="app-content">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="tile">
                            <h3 class="tile-title">CITAS MEDICAS EN EL SISTEMA MEDICOSOFT</h3>
                            <div class="tile-body">
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                            <th>Codigo de la cita</th>

                                            <th>Identificación</th>
                                            <th>Primer nombre</th>
                                            <th>Primer apellido</th>
                                            <th>Fecha de la cita</th>
                                            <th>Hora de la cita</th>
                                            <th>Estado</th>
                                            <th>Acción</th>



                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $query = "SELECT * FROM cita_medica";
                                        $result_tasks = mysqli_query($mysqli, $query);

                                        while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                            <tr>
                                                <td><?php echo $row['Id']; ?></td>

                                                <td><?php echo $row['Identificacion']; ?></td>
                                                <td><?php echo $row['PrimerNombre']; ?></td>
                                                <td><?php echo $row['PrimerApellido']; ?></td>
                                                <td><?php echo $row['FechaCita']; ?></td>
                                                <td><?php echo $row['HoraCita']; ?></td>
                                                <td><?php echo $row['EstadoCita']; ?></td>




                                                <td>
                                                    <a href="confirma-cita.php?Id=<?php echo $row['Id'] ?>" class="btn btn-success">
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
