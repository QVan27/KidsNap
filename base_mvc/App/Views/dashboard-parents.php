<?php if (isset($_SESSION["user"])) : ?>
    <?php if ($_SESSION["user"]->user_parent == 1) : ?>
        <section class="dashboardParents">
            <div class="headParents">
                <img src="asset/image/vector_dash.png" alt="">
                <h2>Bonjour, de quoi avez-vous besoin aujourd'hui ?</h2>
                <div class="btnParents">
                    <a href="index.php?page=map" class="btn color-2 btnParents1">Trouver un profesionnel</a>
                </div>
                <h3 class="dash-text">Profil</h3>
            </div>
            <div class=" sheet-dash">
                <div class="pp">
                    <img class="pp-size" src="asset/image/pp4.svg" alt="photo profil">
                    <p class="ppmail"><?= $_SESSION["user"]->user_nom . ' ' . $_SESSION["user"]->user_prenom ?></p>
                    <p class="ppmail"><?= $_SESSION["user"]->user_mail ?></p>
                    <a href="index.php?page=profil-parents" class="btnprofil">Modifier profil</a>

                    <!-- FACTURE MODAL -->
                    <button class="btnprofil" id="download"> download pdf</button>
                    <div id="window" class="facture-modal">
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
                                                <li>kidsnap@gmail.com
                                                </li>
                                                <li>kidsnap.com</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="facture-name">
                                        <div class="facture-text-right">
                                            <div class="info-client">
                                                <ul class="list list-unstyled text-right mb-0 ml-auto">
                                                    <li><span class="font-weight-semibold"><?= $_SESSION["user"]->user_nom . ' ' . $_SESSION["user"]->user_prenom ?></span></li>
                                                    <li>21 Rue Paul Verlaine</li>
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
                                    <table id="table" class="table table-lg">
                                        <thead>
                                            <tr>
                                                <th>Enfants</th>
                                                <th>Age</th>
                                                <th>Heures</th>
                                                <th>Coût</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p class="mb-0">Yannick</p>
                                                </td>
                                                <td>4</td>
                                                <td>150</td>
                                                <td><span class="font-weight-semibold">300€</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="mb-0">Sophie</p>
                                                </td>
                                                <td>3</td>
                                                <td>200</td>
                                                <td><span class="font-weight-semibold">350€</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="mb-0">Debby</p>
                                                </td>
                                                <td>3</td>
                                                <td>200</td>
                                                <td><span class="font-weight-semibold">350€</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="facture-body">
                                    <div class="d-md-flex flex-md-wrap">
                                        <div class="pt-2 mb-3 wmin-md-400 ml-auto">
                                            <div class="table-responsive">
                                                <table class="table1">
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-left">Total HT</th>
                                                            <td class="text-right">1,000€</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-left">Taxe</th>
                                                            <td class="text-right">20%</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-left">Total</th>
                                                            <td class="text-right text-primary">
                                                                <h5 class="font-weight-semibold">1,100€</h5>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="editor"></div>
                            </div>
                            <button id="download-file" class="btnprofil btn-facture">Télécharger ma facture</button>


                            <!-- FACTURE MODAL FIN -->

                        </div>
                    </div>
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