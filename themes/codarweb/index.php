<?php include_once "../../vendor/autoload.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Codar</title>

    <link rel="stylesheet" href="<?= url_theme("/assets/style.min.css"); ?>"/>
    
</head>
<body class="bg-gradient-primary" id="page-top">

<div id="wrapper" class="bg-gradient-primary loginWrapper">
    <div id="content-wrapper" class="d-flex flex-column bg-gradient-primary">

        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
            <a href="https://upassistencial.com.br/" class="navbar-brand">
                <img class="logoMenuCadastro" src="<?= url_theme("/assets/images/logomarca.png"); ?>" alt="" width="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar7">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-stretch" id="navbar7">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkPlanos" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Planos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkPlanos">
                            <a class="dropdown-item" href="#">Teste</a>
                            <a class="dropdown-item" href="#">Teste1</a>
                            <a class="dropdown-item" href="#">Teste2</a>
                            <a class="dropdown-item" href="#">Teste3</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Loja</a>
                    </li>
                </ul>
            </div>
        </nav>

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


<!--FOOTER-->
        <footer class="sticky-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="container my-auto">
                            <div class="copyright text-center text-md-left text-light my-auto">
                                <a class="logoCodarRodape" rel="tooltip" title="" data-placement="bottom"
                                   data-original-title="Conheça nosso trabalho" href="http://www.agenciacodar.com.br">
                                    <svg class="svgLogoCodar">
                                        <use xlink:href="#logoc"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div><!-- col s12 -->
                    <div class="col-12 col-md-6">
                        <div class="container my-auto">
                            <div class="copyright text-center text-md-right text-light my-auto pt-4">
                                <span>Todos os direitos reservados a Up Assistência Familiar <script>document.write(new Date().getFullYear())</script></span>
                            </div>
                        </div>
                    </div><!-- col s12 -->
                </div><!-- row -->
            </div>
        </footer>

    </div><!-- content-wrapper -->
</div><!-- wrapper -->
<script src="<?= url_theme("/assets/script.min.js"); ?>"></script>

<?php include_once __DIR__."/assets/images/svgs/repositorio.php"; ?>
</body>

</html>