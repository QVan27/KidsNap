<?php if (isset($_SESSION["user"])) : ?>
    <?php if ($_SESSION["user"]->user_parent == 1) : ?>
        <section class="dashboardParents">
            <div class="headParents">
                <img src="asset/image/vector_dash.png" alt="">
                <h2>Bonjour, de quoi avez-vous besoin aujourd'hui ?</h2>
                <div class="btnParents">
                    <a href="index.php?page=map" class="btn color-2 btnParents1">une place en crèche</a>
                    <a href="index.php?page=map" class="btn color-2 btnParents2">une assistante marternelle</a>
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
            <div id="window" class="facture-modal">
                <div class="facture-modal-content">
                    <span class="facture-close">&times;</span>
                    <div class="facture" id="facture">
                        <div class="facture-header">
                            <h6 class="facture-title text-primary">Facture</h6>
                        </div>

                        <div class="facture-body">
                            <div class="left-facture top-facture">
                                <div class="text-facture-left">
                                    <ul class="list list-unstyled mb-0 facture-text-left">
                                        <li>2269 Six Sigma</li>
                                        <li>New york city</li>
                                        <li>+1 474 44737 47 </li>
                                    </ul>
                                </div>

                                <div class="text-sm-right">
                                    <h4 class="facture-color mb-2 mt-md-2">Facture </h4>
                                    <!-- #BBB1243 -->
                                    <ul class="list list-unstyled mb-0">
                                        <li>Date: <span class="font-weight-semibold">
                                                <!-- <?php echo $particuliers->created_at; ?> -->
                                            </span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="facture-name">
                                <div class="facture-text-left">
                                    <span class="text-muted">Facturé à:</span>
                                    <ul class="list list-unstyled mb-0">
                                        <li>
                                            <h5 class="my-2">
                                                <!-- <?php echo $particuliers->firstname . ' ' . $particuliers->lastname; ?> -->
                                            </h5>
                                        </li>
                                        <li></li>
                                        <li>
                                            <!-- <?php echo $particuliers->adresse; ?> -->
                                        </li>
                                        <li>
                                            <!-- <?php echo $particuliers->postal . ' ' . $particuliers->ville; ?> -->
                                        </li>
                                        <li><a href="#" data-abc="true">
                                                <!-- <?php echo $particuliers->email; ?> -->
                                            </a></li>
                                    </ul>
                                </div>

                                <div class="mb-2 ml-auto"> <span class="text-muted">Details du paiement:</span>
                                    <div class="d-flex flex-wrap wmin-md-400">
                                        <ul class="list list-unstyled mb-0 text-left">
                                            <li>
                                                <h5 class="my-2">Total Due:</h5>
                                            </li>
                                        </ul>
                                        <ul class="list list-unstyled text-right mb-0 ml-auto">
                                            <li>
                                                <h5 class="font-weight-semibold my-2">$1,090</h5>
                                            </li>
                                            <li><span class="font-weight-semibold">Hong Kong Bank</span></li>
                                            <li>Hong Kong</li>
                                            <li>Thurnung street, 21</li>
                                            <li>New standard</li>
                                            <li><span class="font-weight-semibold">98574959485</span></li>
                                            <li><span class="font-weight-semibold">BHDHD98273BER</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal content -->
                        <!-- <div class="facture-modal-content">
                        <span class="facture-close">&times;</span>
                        <h3 class="facture-text">Ceci est ma facture</h3>
                        <a id="download" class="btnprofil">Télécharger ma facture</a>
                    </div> -->

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
