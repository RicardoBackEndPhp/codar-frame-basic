<?php include_once "../../vendor/autoload.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GCA - UP Assistência Familiar</title>
    <link rel="stylesheet" href="<?= url_theme("/assets/style.min.css", CONF_VIEW_ADMIN); ?>"/>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <img src="<?=url_theme("/assets/images/gca-up-clara.png", CONF_VIEW_ADMIN) ?>" class="logoMenu" alt="">
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="?file=dashboard">
                <i class="fas fa-fw fa-home"></i>
                <span>Home</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Cadastros
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuEmpresas"
               aria-expanded="true" aria-controls="menuEmpresas">
                <i class="fas fa-fw fa-building"></i>
                <span>Empresas</span>
            </a>
            <div id="menuEmpresas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#">Aprovação PAF</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <span class="navbar-brand mb-0 h1 text-md-sm text-truncate">Central de gestão administrativa</span>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">9+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header bg-primary">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-info">
                                        <i class="fas fa-user text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">11/10/2020 12:40</div>
                                    <span>Novo usuário cadastrado: Fulano da Silva e Souza</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-danger">
                                        <i class="fas fa-ban text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">11/10/2019 08:50</div>
                                    Pedido de cancelamento de cadastro de funcionário da empresa
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Ver todos os alertas</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Gerente Administrativo: Maria João</span>
                            <img class="img-profile rounded-circle" src="<?= url_theme("/assets/images/iconUser.png", CONF_VIEW_ADMIN) ?>">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Meus dados
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Sair
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="modalSairLogin"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalSairLogin">Pronto para sair?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Tem certeza que deseja sair da plataforma?</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="../views/login.admin.php">Sair</a>
                        </div>
                    </div>
                </div>
            </div>
            <link rel="stylesheet" href="<?= url_theme("/assets/style.min.css"); ?>"/>
            
            <?php
            $file = filter_input(INPUT_GET, "file", FILTER_SANITIZE_SPECIAL_CHARS);
            if (empty($file)) {
                require __DIR__ . "/views/home.php";
            } elseif ($file && file_exists(__DIR__ . "/views/{$file}.php")) {
                require __DIR__ . "/views/{$file}.php";
            } else {
                require __DIR__ . "/views/404.php";
            }
            ?>

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="container my-auto">
                            <div class="copyright text-center text-md-left text-light my-auto">
                                <a class="logoCodarRodape"  rel="tooltip" title="" data-placement="bottom" data-original-title="Conheça nosso trabalho" href="http://www.agenciacodar.com.br">
                                    <svg class="logoCodarRodapeDark">
                                        <use xlink:href="#logoc" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div><!-- col s12 -->
                    <div class="col-12 col-md-6">
                        <div class="container my-auto">
                            <div class="copyright text-center text-md-right text-dark my-auto pt-4">
                                <span>Todos os direitos reservados a Codar <script>document.write(new Date().getFullYear())</script></span>
                            </div>
                        </div>
                    </div><!-- col s12 -->
                </div><!-- row -->
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<script src="<?= url_theme("/assets/scripts.min.js", CONF_VIEW_ADMIN); ?>"></script>


<!-- repositório de SVG's -->
<?php include 'assets/images/svgs/repositorio.php'; ?>

</body>

</html>