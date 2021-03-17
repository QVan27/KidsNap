<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids'Nap</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>
    <header>
        <!-- <div class="container-header"> -->
        <img src="asset/image/logo-dark.png" alt="">
        <div class="nav nav-header">
            <nav>
                <ul>
                    <div class="left">
                        <li><a href="">Parents</a></li>
                        <li><a href="">Pro</a></li>
                    </div>
                    <div class="right">
                        <li><a href="">à propos</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="" class="btn color-1">Connexion</a></li>
                    </div>
                </ul>
            </nav>
        </div>
        <!-- </div> -->
    </header>


    <main class="">
        <div class="container">
            <?= $content ?>
        </div>
    </main>


    <footer>
        <div class="footer-container">
            <div class="img-footer">
                <img src="asset/image/logo-dark.png" alt="">
                <div>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-instagram-square"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-facebook-f"></i>
                </div>
            </div>
            <div class="link-footer">
                <h3 class="color-black title-footer">Kids’Nap</h3>
                <a href="" class="color-black title-footer">Le blog</a>
                <a href="" class="color-black title-footer">Kite presse</a>
                <a href="" class="color-black">Nos partenaires</a>
            </div>
            <div class="link-footer">
                <h3 class="color-black title-footer">Aide</h3>
                <a href="" class="color-black title-footer">Nous contacter</a>
                <a href="" class="color-black">Mentions légales</a>
            </div>
        </div>
    </footer>
</body>

</html>