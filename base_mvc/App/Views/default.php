    <!DOCTYPE html>
    <html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids'Nap</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>
    <div class="wrap">
        <header>
            <img src="asset/image/logo-dark.png" alt="">
            <div class="nav nav-header">
                <nav>
                    <ul>
                        <div class="left">
                            <li><a href="">Parents</a></li>
                            <li><a href="" class="margin-left">Pro</a></li>
                        </div>
                        <div class="right">
                            <li><a href="" class="margin-right">À propos</a></li>
                            <li><a href="" class="margin-right">Contact</a></li>
                            <li><a href="" role="btn-modal-login" class="btn color-1">Connexion</a></li>
                        </div>
                    </ul>
                </nav>
            </div>
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
                <img src="asset/image/logo-dark.png" alt="">
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
                <a href="" class="color-black ">Kite presse</a>
                <a href="" class="color-black">Nos partenaires</a>
            </div>
            <div class="link-footer">
                <h3 class="color-black title-footer">Aide</h3>
                <a href="" class="color-black ">Nous contacter</a>
                <a href="" class="color-black">Mentions légales</a>
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
  <script src="../../public/asset/js/map.js"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly"
      async
    ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="asset/js/main.js"></script>
</body>

    </html>