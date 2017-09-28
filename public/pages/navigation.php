<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">13 bits Admin</a>
    </div>
    <!-- /.navbar-header -->

    <!-- MESSAGES -->
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li>
                    <a href="#">
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>Read All Messages</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-messages -->
        </li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-tasks fa-fw"></i> Finalizados
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-upload fa-fw"></i> Em aberto
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa fa-warning fa-fw"></i> Não vizualizados
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>


                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <!-- <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Estatísticas<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="clientStatistics.php">Por Cliente</a>
                        </li>
                        <li>
                            <a href="">Por Serviço</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                <!--</li> -->
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Clientes<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="newClient.php">Cadastrar</a>
                        </li>

                        <li>
                            <a href="clients.php">Exibir</a>
                        </li>

                        <li>
                            <a href="linkService.php">Vincular serviço</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="servicos.php"><i class="fa fa-tags fa-fw"></i> Serviços<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="newService.php">Cadastrar novo serviço</a>
                        </li>
                        <li>
                            <a href="services.php">Exibir tabela de serviços</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-wrench fa-fw"></i> Painel do administrador<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="newUser.php">Cadastrar novo usuário</a>
                        </li>

                        <li>
                            <a href="">Exibir usuários</a>
                        </li>


                    </ul>
                </li>

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
