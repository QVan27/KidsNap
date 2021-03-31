<?php if (isset($_SESSION["user"])) : ?>
    <?php if ($_SESSION["user"]->user_pro == 1) : ?>
        <section class="dashboardPros">
            <div class="headPros">
                <img src="asset/image/vector_dash_blue.png" alt="">
                <h2 class="dash-pros-titre">Bienvenue sur votre profil !</h2>
                <div class="btnParents">
                    <a href="index.php?page=disponibilite" class="btn color-2 btnPros"><i class="fas fa-calendar-alt" style="color: var(--white);"></i> Disponibilité</a>
                    <!-- <a href="index.php?page=calendrier" class="btn color-2 btnPros">Disponibilité</a> -->
                </div>
                <h3 class="dash-text">Profil</h3>
            </div>
            <div class=" sheet-dash">
                <div class="pp">
                    <img class="pp-size" src="asset/image/pp12.svg" alt="photo profil">
                    <p class="ppmail">Pierre Kiroule - 50 ans</p>
                    <p class="ppmail">pierrekiroule@gmail.com</p>
                    <p class="ppmail">Crèche</p>
                    <a href="index.php?page=profil-pros" class="btnprofil btnprofil1">Modifier profil</a>
                    <a href="index.php?page=reservation" class="btnprofil btnprofil1">Réserver un créneau</a>
                </div>
                <div class="sheet-wrap">
                    <div id="sheet-two" class="dash-sheet">
                        <p>Notre micro-crèche est située en plein cœur de Rouen derrière les Galeries Lafayette. Celle-ci accueille à la journée pas plus de 10 enfants d'âges mélangés, de 10 semaines à 4 ans révolue, de 8 heure à 18 heure 30.<br><br>
                            La pédagogie de la micro-crèche est basée sur l'autonomie de l'enfant. Que ce soit par la motricité libre, par la manière dont nous donnons les repas ou par notre volonté de laisser l'enfant faire seul, l'équipe éducative mettra tout en oeuvre pour que votre enfant puisse s'épanouir et devenir autonome.<br><br>
                            L'équipe éducative, qui est constituée d'un référent technique éducatrice de jeunes enfants et de deux animatrices petite enfance, veille à vous accueillir, vous et votre enfant dans la bienveillance et la confiance. La micro-crèche est un lieu ouvert aux parents, où il est possible pour eux de se poser avec leur enfant et de partager un temps de jeux pendant les transmissions du matin ou du soir.<br><br>
                            Grâce à sa collaboration avec un site de gestion de crèche, notre équipe mettra tout en oeuvre pour vous rassurer durant la journée, via des photos par exemple.</p>


                    </div>
                    <div class=" sheet-dash">
                        <div class="pp">
                            <img class="pp-size" src="asset/image/pp12.svg" alt="photo profil">
                            <p class="ppmail">Pierre Kiroule</p>
                            <p class="ppmail">pierrekiroule@gmail.com</p>
                            <p class="ppmail">Crèche</p>
                            <a href="index.php?page=profil-pros" class="btnprofil btnprofil1">Modifier profil</a>
                        </div>
                        <div class="sheet-wrap">
                            <div id="sheet-two" class="dash-sheet">
                                <p>Notre micro-crèche est située en plein cœur de Rouen derrière les Galeries Lafayette. Celle-ci accueille à la journée pas plus de 10 enfants d'âges mélangés, de 10 semaines à 4 ans révolue, de 8 heure à 18 heure 30.<br><br>
                                    La pédagogie de la micro-crèche est basée sur l'autonomie de l'enfant. Que ce soit par la motricité libre, par la manière dont nous donnons les repas ou par notre volonté de laisser l'enfant faire seul, l'équipe éducative mettra tout en oeuvre pour que votre enfant puisse s'épanouir et devenir autonome.<br><br>
                                    L'équipe éducative, qui est constituée d'un référent technique éducatrice de jeunes enfants et de deux animatrices petite enfance, veille à vous accueillir, vous et votre enfant dans la bienveillance et la confiance. La micro-crèche est un lieu ouvert aux parents, où il est possible pour eux de se poser avec leur enfant et de partager un temps de jeux pendant les transmissions du matin ou du soir.<br><br>
                                    Grâce à sa collaboration avec un site de gestion de crèche, notre équipe mettra tout en oeuvre pour vous rassurer durant la journée, via des photos par exemple.</p>
                            </div>
                        </div>
                    </div>
        </section>
        <!-- <?php else : ?>
        <?php header('Location: index.php?page=home') ?>


    <?php endif; ?> -->
    <?php else : ?>
        <?php header('Location: index.php?page=home') ?>
    <?php endif; ?>