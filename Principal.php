<?php

require "conexion.php";

session_start();
if (!isset($_SESSION['Identificacion'])) 
{
    echo" 
    <script language='javascript'> 
    alert(':... Inicia sesión para acceder a este recurso ...:') 
    window.location='index.php' 
    </script>"; 
    exit(); 
    header("Location: index.php");
}
$Usuario = $_SESSION['Usuario'];


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu Principal - MEDICOSOFT</title>
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
                src="images/logo.png" width="70" height="60" alt="User Image">
                <div>
                    <p class="app-sidebar__user-name">Administrador</p>
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
                            <li><a class="treeview-item" href="https://github.com/kevin-sys"><i class="icon fa fa-circle-o"></i> Informes del sistema</a></li>
                        </ul>
                    </li>
                    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Agenda Médica</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="treeview-item" href="docs/LiquidacionGeneral.php"><i class="icon fa fa-circle-o"></i> Crear agenda</a></li>
                            <li><a class="treeview-item" href="docs/CargarDocumentos.php"><i class="icon fa fa-circle-o"></i> Asignar agenda</a></li>
                      
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
                        <p class="app-sidebar__user-designation">MEDICOSOFT</p>
                    </div>
                </div>
                <ul class="app-menu">
                    <li><a class="app-menu__item" href="principal.php"><i class="app-menu__icon fa fa-home fa-lg"></i><span
                        class="app-menu__label">Menu Principal</span></a></li>

                        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                            class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Gestión General</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="treeview-item" href="ConsultarDocente.php"><i class="icon fa fa-circle-o"></i>Formato de puntos</a></li>
                               
                            </ul>
                        </li>
                    </ul>
                </aside>
            <?php } ?>
            <main class="app-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tile">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>BIENVENIDOS A MEDICOSOFT</h3>
                                    <br>
                                    <p1>
                                    MedicoSoft es una aplicación diseñada para simplificar la gestión de citas médicas, registrar pacientes, administrar usuarios y organizar la agenda de consultas de manera eficiente. Con un enfoque intuitivo y herramientas fáciles de usar, MedicoSoft está diseñado para ayudar a los profesionales de la salud a optimizar su práctica médica.</a></p1>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#" class="btn btn-primary btn-block btn-lg">
                        <i class="fa fa-calendar-check-o mr-2"></i> Gestión de Citas Médicas
                    </a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-12">
                    <a href="#" class="btn btn-success btn-block btn-lg">
                        <i class="fa fa-user-plus mr-2"></i> Registro de Pacientes
                    </a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-12">
                    <a href="#" class="btn btn-danger btn-block btn-lg">
                        <i class="fa fa-users mr-2"></i> Administración de Usuarios
                    </a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-12">
                    <a href="#" class="btn btn-warning btn-block btn-lg">
                        <i class="fa fa-calendar-plus-o mr-2"></i> Creación y Asignación de Agenda
                    </a>
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