<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 text-md-sm">Home</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Botão sem utilidade por enquanto</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Últimas notificações</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="menuUltimasNotificações"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                             aria-labelledby="menuUltimasNotificações">
                            <a class="dropdown-item" href="#">Acessar todas as notificações</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table text-center text-small-sm  table-responsive-md">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Notificação</th>
                            <th scope="col">Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>211</td>
                            <td>Realização de débitos automáticos com falhas, veja o relatório</td>
                            <td><a href="#" data-toggle="tooltip" data-placement="left" title="Acessar"><i
                                            class="fas fa-sign-out-alt fa-lg"></i></a></td>
                        </tr>
                        <tr>
                            <td>231</td>
                            <td>Empresa Fulano de Tal acaba de adicionar um novo funcionário, acesse para aprovar</td>
                            <td><a href="#" data-toggle="tooltip" data-placement="left" title="Download"><i
                                            class="fas fa-download fa-lg"></i></a></td>
                        </tr>
                        <tr>
                            <td>4232</td>
                            <td>Novo cadastro de conveniado, acesse para aprovar</td>
                            <td><a href="#" data-toggle="tooltip" data-placement="left" title="Download"><i
                                            class="fas fa-download fa-lg"></i></a></td>
                        </tr>
                        <tr>
                            <td>351</td>
                            <td>Realização de débitos automáticos com falhas, veja o relatório</td>
                            <td><a href="#" data-toggle="tooltip" data-placement="left" title="Acessar"><i
                                            class="fas fa-sign-out-alt fa-lg"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- Content Row -->

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Clientes ativos</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="text-gray small font-italic">
                        Número total de clientes ativos: 7310
                    </div>
                    <div class="chart-area">
                        <canvas id="graficoClientesAtivosHome"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Proporção de inadimplência</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="text-gray small font-italic">
                        Calculo feito baseado nos últimos 12 meses
                    </div>
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Pagos
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Não pagos
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Clientes aniversariantes</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table text-center text-small-sm table-responsive-md">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Acessar cadastro</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>211</td>
                            <td>Adalberto Emiliano Flores Peixoto: 45 anos</td>
                            <td><a href="#" data-toggle="tooltip" data-placement="left" title="Acessar"><i
                                            class="fas fa-sign-out-alt fa-lg"></i></a></td>
                        </tr>
                        <tr>
                            <td>231</td>
                            <td>Edinénia Macedo da Silva: 70 anos</td>
                            <td><a href="#" data-toggle="tooltip" data-placement="left" title="Download"><i
                                            class="fas fa-sign-out-alt fa-lg"></i></a></td>
                        </tr>
                        <tr>
                            <td>4232</td>
                            <td>José Carlos Ferras Matias de Souza: 31 anos</td>
                            <td><a href="#" data-toggle="tooltip" data-placement="left" title="Download"><i
                                            class="fas fa-sign-out-alt fa-lg"></i></a></td>
                        </tr>
                        <tr>
                            <td>351</td>
                            <td>Jhenyffer Epitáfio da Cezar Brito: 21 anos</td>
                            <td><a href="#" data-toggle="tooltip" data-placement="left" title="Acessar"><i
                                            class="fas fa-sign-out-alt fa-lg"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- Content Row -->

</div>
<!-- /.container-fluid -->