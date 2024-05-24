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
                                    <a href="mis-citas-medicas.php" class="btn btn-primary btn-block btn-lg">
                                        <i class="fa fa-calendar-check-o mr-2"></i> Mis Citas Médicas
                                    </a>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-12">
                                    <a href="listado-pacientes.php" class="btn btn-success btn-block btn-lg">
                                        <i class="fa fa-user-plus mr-2"></i> Listado de Pacientes
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
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
                                <li><a class="treeview-item" href="asignar-cita.php"><i class="icon fa fa-circle-o"></i> Gestión de citas médicas</a></li>
                                <li><a class="treeview-item" href="gestion-paciente.php"><i class="icon fa fa-circle-o"></i> Registro de pacientes</a></li>
                                <li><a class="treeview-item" href="gestion-usuario.php"><i class="icon fa fa-circle-o"></i> Administración de usuarios</a></li>

                            </ul>
                        </li>

                    </ul>
                </aside>
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
                                        <a href="asignar-cita.php" class="btn btn-primary btn-block btn-lg">
                                            <i class="fa fa-calendar-check-o mr-2"></i> Gestión de Citas Médicas
                                        </a>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <a href="gestion-paciente.php" class="btn btn-success btn-block btn-lg">
                                            <i class="fa fa-user-plus mr-2"></i> Registro de Pacientes
                                        </a>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <a href="gestion-procedimientos.php" class="btn btn-warning btn-block btn-lg">
                                            <i class="fa fa-user-plus mr-2"></i> Gestión de procedimientos
                                        </a>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <a href="gestion-usuario.php" class="btn btn-danger btn-block btn-lg">
                                            <i class="fa fa-users mr-2"></i> Administración de Usuarios
                                        </a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </main>
            <?php } ?>