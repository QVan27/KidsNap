<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids'Nap</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <img src="asset/image/logo-dark.png" alt="">
        <nav class="nav nav-header">
            <ul>
                <li><a href="">Parents</a></li>
                <li><a href="">Pro</a></li>
                <li><a href="" role="btn-modal-login"class="btn color-1">Connexion</a></li>
            </ul>
        </nav>
    </header>
    <main class="">
        <div class="container">
            <?= $content ?>
        </div>
    </main>
    <footer>
        <div class="modal-wrapper">
            <div class="modal-login">
                <div class="modal-content">
                    <div class="modal-header px-4">
                        <h5 class="modal-title">Connexion</h5>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="modal-close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body p-4">
                        <form method="get">
                            <input type="email" name="email" placeholder="Email" class="form-control input-light mb-3">
                            <input type="password" placeholder="Mot de passe" name="password" class="form-control input-light">
                            <!---->
                            <div class="row mt-3 justify-content-end">
                                <div class="col-auto px-0 px-md-1"><button role="btn-register" type="button" class="btn-modal">Créer mon compte</button></div>
                                <div class="col-auto pl-0"><button type="submit" class="btn-modal btn-secondary text-uppercase font-weight-bold">Se connecter</button></div>
                            </div>
                            <div class="row pt-3">
                                <div class="col text-center"><a href="#lostPasswordModal" role="btn-mdp" data-toggle="modal" data-dismiss="modal" class="btn-modal btn-sm">Mot de passe oublié ?</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-register">
                <div class="modal-content" id="modal-choose">
                    <!---->
                    <div class="modal-header px-4">
                        <h5 class="modal-title">Je m'inscris en tant que <span class="text-secondary text-uppercase"></span>
                            <!---->
                        </h5> <button type="button" data-dismiss="modal" aria-label="Close" class="modal-close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body p-4">
                        <form method="get">
                            <div class="choose-type">
                                <button type="button" role="btn-parent" class="btn-modal btn-block py-4 mb-2 parent">
                                    <h6 class="h4">
                                        PARENT<br> <small>A la recherche de solutions de garde et plus</small></h6>
                                </button>
                                <button type="button" role="btn-baby" class="btn-modal btn-block py-4 mb-2 babysitter">
                                    <h6 class="h4">
                                        BABYSITTER<br> <small>Pour garder des enfants</small></h6>
                                </button>
                                <a type="button" role="btn-login" class="btn-modal btn-block mt-3">J'ai déjà un compte</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-content" id="modal-parent">
                    <!---->
                    <div class="modal-header px-4">
                        <h5 class="modal-title">Je m'inscris en tant que <span class="text-secondary text-uppercase">Parent</span> <button type="button" role="btn-changer" class="btn-modal btn-sm btn-outline-secondary2"><i class="fas fa-times" aria-hidden="true"></i> Changer</button></h5> <button type="button" data-dismiss="modal" aria-label="Close" class="modal-close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body p-4">
                        <form method="get">
                            <input type="email" name="email" placeholder="Email" class="form-control input-light mb-3">
                            <div class="input-group mb-3"><input placeholder="Mot de passe" name="password" type="password" class="form-control input-light">
                            </div>
                            <div class="input-group mb-3"><input placeholder="Confirmation du mot de passe" name="password_confirmation" type="password" class="form-control input-light">
                            </div>
                            <!---->
                            <div class="row mt-4 justify-content-end">
                                <div class="col-auto"><button type="submit" class="btn-modal btn-secondary text-uppercase font-weight-bold">
                                        Créer mon compte
                                    </button></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-content" id="modal-baby">
                    <!---->
                    <div class="modal-header px-4">
                        <h5 class="modal-title">Je m'inscris en tant que <span class="text-secondary text-uppercase">BABYSITTER</span> <button type="button" role="btn-changer" class="btn-modal btn-sm btn-outline-secondary2"><i class="fas fa-times" aria-hidden="true"></i> Changer</button></h5> <button type="button" data-dismiss="modal" aria-label="Close" class="modal-close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body p-4">
                        <form method="get">
                            <input type="email" name="email" placeholder="Email" class="form-control input-light mb-3">
                            <div class="input-group mb-3"><input placeholder="Mot de passe" name="password" type="password" class="form-control input-light">
                            </div>
                            <div class="input-group mb-3"><input placeholder="Confirmation du mot de passe" name="password_confirmation" type="password" class="form-control input-light">
                            </div>
                            <!---->
                            <div class="row mt-4 justify-content-end">
                                <div class="col-auto"><button type="submit" class="btn-modal btn-secondary text-uppercase font-weight-bold">
                                        Créer mon compte
                                    </button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-lost_password">
                <div class="modal-content">
                    <div class="modal-header px-4">
                        <div class="h5 modal-title">Mot de passe oublié</div> <button type="button" data-dismiss="modal" aria-label="Close" class="modal-close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body p-4">
                        <form method="get"><input type="email" name="email" placeholder="Email de votre compte Kids'Nap oublié" class="form-control input-light mb-3">
                            <p class="text-center">Un email vous sera envoyé pour vous expliquer la procédure</p>
                            <!---->
                            <!---->
                            <div class="row mt-3 justify-content-end">
                            <a type="button" role="btn-login" class="btn-modal btn-block mt-3">J'ai déjà un compte</a>
                                <div class="col-auto">
                                    <button type="submit" class="btn-modal btn-secondary text-uppercase font-weight-bold">Confirmer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>