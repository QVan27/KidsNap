    <!DOCTYPE html>
    <html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kids'Nap</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        <link rel="stylesheet" href="asset/css/style.css">

    </head>


<body>
    <div class="wrap">
        <header>
            <div class="nav nav-header">
                <nav>
                    <ul>
                        <div class="left">
                            <a href="index.php?page=home"><img src="asset/image/logo-dark.png" alt=""></a>
                            <li><a href="index.php?page=home">Parents</a></li>
                            <li><a href="index.php?page=pro" class="margin-left">Pro</a></li>
                        </div>
                        <div class="right">
                            <li><a href="index.php?page=contact" class="margin-right">Contact</a></li>
                            <li><a href="" role="btn-modal-login" class="btn color-1">Connexion</a></li>
                        </div>
                    </ul>
                </nav>
            </div>

            <!-- Menu Burger start -->
            <div id="sideNav">
                <nav>
                    <ul>
                        <li><a href="index.php?page=home">Parents</a></li>
                        <li><a href="index.php?page=pro">Pro</a></li>
                        <li><a href="index.php?page=contact">Contact</a></li>
                        <li><a href="" role="btn-modal-login" class="btn color-1">Connexion</a></li>
                    </ul>
                </nav>
            </div>
            <div id="menuBtn">
                <img src="asset/image/menu.png" id="menu" alt="icon-menu">
            </div>
            <!-- End -->
        </header>



        <main class="">
            <div class="container">
                <?= $content ?>
            </div>
        </main>

        <div class="push"></div>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div class="img-footer">
                <a href="index.php?page=home"><img src="asset/image/logo-dark.png" alt=""></a>
                <div>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="link-footer">
                <h3 class="color-black title-footer">Kids’Nap</h3>
                <a href="" class="color-black ">Le blog</a>
                <a href="" class="color-black ">Kit presse</a>
                <a href="" class="color-black">Nos partenaires</a>
            </div>
            <div class="link-footer">
                <h3 class="color-black title-footer">Aide</h3>
                <a href="index.php?page=contact" class="color-black ">Nous contacter</a>
                <a href="index.php?page=mentions" class="color-black">Mentions légales</a>
            </div>
        </div>

        <div class="modal-wrapper">
            <div class="modal-login">
                <div class="modal-content">
                    <div class="modal-header px-4">
                        <h5 class="modal-title">Connexion</h5>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="modal-close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body p-4">
                        <form method="post">
                            <input type="email" name="email" placeholder="Email" class="form-control input-light mb-3">
                            <input type="password" placeholder="Mot de passe" name="password" class="form-control input-light">
                            <!---->
                            <div class="row mt-3 justify-content-end">
                                <div class="col-auto px-0 px-md-1"><button role="btn-register" type="button" class="btn-modal">Créer mon compte</button></div>
                                <div class="col-auto pl-0"><button type="submit" class="btn-modal btn-secondary text-uppercase font-weight-bold"><a href="index.php?page=home&status=login">Se connecter</a></button></div>
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
                        <form method="post">
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
                        <form method="post">
                            <input type="email" name="user_mail" placeholder="Email" class="form-control input-light mb-3">
                            <div class="input-group mb-3"><input placeholder="Nom" name="user_nom" type="text" class="form-conrtol input-light">
                            </div>
                            <div class="input-group mb-3"><input placeholder="Prénom" name="user_prenom" type="text" class="form-conrtol input-light">
                            </div>
                            <div class="input-group mb-3"><input placeholder="Mot de passe" name="user_password" type="password" class="form-control input-light">
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
                        <form method="post" ctype="multipart/form-data">
                            <input type="email" name="user_mail" placeholder="Email" class="form-control input-light mb-3">
                            <div class="input-group mb-3"><input placeholder="Nom" name="user_nom" type="text" class="form-conrtol input-light">
                            </div>
                            <div class="input-group mb-3"><input placeholder="Prénom" name="user_prenom" type="text" class="form-conrtol input-light">
                            </div>
                            <div class="input-group mb-3"><input placeholder="Mot de passe" name="user_password" type="password" class="form-control input-light">
                            </div>
                            <div class="input-group mb-3"><input placeholder="Confirmation du mot de passe" name="password_confirmation" type="password" class="form-control input-light">
                            </div>

                            <div class="input-group mb-3"><input placeholder="Tarif par heure" name="pro_tarif" type="text" class="form-conrtol input-light">
                            </div>
                            <div class="input-group mb-3"><input placeholder="Nombre de place totale" name="pro_nb_place" type="text" class="form-conrtol input-light">
                            </div>
                            <div class="input-group mb-3"><input name="justificatif" type="file" class="form-conrtol input-light" accept="application/pdf">
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
                        <form method="post">
                            <input type="email" name="email" placeholder="Email de votre compte Kids'Nap oublié" class="form-control input-light mb-3">
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

        </footer>
        <script src="asset/js/map.js"></script>
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="asset/js/main.js"></script>
    </body>

</html>