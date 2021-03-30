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

                <select name="Selection" id="select_adresse">
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
                <?php foreach ($users as $user) : ?>
                    <div class="proCard">

                        <div class="infoCardSearch">
                            <img src="asset/image/jeanne.svg" alt="">
                            <div class="nomCard">
                                <p><?= ucFirst($user->user_prenom) . ' ' . ucFirst($user->user_nom) ?></p>
                                <p><?= ucFirst($user->pro_type) ?></p>
                            </div>
                        </div>
                        <p class="contentCardSearch"><?= ucFirst($user->pro_content) ?>
                        </p>
                        <div class="btnInfo">
                            <input type="checkbox" id="show">
                            <label for="show" id="<?= $user->user_id ?>" class="voirPlus">Voir plus</label>
                            <div class="rightInfoCard">
                                <a href="" class="phoneCard"><i class="fas fa-phone"></i></a>
                                <a href="" class="sendCard"><i class="fas fa-plus"></i> Envoyer une demande</a>
                                <p class="price"><?= $user->pro_tarif ?>€ / hr</p>
                            </div>
                            <div id="modalCard<?= $user->user_id ?>" class="modalProfil">
                                <label for="show" id="closeProfil" class="show-btn fas fa-times"></label>
                                <h1 class="txtModalProfil">Profil</h1>
                                <div class="infoCardSearchProfil">
                                    <img src="asset/image/jeanne.svg" alt="">
                                    <div class="nomCard">
                                        <h2><?= ucFirst($user->user_prenom) . ' ' . ucFirst($user->user_nom) ?></h2>
                                        <h3><?= ucFirst($user->pro_type) ?></h3>
                                    </div>
                                    <p class="contentCardSearchProfil"><?= ucFirst($user->pro_content) ?></p>
                                    <div class="btnCardProfil">
                                        <a href="" class="phoneCard"><i class="fas fa-phone"></i></a>
                                        <a href="" class="sendCard"><i class="fas fa-plus"></i> Envoyer une demande</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div id="map" class="map"></div>
        </div>
    </div>
</section>