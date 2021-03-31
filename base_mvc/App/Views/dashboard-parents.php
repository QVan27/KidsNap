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
            <p class="ppmail">Jeanne Marie - 24ans</p>
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
                        <div class="table-responsive">
                            <table class="table table-lg">
                                <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th>Rate</th>
                                        <th>Hours</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0">Arts and design template</h6> <span class="text-muted">in
                                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                pariatur.Duis aute irure dolor in reprehenderit</span>
                                        </td>
                                        <td>$120</td>
                                        <td>180</td>
                                        <td><span class="font-weight-semibold">$300</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0">Template for desnging the arts</h6> <span class="text-muted">Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor</span>
                                        </td>
                                        <td>$140</td>
                                        <td>100</td>
                                        <td><span class="font-weight-semibold">$240</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0">Technical support international</h6> <span class="text-muted">Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor</span>
                                        </td>
                                        <td>$250</td>
                                        <td>$250</td>
                                        <td><span class="font-weight-semibold">$500</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="facture-body">
                            <div class="d-md-flex flex-md-wrap">
                                <div class="pt-2 mb-3 wmin-md-400 ml-auto">
                                    <h6 class="mb-3 text-left">Total due</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th class="text-left">Subtotal:</th>
                                                    <td class="text-right">$1,090</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-left">Tax: <span class="font-weight-normal">(25%)</span></th>
                                                    <td class="text-right">$27</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-left">Total:</th>
                                                    <td class="text-right text-primary">
                                                        <h5 class="font-weight-semibold">$1,160</h5>
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
                        <a id="download" class="btnprofil">Télécharger ma facture</a>
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
        </div>
    </div>
</section>