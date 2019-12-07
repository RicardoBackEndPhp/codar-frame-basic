<div class="container" id="content">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"
                             style="background-image: url('<?= url_theme("/assets/images/bg-login-image.png"); ?>')"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="d-block d-sm-block d-md-block d-lg-none">
                                    <img class="w-25 d-block m-auto"
                                         src="<?= url_theme("/assets/images/logomarca.png"); ?>" alt="">
                                </div>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Sitio Casa Verde</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="Usuário:">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                               id="exampleInputPassword" placeholder="Senha:">
                                    </div>
                                    <a href="admin/home" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </a>
                                    <hr>
                                </form>
                                <div class="text-center">
                                    <a class="small" href="?file=dashboard">Esqueceu a senha?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- content -->
