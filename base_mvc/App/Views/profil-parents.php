<section class="profilParents">
    <div class="headprofil">
        <img class="border" src="asset/image/vector_dash.png" alt="">
        <img class="imgProfilPage" src="asset/image/pp4.svg" alt="">
        <a href="" class="btnmodif btnprofil"><i class="far fa-image"></i>Modifier ma photo de profil</a>
        <h3 class="dash-text profil-text">Mes paramètres</h3>
    </div>
    <div class="formProfil">
        <form id="formprofilparents" action="">

            <!-- NOM -->
            <div class="form-group ">
                <label for="nom"></label>
                <input type="text" name="nom" id="nomProfilParents" class="inputprofil inputname" placeholder="Nom*">
                <!-- </div> -->

                <!-- PRENOM -->
                <!-- <div class="form-group"> -->
                <label for="prenom"></label>
                <input type="text" name="prenom" id="prenomProfilParents" class="inputprofil" placeholder="Prénom*">
            </div>

            <!-- EMAIL -->
            <div class="form-group">
                <label for="mail"></label>
                <input type="mail" name="mail" id="mailProfilParents" class="inputprofil" placeholder="Email*">
            </div>

            <!-- ADRESSE -->
            <div class="form-group">
                <label for="adresse"></label>
                <input type="text" name="adresse" id="adresseProfilParents" class="inputprofil" placeholder="Adresse*">
            </div>

            <!-- CODE POSTAL -->
            <div class="form-group">
                <label for="code"></label>
                <input type="text" name="code" id="villeProfilParents" class="inputprofil inputname" placeholder="Code postal*">
                <!-- </div> -->

                <!-- VILLE -->
                <!-- <div class="form-group"> -->
                <label for="ville"></label>
                <input type="text" name="code" id="cpProfilParents" class="inputprofil" placeholder="Ville*">
            </div>

            <!-- TELEPHONE -->
            <div class="form-group">
                <label for="telephone"></label>
                <input type="text" name="telephone" id="telephoneProfilParents" class="inputprofil" placeholder="Téléphone*">
            </div>

            <!-- DESCRIPTION -->
            <div class="form-group">
                <label for="description"></label>
                <textarea name="description" id="description-pros" placeholder="Description*"></textarea>
            </div>
            
            <!-- ENVOYER -->
            <div class="submitButtonprofil">
                <input type="submit" name="envoyer" id="enregistrerParents" value="Enregistrer" class="buttonprofil">
                <input type="submit" name="supprimer" id="supprimerParents" value="Supprimer mon compte" class="buttonprofil">
            </div>
    </div>
</section>