<section class="searchParents">

    <div class="headSearch">
        <img src="asset/image/vector_dash.png" alt="">
        <div class="boxHead">
            <h3>Recherche de garde pour enfants</h3>
            <div class="boxHead_bis">
            <p>
                <label for="champ-ville">Ville : </label>
                <input type="text" id="champ-ville">
            </p>
            <p>
                <label for="champ-distance">Distance : </label>
                <input type="range" min="1" max="200" id="champ-distance">
            </p>
            <p id="valeur-distance"></p>
            <form action="" method="post" id="form_map">
                <input type="text" placeholder="Adresse" id="adresse" value="">
                <button type="submit"><i class="fas fa-paper-plane"></i></button>
            </form>

            <select name="Selection" id="name">

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
                        <p>10.5€ / hr</p>
                    </div>
                </div>
            </div>
            <div id="map" class="map"></div>
        </div>
    </div>
</section>