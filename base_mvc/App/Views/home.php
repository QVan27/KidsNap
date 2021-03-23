<?php

// echo $numberUser->allUser . ' Utilisateurs';
// echo '</br>';
// echo $numberPro->allPros . ' Professionnels';

?>

<section class="banner">
    <img src="asset/image/banner_vector_1.png" alt="" class="imgBannerFirst">
    <img src="asset/image/banner_vector_2.png" alt="" class="imgBannerSecond">
    <img src="asset/image/banner_children.svg" alt="" class="imgBannerThird">
    <div class="txtContent">
        <h1>La plateforme connectée pour parents débordés </h1>
        <p>Trouvez une place en crèche, une nounoue ou unye babysitter. Trouvez et partagez des expériences et activités en famille. Accédez à un ensemble d’outils pour mieux gérer votre parentalité</p>
        <form action="index.php?page=map" class="inputSelect" method="post">
            <select name="" id="selectMode">
                <option value="">Trouver un mode de garde</option>
                <option value="">Une place en crèche</option>
                <option value="">Une nounou au top</option>
                <option value="">Un super baby-sitter</option>
                <option value="">Une agence de garde d'enfants</option>
            </select>
            <input type="text" name="" id="placeMap" placeholder="Mon secteur">
            <input type="submit" id="submitted" value="Chercher">
        </form>
    </div>
</section>

<section class="first">
    <h2>Comment ça marche ?</h2>

    <div class="container firstContent" id="firstContent">
        <div class="select-category">
            <button id="garde" class="active" onclick="showRequiredCategory(this)">Mode de garde <i class="fas fa-hand-holding-heart"></i></button>
            <button id="reseaux" onclick="showRequiredCategory(this)">Créez vos réseaux <i class="far fa-address-card"></i></button>
            <button id="communaute" onclick="showRequiredCategory(this)">Communauté <i class="fas fa-people-carry"></i></button>
        </div>
        <div class="content-category">
            <div class="category-garde showCategory">
                <div class="fullContent">
                    <div class="txtImg">
                        <div class="txtCat">
                            <p>Retrouvez l’intégralité des professionnels sur Kids’Nap : Micro-crèches, assistant(e)s maternel(le)s, Maison d’assistantes maternelles, baby-sitters, nounous qualifiés, agence de services, ainsi que leur disponibilités en instantané sur une carte interractive.</p>
                            <p><i class="fas fa-check-double"></i> Tous les profils sont vérifiés, appelés et validés par notre équipe.</p>
                        </div>
                        <img src="asset/image/map.svg" alt="">
                    </div>
                    <a class="btn" href="index.php?page=map">Je trouve mon mode de garde maintenant</a>
                </div>
            </div>
            <div class="category-reseaux hideCategory">
                <div class="fullContent">
                    <div class="txtImg">
                        <div class="txtCat">
                            <p>Un système de recherche multi-critère puissant et par compétences vous permet de trouver exactement le mode de garde qui correspond à vos besoins horaires, mode de vie, secteur géographique.
                            </p>
                            <p><i class="fas fa-link"></i> Entrez directement en contact avec les professionnels désirés, puis échangez via une messagerie interne sécurisée.</p>
                        </div>
                        <img src="asset/image/reseau.svg" alt="">
                    </div>
                    <a class="btn" href="index.php?page=map">Je trouve mon mode de garde maintenant</a>
                </div>
            </div>
            <div class="category-communaute hideCategory">
                <div class="fullContent">
                    <div class="txtImg">
                        <div class="txtCat">
                            <p>Kids'Nap c’est avant tout une communauté, partagez entre parents vos bons plans, organisez des co-gardes avec vos amis, donner vous des coup de pouce via le réseau Kidsplace et notre interface simple d’utilisation et 100% gratuite!
                            </p>
                            <h3>Recommandation</h3>
                            <p>Trouvez des professionnels recommandés par vos amis, vos collègues ou la communauté Kids'Nap.
                            </p>
                            <h3>Bons plans</h3>
                            <p>Découvrez chaque jours des bons plans sur des produits bébés, parents ou famille, bio, made in France, sélectionnés avec soin, mais aussi des suggestions d’évènements pour le weekend, d’activités éphémères pour enfants ou à faire en famille.</p>
                        </div>
                        <img src="asset/image/community.svg" alt="">
                    </div>
                    <a class="btn community" role="btn-modal-register" href="">Rejoindre la communauté Kids'Nap</a>
                </div>
            </div>
        </div>
    </div>
    <div class="pinkStats">
        <div class="boxStats">
            <p><img src="asset/image/group.png" alt=""> <?= $numberUser->allUser; ?></p>
            <p>Utilisateurs</p>
        </div>
        <div class="boxStats">
            <p><img src="asset/image/team.png" alt=""> <?= $numberUser->allUser; ?></p>
            <p>Partenaires</p>
        </div>
        <div class="boxStats">
            <p><img src="asset/image/chat.png" alt=""> <?= $numberUser->allUser; ?></p>
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
        <a href="" role="btn-modal-register" class="btn color-1 go">J'y vais !</a>
    </div>
</section>

<section class="third">
    <img src="asset/image/third_vector.png" class="vector-third" alt="">
    <div class="card">
        <div class="wrapCard">
            <div class="infoCard">
                <img src="asset/image/pp1.svg" alt="">
                <div class="detailInfo">
                    <p>Guillaume C.</p>
                    <p><i class="fas fa-star "></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
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