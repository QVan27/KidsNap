<section class="banner">
    <img src="asset/image/pro_banner_vector_1.png" alt="" class="imgBannerFirst">
    <img src="asset/image/pro_banner_vector_2.png" alt="" class="imgBannerSecond">
    <img src="asset/image/banner_children.svg" alt="" class="imgBannerThird">
    <div class="txtContent">
        <h1>La plateforme connectée pour professionnels épanouis</h1>
        <p>Mettez en avant vos modes de gardes et services auprès d’une grande communauté de parents.
            Gérez vos disponibilités et communiquez facilement avec ces derniers.
            Créez votre propre communauté et partagez votre quotidien.</p>
        <div class="pro">
            <a href="" role="btn-modal-login" class="margin-b">Lancer vous dès maintenant</a>
            <a href="index.php?page=contact" class="margin-b">Contacter notre équipe</a>
        </div>
    </div>
</section>

<section class="first">
    <h2>Quels avantages ?</h2>

    <div class="container firstContent" id="firstContent">
        <div class="select-category">
            <button id="visibility" class="active" onclick="showRequiredCategory(this)">Augmenter votre visibilité <i class="fas fa-search"></i></button>
            <button id="boost" onclick="showRequiredCategory(this)">Booster votre activité <i class="fas fa-tachometer-alt"></i></button>
            <button id="reseau" onclick="showRequiredCategory(this)">Créer vos réseaux <i class="fas fa-share-alt"></i></button>
            <button id="dispo" onclick="showRequiredCategory(this)">Publier vos dispo <i class="fas fa-upload"></i></button>
        </div>
        <div class="content-category">
            <div class="category-visibility showCategory">
                <div class="fullContent">
                    <div class="txtImg proCat">
                        <div class="txtCat">
                            <p>Touchez plus rapidement les parents en recherche de solutions de garde pour leurs enfants grâce à notre communauté en croissance quotidienne.</p>
                            <p>Soyez visible sur une carte intéractive combinant un système de recherche poussé pour nos parents. </p>
                        </div>
                        <img src="asset/image/visibility.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="category-boost hideCategory">
                <div class="fullContent">
                    <div class="txtImg proCat">
                        <div class="txtCat">
                            <p>Vous êtes une micro-crèche, MAM, Assistante maternelle ?</p>
                            <p>Optimisez vos places disponibles (vacances, mercredi, ...), remplissez vos plannings et aidez les parents de la communauté en répondant à tout ou une partie de leur besoin de garde !</p>
                        </div>
                        <img src="asset/image/boost.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="category-reseau hideCategory">
                <div class="fullContent">
                    <div class="txtImg proCat">
                        <div class="txtCat">
                            <p>Créez ou rejoignez des communautés, échangez avec elles, partagez vos bons plans, recommandations et actualités !
                            </p>

                        </div>
                        <img src="asset/image/reseaux.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="category-dispo hideCategory">
                <div class="fullContent">
                    <div class="txtImg proCat">
                        <div class="txtCat">
                            <p>Kids’Nap vous permets d’afficher vos disponibilités via des créneaux horaires mais aussi d’indiquer vos indisponibilités pour que les parents vous trouvent en quelques clics lors de leurs recherches !</p>
                        </div>
                        <img src="asset/image/calendar.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pinkStats bluePro">
        <div class="boxStats">
            <p><img src="asset/image/group.png" alt=""> <?= $numberUser->allUser; ?></p>
            <p>Utilisateurs</p>
        </div>
        <div class="boxStats">
            <p><img src="asset/image/team.png" alt=""> <?= $numberParent->allParents; ?></p>
            <p>Parents</p>
        </div>
        <div class="boxStats">
            <p><img src="asset/image/chat.png" alt=""> <?= $numberPro->allPros; ?></p>
            <p>Professionnels</p>
        </div>
</section>

<section class="second">
    <h2>Ils parlent de nous :</h2>
    <div class="nous">
        <img src="asset/image/paris_normandie.svg" alt="logo journal paris-normandie">
        <img src="asset/image/logo-region-normandie.svg" alt="logo région Normandie">
        <img src="asset/image/Thinkerview.svg" alt="logo Thinkerview">
        <img src="asset/image/fr3.svg" alt="logo France 3 Normandie">
    </div>
    <div class="btn-job">
        <h2>Trouvez un job de garde d'enfants</h2>
        <a href="" role="btn-modal-login" class="btn color-1 go">J'y vais !</a>
    </div>
</section>

<section class="third">
    <img src="asset/image/third_vector_pro.png" class="vector-third" alt="">
    <div class="card">
        <div class="wrapCard">
            <div class="infoCard">
                <img src="asset/image/pp1.svg" alt="">
                <div class="detailInfo">
                    <p>Guillaume C.</p>
                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                </div>
            </div>
            <div class="contentCard">
                <span class="hideContent1">
                    <p>Application bien faite et ergonomique. Au top pour des jeunes parents... <a type="" class="showMore1">plus</a></p>
                </span>
                <span class="showContent1">
                    <p>Application bien faite et ergonomique. Au top pour des jeunes parents comme nous. <a type="" class="hideMore1">moins</a></p>
                </span>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="wrapCard">
            <div class="infoCard">
                <img src="asset/image/pp2.svg" alt="">
                <div class="detailInfo">
                    <p>Pierre A.</p>
                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></p>
                </div>
            </div>
            <div class="contentCard">
                <span class="hideContent2">
                    <p>Supper appli, avec la géolocalisation j'ai trouvé une Baby-sitter... <a type="" class="showMore2">plus</a></p>
                </span>
                <span class="showContent2">
                    <p>Supper appli, avec la géolocalisation j'ai trouvé une Baby-sitter près de chez nous en 5 minutes. <a type="" class="hideMore2">moins</a></p>
                </span>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="wrapCard">
            <div class="infoCard">
                <img src="asset/image/pp3.svg" alt="">
                <div class="detailInfo">
                    <p>Justine F.</p>
                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                </div>
            </div>
            <div class="contentCard">
                <span class="hideContent3">
                    <p>Grâce à l'équipe de Kids'Nap nous avons trouvé une solution de garde pour... <a type="" class="showMore3">plus</a></p>
                </span>
                <span class="showContent3">
                    <p>Grâce à l'équipe de Kids'Nap nous avons trouvé une solution de garde pour Arthur en 1 semaine. L'équipe est disponible et à l'écoute, l'application est simple d'utilisation et fluide. <a type="" class="hideMore3">moins</a></p>
                </span>
            </div>
        </div>
    </div>
</section>