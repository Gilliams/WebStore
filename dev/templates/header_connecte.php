<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Le site WebStore</title>
    <link rel="stylesheet" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/icones/style.css">
    <link rel="stylesheet" href="../assets/fonts/LibreFranklin/librefranklin-regular.ttf">
    <link href="https://vjs.zencdn.net/7.4.1/video-js.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <header class="container-fluid" id="h-mobile">
        <div class="row marg-LR align-items-center">
            <div class="col-4 align-self-center" id="h-logo--desktop">
                <a href="../pages/10_accueil.php">
                    <img src="../assets/imgs/logo.jpg" alt="" class="logo">
                </a>
            </div>
            <div class="col-4 align-self-center" id="h-logo--mobile">
                <a href="../pages/2_catalogue_films.php">
                    <img src="../assets/imgs/Logo_mobile.png" alt="" class="logo">
                </a>
            </div>
            <div class="col-lg-4 align-self-center" id="h-input-search--desktop">
                <div class="row">
                    <form action="">
                        <input type="text" placeholder="Rechercher une musique ou un film..." class="input" name="search">
                        <label for="search">
                            <span class="icon-Search"><span class="path1"></span><span class="path2"></span></span>
                        </label>
                    </form>
                </div>
            </div>
            <div class="col-4 offset-1 mt-4 align-self-center" id="h-input-search--mobile">
                <div class="row">
                    <form action="">
                        <input type="text" placeholder="Recherche" class="input--mobile" name="search">
                        <label for="search--mobile">
                            <span id="icon-Search" class="icon-Search"><span class="path1"></span><span class="path2"></span></span>
                        </label>
                    </form>
                </div>
            </div>
            <div class="col-3 offset-md-1 login align-self-center" id="h-login--desktop">
                <div class="row">
                    <div class="col-3">
                        <span class="icon-User"><span class="path1"></span><span class="path2"></span></span>
                    </div>
                    <div class="col-9">
                        <a href="../pages/12_espace_perso.php" class="btn btn-login">Bienvenue John!</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <span class="icon-Cart"><span class="path1"></span><span class="path2"></span></span>
                    </div>
                    <div class="col-9">
                        <a href="../pages/13_panier.php" class="btn btn-login">Accéder au panier</a>
                    </div>
                </div>
            </div>
            <div class="col-1 offset-1 text-right" id="h-menu--mobile">
                <span id="icon-menu"class="icon-menu"></span>
            </div>
        </div>
    </header>
    <ul class="row marg-LR nav navbar-nav align-self-center" id="navbar-header">
        <div class="col-md-3 nav__col">
            <a href="../pages/10_accueil.php"><li class="nav__col--item">Accueil</li></a>
        </div>
        <div class="col-md-3 nav__col">
            <li class="nav__col--item">Films</li>
            <div class="row nav__col__child">
                <li class="nav__col__child--item">
                    <a href="../pages/6_nouveaux_films.php">Nouveautés</a>
                </li>
                <hr>
                <li class="nav__col__child--item">
                    <a href="../pages/1_promo_films.php">Promotions</a>
                </li>
                <hr>
                <li class="nav__col__child--item">
                    <a href="../pages/2_catalogue_films.php">Catalogue</a>
                </li>
            </div>
        </div>
        <div class="col-md-3 nav__col">
            <li class="nav__col--item">Musiques</li>
            <div class="row nav__col__child">
                <li class="nav__col__child--item">
                    <a href="../pages/7_nouvelles_musiques.php">Nouveautés</a>
                </li>
                <hr>
                <li class="nav__col__child--item">
                    <a href="../pages/8_promo_musique.php">Promotions</a>
                </li>
                <hr>
                <li class="nav__col__child--item">
                    <a href="../pages/3_catalogue_musique.php">Catalogue</a>
                </li>
            </div>
        </div>
        <div class="col-md-3 nav__col">
            <li class="nav__col--item">Webstore</li>
            <div class="row nav__col__child">
                <li class="nav__col__child--item">
                    <a href="16_webstore.php">Qui sommes nous?</a>
                </li>
                <hr>
                <li class="nav__col__child--item">
                    <a href="11_contact.php">Nous contacter</a>
                </li>
            </div>
        </div>
        <div class="row" id="h-login--mobile">
            <div class="col-md-12 nav__col ">
                <a href="../pages/9_connexion.php"><li class="nav__col--item">S'inscrire | Se connecter</li></a>
            </div>
        </div>
    </ul>
