<?php if (isset($_SESSION["user"])) : ?>
    <?php if ($_SESSION["user"]->user_parent == 1) : ?>
        <section class="dashboardParents">
            <div class="headParents">
                <img src="asset/image/vector_dash.png" alt="">
                <h2>Bonjour, de quoi avez-vous besoin aujourd'hui ?</h2>
                <div class="btnParents">
                    <a href="index.php?page=map" class="btn color-2 btnParents1">Trouver un profesionnel</a>
                    <!-- <a href="index.php?page=map" class="btn color-2 btnParents2">une assistante marternelle</a> -->
                </div>
                <h3 class="dash-text">Profil</h3>
    </div>
    <div class=" sheet-dash">
        <div class="pp">
            <img class="pp-size" src="asset/image/pp4.svg" alt="photo profil">
            <p class="ppmail">Jeanne Marie</p>
            <p class="ppmail">jeannemarie@gmail.com</p>
            <a href="index.php?page=profil-parents" class="btnprofil">Modifier profil</a>

            <!-- FACTURE MODAL -->

            <!-- <a id="mybtn" class="btnprofil">Télécharger ma facture</a> -->
            <button class="btnprofil" id="download"> download pdf</button>
            <div id="facture" class="facture-modal">
                <div class="facture-modal-content">
                    <span class="facture-close">&times;</span>
                    <div class="facture" id="invoice">
                        <div class="facture-header">
                            <h6 class="facture-title text-primary">Facture</h6>
                        </div>

                        <div class="facture-body">
                            <div class="left-facture top-facture">
                                <div class="text-facture-left">
                                    <ul class="facture-text-left">
                                        <li>Kids'Nap</li>
                                        <li>21 rue du modèle</li>
                                        <li>437 933 302</li>
                                        <li>02 32 98 70 75</li>
                                        <li>kidsnap@gmail.com</li>
                                        <li>kidsnap.com</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="facture-name">
                                <div class="facture-text-right">
                                    <div class="info-client">
                                        <ul class="list list-unstyled text-right mb-0 ml-auto">
                                            <li><span class="font-weight-semibold">Prendsmesenfants</span></li>
                                            <li>33 rue des abandonnés</li>
                                            <li>SAS</li>
                                            <li>FR12314428789</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-date-left">
                                    <ul class="list list-unstyled mb-0">
                                        <p>Facture N°00003</p>
                                        <li>Date: <span class="font-weight-semibold">
                                                <!-- <?php echo $pro->created_at; ?> -->
                                            </span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-lg">
                                <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th>Qantité</th>
                                        <th>Heures</th>
                                        <th>Total HT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Arts and design templatein
                                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                pariatur.Duis aute irure dolor in reprehenderit</p>
                                        </td>
                                        <td>120€</td>
                                        <td>180</td>
                                        <td><span class="font-weight-semibold">300€</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Template for desnging the arts Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor</p>
                                        </td>
                                        <td>140€</td>
                                        <td>100</td>
                                        <td><span class="font-weight-semibold">240€</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Technical support international Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor</p>
                                        </td>
                                        <td>250€</td>
                                        <td>250</td>
                                        <td><span class="font-weight-semibold">500€</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            TOTAL
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>1090€</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="facture-body">
                            <div class="d-md-flex flex-md-wrap">
                                <div class="pt-2 mb-3 wmin-md-400 ml-auto">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th class="text-left">Total:</th>
                                                    <td class="text-right">1,090€</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-left">Taxe:</th>
                                                    <td class="text-right">25%</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-left">Total:</th>
                                                    <td class="text-right text-primary">
                                                        <h5 class="font-weight-semibold">1,160€</h5>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal content -->
                        <!-- <div class="facture-modal-content">
                        <span class="facture-close">&times;</span>
                        <h3 class="facture-text">Ceci est ma facture</h3> -->
                        <a id="download" class="btnprofil btn-facture">Télécharger ma facture</a>
                        <!-- </div> -->

                    </div>

                    <!-- FACTURE MODAL FIN -->

                </div>
            </div>
        </div>
        <div class="sheet-wrap">
            <div id="sheet-two" class="dash-sheet">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br><br> dolores debitis sunt harum velit iste eius explicabo. Eum aut veniam corporis fugiat? <br><br>Repudiandae accusamus ipsam amet accusantium aspernatur enim modi pariatur, optio necessitatibus beatae atque, <br><br>nihil non asperiores velit! Nam non quisquam blanditiis deserunt accusantium cum similique quas quae quam?</p>
            </div>
            <div class=" sheet-dash">
                <div class="pp">
                    <img class="pp-size" src="asset/image/pp4.svg" alt="photo profil">
                    <p class="ppmail">Jeanne Marie</p>
                    <p class="ppmail">jeannemarie@gmail.com</p>
                    <a href="index.php?page=profil-parents" class="btnprofil">Modifier profil</a>
                </div>
                <div class="sheet-wrap">
                    <div id="sheet-two" class="dash-sheet">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br><br> dolores debitis sunt harum velit iste eius explicabo. Eum aut veniam corporis fugiat? <br><br>Repudiandae accusamus ipsam amet accusantium aspernatur enim modi pariatur, optio necessitatibus beatae atque, <br><br>nihil non asperiores velit! Nam non quisquam blanditiis deserunt accusantium cum similique quas quae quam?</p>
                    </div>
                </div>
            </div>
        </section>
    <?php else : ?>
        <?php header('Location: index.php?page=home') ?>
    <?php endif; ?>

    <?php else : ?>
        <?php header('Location: index.php?page=home') ?>
    <?php endif; ?>
