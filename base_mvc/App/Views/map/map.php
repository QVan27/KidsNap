<!-- <?php var_dump($userPros); ?> -->
<section class="searchParents">

    <div class="headSearch">
        <img src="asset/image/vector_dash.png" alt="">
        <div class="boxHead">
            <h3>Recherche de garde pour enfants</h3>
            <div class="boxHead_bis">
                <p>Du : <input type="text" id="fromDate" autocomplete="off"></p>
                <p>Au : <input type="text" id="toDate" autocomplete="off"></p>
                <!-- <p>
                    <label for="champ-ville">Ville : </label>
                    <input type="text" id="champ-ville">
                </p> -->
                <p>
                    <label for="champ-distance">Distance : </label>
                    <input type="range" min="1" max="200" id="champ-distance">
                </p>
                <p id="valeur-distance"></p>
                <form action="" method="post" id="form_map">
                    <input type="text" placeholder="Adresse" id="adresse" value="">
                    <button type="button"><i class="fas fa-paper-plane"></i></button>
                </form>

                <select name="Selection" id="name" class="select_adresse">

                </select>
            </div>
        </div>
    </div>
    <div class="contentSearch">
        <div class="searchPartners">
            <h4>Plus de 1630 prestataires</h4>
            <div class="partnerTitle">
                <p>Classé selon la proximité à votre secteur</p>
                <label class="label">
                    <div class="toggle">
                        <input class="toggle-state" type="checkbox" name="check" value="check" />
                        <div class="indicator"></div>
                    </div>
                    <div class="label-text">Afficher la carte</div>
                </label>
            </div>
        </div>

        <div class="cardMap">
            <div class="cardSearch">
                <div class="proCard">
               
                    <div class="infoCardSearch">
                        <img src="asset/image/jeanne.svg" alt="">
                        <div class="nomCard">
                          
                            <p>Assistante Maternelle</p>
                        </div>
                    </div>
                    <p class="contentCardSearch">Infirmière de profession en maternité, je suis assistante maternelle agrée depuis 5 ans. Disponible du lundi au vendredi sauf mercredi et pendant conges scolaires.
                    </p>
                    <div class="btnInfo">
                        <input type="checkbox" id="show">
                        <label for="show" class="voirPlus">Voir plus</label>
                        <!-- <a href="" class="voirPlus">Voir plus</a> -->
                        <div class="modalProfil">
                            <label for="show" class="show-btn fas fa-times"></label>
                            <h1 class="txtModalProfil">Profil</h1>
                            <div class="infoCardSearchProfil">
                                <img src="asset/image/jeanne.svg" alt="">
                                <div class="nomCard">
                                    <h2>Jeanne M.</h2>
                                    <h3>Assistante Maternelle</h3>
                                </div>
                                <p class="contentCardSearchProfil">Infirmière de profession en maternité, je suis assistante maternelle agrée depuis 5 ans. Disponible du lundi au vendredi sauf mercredi et pendant conges scolaires.Infirmière de profession en maternité, je suis assistante maternelle agrée depuis 5 ans. Disponible du lundi au vendredi sauf mercredi et pendant conges scolaires.Infirmière de profession en maternité, je suis assistante maternelle agrée depuis 5 ans. Disponible du lundi au vendredi sauf mercredi et pendant conges scolaires.Infirmière de profession en maternité, je suis assistante maternelle agrée depuis 5 ans. Disponible du lundi au vendredi sauf mercredi et pendant conges scolaires.Infirmière de profession en maternité, je suis assistante maternelle agrée depuis 5 ans. Disponible du lundi au vendredi sauf mercredi et pendant conges scolaires.Infirmière de profession en maternité, je suis assistante maternelle agrée depuis 5 ans. Disponible du lundi au vendredi sauf mercredi et pendant conges scolaires.
                                </p>
                                <div class="btnCardProfil">
                                    <a href="" class="phoneCard"><i class="fas fa-phone"></i></a>
                                    <a href="" class="sendCard"><i class="fas fa-plus"></i> Envoyer une demande</a>
                                </div>
                            </div>
                        </div>
                        <div class="rightInfoCard">
                            <a href="" class="phoneCard"><i class="fas fa-phone"></i></a>
                            <a href="" class="sendCard"><i class="fas fa-plus"></i> Envoyer une demande</a>
                            <p class="price">10.5€ / hr</p>
                        </div>
                    </div>
                 
                </div>
                <div class="proCard">
                    <div class="infoCardSearch">
                        <img src="asset/image/jeanne.svg" alt="">
                        <div class="nomCard">
                            <p>Jeanne M.</p>
                            <p>Assistante Maternelle</p>
                        </div>
                    </div>
                    <p class="contentCardSearch">Infirmière de profession en maternité, je suis assistante maternelle agrée depuis 5 ans. Disponible du lundi au vendredi sauf mercredi et pendant conges scolaires.
                    </p>
                    <div class="btnInfo">
                        <input type="checkbox" id="show">
                        <label for="show" class="voirPlus">Voir plus</label>
                        <!-- <a href="" class="voirPlus">Voir plus</a> -->
                        <div class="modalProfil">
                            <label for="show" class="show-btn fas fa-times"></label>
                            <div class="txtModalProfil">Profil</div>
                            <div class="infoCardSearch">
                                <img src="asset/image/jeanne.svg" alt="">
                                <div class="nomCard">
                                    <p>Jeanne M.</p>
                                    <p>Assistante Maternelle</p>
                                </div>
                            </div>
                            <p class="contentCardSearch">Infirmière de profession en maternité, je suis assistante maternelle agrée depuis 5 ans. Disponible du lundi au vendredi sauf mercredi et pendant conges scolaires.
                            </p>
                        </div>
                        <!-- <div class="dialog" title="Profil">
                            <img src="asset/image/jeanne.svg" alt="">
                            <h3>Jeanne Marie</h3>
                            <h5>Assistante Maternelle</h5>
                            <p></p>
                            <p>Infirmière de profession en maternité, je suis assistante maternelle agrée depuis 5 ans. Disponible du lundi au vendredi sauf mercredi et pendant conges scolaires.</p>
                        </div>

                        <button class="opener voirPlus">Voir plus</button> -->

                        <div class="rightInfoCard">
                            <a href="" class="phoneCard"><i class="fas fa-phone"></i></a>
                            <a href="" class="sendCard"><i class="fas fa-plus"></i> Envoyer une demande</a>
                            <p class="price">10.5€ / hr</p>
                        </div>
                    </div>
                </div>
                <div class="proCard">
                    <div class="infoCardSearch">
                        <img src="asset/image/jeanne.svg" alt="">
                        <div class="nomCard">
                            <p>Jeanne M.</p>
                            <p>Assistante Maternelle</p>
                        </div>
                    </div>
                    <p class="contentCardSearch">Infirmière de profession en maternité, je suis assistante maternelle agrée depuis 5 ans. Disponible du lundi au vendredi sauf mercredi et pendant conges scolaires.
                    </p>
                    <div class="btnInfo">
                        <a href="" class="voirPlus">Voir plus</a>
                        <div class="rightInfoCard">
                            <a href="" class="phoneCard"><i class="fas fa-phone"></i></a>
                            <a href="" class="sendCard"><i class="fas fa-plus"></i> Envoyer une demande</a>
                            <p class="price">10.5€ / hr</p>
                        </div>
                    </div>
                </div>
                <div class="proCard">
                    <div class="infoCardSearch">
                        <img src="asset/image/jeanne.svg" alt="">
                        <div class="nomCard">
                            <p>Jeanne M.</p>
                            <p>Assistante Maternelle</p>
                        </div>
                    </div>
                    <p class="contentCardSearch">Infirmière de profession en maternité, je suis assistante maternelle agrée depuis 5 ans. Disponible du lundi au vendredi sauf mercredi et pendant conges scolaires.
                    </p>
                    <div class="btnInfo">
                        <a href="" class="voirPlus">Voir plus</a>
                        <div class="rightInfoCard">
                            <a href="" class="phoneCard"><i class="fas fa-phone"></i></a>
                            <a href="" class="sendCard"><i class="fas fa-plus"></i> Envoyer une demande</a>
                            <p class="price">10.5€ / hr</p>
                        </div>
                    </div>
                </div>
                <div class="proCard">
                    <div class="infoCardSearch">
                        <img src="asset/image/jeanne.svg" alt="">
                        <div class="nomCard">
                            <p>Jeanne M.</p>
                            <p>Assistante Maternelle</p>
                        </div>
                    </div>
                    <p class="contentCardSearch">Infirmière de profession en maternité, je suis assistante maternelle agrée depuis 5 ans. Disponible du lundi au vendredi sauf mercredi et pendant conges scolaires.
                    </p>
                    <div class="btnInfo">
                        <a href="" class="voirPlus">Voir plus</a>
                        <div class="rightInfoCard">
                            <a href="" class="phoneCard"><i class="fas fa-phone"></i></a>
                            <a href="" class="sendCard"><i class="fas fa-plus"></i> Envoyer une demande</a>
                            <p class="price">10.5€ / hr</p>
                        </div>
                    </div>
                </div>
                <div class="proCard">
                    <div class="infoCardSearch">
                        <img src="asset/image/jeanne.svg" alt="">
                        <div class="nomCard">
                            <p>Jeanne M.</p>
                            <p>Assistante Maternelle</p>
                        </div>
                    </div>
                    <p class="contentCardSearch">Infirmière de profession en maternité, je suis assistante maternelle agrée depuis 5 ans. Disponible du lundi au vendredi sauf mercredi et pendant conges scolaires.
                    </p>
                    <div class="btnInfo">
                        <a href="" class="voirPlus">Voir plus</a>
                        <div class="rightInfoCard">
                            <a href="" class="phoneCard"><i class="fas fa-phone"></i></a>
                            <a href="" class="sendCard"><i class="fas fa-plus"></i> Envoyer une demande</a>
                            <p class="price">10.5€ / hr</p>
                        </div>
                    </div>
                </div>
                <div class="proCard">
                    <div class="infoCardSearch">
                        <img src="asset/image/jeanne.svg" alt="">
                        <div class="nomCard">
                            <p>Jeanne M.</p>
                            <p>Assistante Maternelle</p>
                        </div>
                    </div>
                    <p class="contentCardSearch">Infirmière de profession en maternité, je suis assistante maternelle agrée depuis 5 ans. Disponible du lundi au vendredi sauf mercredi et pendant conges scolaires.
                    </p>
                    <div class="btnInfo">
                        <a href="" class="voirPlus">Voir plus</a>
                        <div class="rightInfoCard">
                            <a href="" class="phoneCard"><i class="fas fa-phone"></i></a>
                            <a href="" class="sendCard"><i class="fas fa-plus"></i> Envoyer une demande</a>
                            <p class="price">10.5€ / hr</p>
                        </div>
                    </div>
                </div>
                <div class="proCard">
                    <div class="infoCardSearch">
                        <img src="asset/image/jeanne.svg" alt="">
                        <div class="nomCard">
                            <p>Jeanne M.</p>
                            <p>Assistante Maternelle</p>
                        </div>
                    </div>
                    <p class="contentCardSearch">Infirmière de profession en maternité, je suis assistante maternelle agrée depuis 5 ans. Disponible du lundi au vendredi sauf mercredi et pendant conges scolaires.
                    </p>
                    <div class="btnInfo">
                        <a href="" class="voirPlus">Voir plus</a>
                        <div class="rightInfoCard">
                            <a href="" class="phoneCard"><i class="fas fa-phone"></i></a>
                            <a href="" class="sendCard"><i class="fas fa-plus"></i> Envoyer une demande</a>
                            <p class="price">10.5€ / hr</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map" class="map"></div>
        </div>
    </div>
</section>