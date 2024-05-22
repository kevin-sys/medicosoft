<?php if ($Usuario == "Administrador") { ?>
        <aside class="app-sidebar">
            <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
                src="images/logoUpc.png" width="60" height="50" alt="User Image">
                <div>
                    <p class="app-sidebar__user-name">Administrador</p>
                    <p class="app-sidebar__user-designation">MEDICOSOFT</p>
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