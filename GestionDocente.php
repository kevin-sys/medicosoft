<?php
require "conexion.php";
session_start();
$Usuario = $_SESSION['Usuario'];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gestión de Docentes - SIMULASOFT</title>
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
                    src="images/logoUpc.png" width="60" height="50" alt="User Image">
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
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="tile">
                            <div class="row">
                                <div class="col-lg-12">
                                 <form action="insertadocente.php" method="POST">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">Identificación</label>
                                                <input type="text" class="form-control" name="Identificacion"
                                                placeholder="Digite Identificación" minlength="6" maxlength="11"
                                                pattern="[0-9]{1,12}" title="Solamente se admiten números"
                                                required="required">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">Primer Nombre</label>
                                                <input type="text" class="form-control" name="PrimerNombre"
                                                placeholder="Digite Primer Nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" 
                                                required="required" minlength="3" maxlength="15" title="Solamente se admiten caracteres">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">Segundo Nombre</label>
                                                <input type="text" class="form-control" name="SegundoNombre"
                                                placeholder="Digite Segundo Nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" 
                                                minlength="3" maxlength="15" title="Solamente se admiten caracteres">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">Primer Apellido</label>
                                                <input type="text" class="form-control" name="PrimerApellido"
                                                placeholder="Digite Primer Apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,25}" 
                                                required="required" minlength="3" maxlength="15" title="Solamente se admiten caracteres">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">Segundo Apellido</label>
                                                <input type="text" class="form-control" name="SegundoApellido"
                                                placeholder="Digite Segundo Apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,25}" 
                                                required="required" minlength="3" maxlength="15" title="Solamente se admiten caracteres">
                                            </div>
                                        </div>



                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">Fecha de Nacimiento</label>
                                                <input class="form-control" type="date" name="FechaNacimiento"
                                                placeholder="*Ingrese Fecha de nacimiento" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Sexo</label>
                                                <select class="form-control" name="Sexo"  required="required">
                                                    <option>Seleccione el Sexo</option>
                                                    <option value="M">M</option>
                                                    <option value="F">F</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Celular</label>
                                                <input type="text" class="form-control" name="Celular"
                                                placeholder="Digite el Celular" minlength="10" maxlength="10"
                                                pattern="[0-9]{1,10}" title="Solamente se admiten números"
                                                required="required">
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Correo electrónico</label>
                                                <input class="form-control" type="email" name="Correo"
                                                placeholder="Digite el Correo electrónico" required="required">
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Facultad</label>
                                                <select class="form-control" name="Facultad">
                                                    <option value="0">Seleccione la Facultad</option>
                                                    <?php
                                                    $query = $mysqli->query("SELECT * FROM facultad");
                                                    while ($valores = mysqli_fetch_array($query)) {
                                                        echo '<option value="' . $valores[NombreFacultad] . '">' . $valores[NombreFacultad] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label">Dirección de domicilio</label>
                                                <input type="text" class="form-control" name="Direccion"
                                                placeholder="Digite la Dirección" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ#/°- ]{1,60}" 
                                                required="required" minlength="12" maxlength="50">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label">Ciudad</label>
                                                <input type="text" class="form-control" name="Ciudad"
                                                placeholder="Digite la ciudad" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}" 
                                                required="required" minlength="5" maxlength="30" title="Solamente se admiten caracteres">
                                            </div>
                                        </div>

                                    </div>
                                    <br>

                                    <div class="row">
                                       <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Departamento</label> 
                                            <input type="text" class="form-control" name="Departamento"
                                            placeholder="Digite el Departamento" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}" 
                                            required="required" minlength="5" maxlength="20" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Pais</label> 
                                            <input type="text" class="form-control" name="Pais"
                                            placeholder="Digite el Pais" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}" 
                                            required="required" minlength="5" maxlength="40" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="insertadocente" class="btn btn-primary"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Registrar
                                    </button>

                                    <button type="button" id="btnLimpiar" class="btn btn-danger"><i
                                        class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar
                                    </button>
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