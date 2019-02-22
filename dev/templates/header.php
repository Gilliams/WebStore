<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Le site WebStore</title>
    <link rel="stylesheet" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/icones/style.css">
    <link href="https://vjs.zencdn.net/7.4.1/video-js.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <header class="container-fluid">
        <div class="row">
            <div class="col-2 align-self-center" id="h-logo--desktop">
                <a href="../pages/2_catalogue_films.php">
                    <img src="../assets/imgs/logo.jpg" alt="" class="logo">
                </a>
            </div>
            <div class="col-2 align-self-center" id="h-logo--mobile">
                <a href="../pages/2_catalogue_films.php">
                    <img src="../assets/imgs/Logo_mobile.png" alt="" class="logo">
                </a>
            </div>
            <div class="col-4 offset-md-1 align-self-center" id="h-input-search--desktop">
                <div class="row">
                    <form action="">
                        <input type="text" placeholder="Rechercher une musique ou un film..." class="input" name="search">
                        <label for="search">
                            <span class="icon-Search"><span class="path1"></span><span class="path2"></span></span>
                        </label>
                    </form>
                </div>
            </div>
            <div class="col-4 offset-md-1 align-self-center" id="h-input-search--mobile">
                <div class="row">
                    <form action="">
                        <input type="text" placeholder="Recherche" class="input--mobile" name="search">
                        <label for="search--mobile">
                            <span id="icon-Search" class="icon-Search"><span class="path1"></span><span class="path2"></span></span>
                        </label>
                    </form>
                </div>
            </div>
            <div class="col-3 offset-md-2 login">
                <span class="icon-User"><span class="path1"></span><span class="path2"></span></span>
                <a href="#">S'inscrire</a> |
                <a href="#">Se connecter</a>
                <span id="icon-menu"class="icon-menu"></span>
            </div>
        </div>
    </header>
    <ul class="row nav navbar-nav" id="navbar-header">
        <div class="col-md-3 nav__col">
            <a href="../pages/2_catalogue_films.php"><li class="nav__col--item">Accueil</li></a>
        </div>
        <div class="col-md-3 nav__col">
            <a href="../pages/2_catalogue_films.php"><li class="nav__col--item">Films</li></a>
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
            <a href="../pages/3_catalogue_musique.php"><li class="nav__col--item">Musique</li></a>
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
            <a href=""><li class="nav__col--item">Webstore</li></a>
            <div class="row nav__col__child">
                <li class="nav__col__child--item">
                    <a href="test">Qui sommes nous?</a>
                </li>
                <hr>
                <li class="nav__col__child--item">
                    <a href="test">Nous contacter</a>
                </li>
            </div>
        </div>
    </ul>
<script>
    $("#h-input-search--mobile input").hide();
    $("#icon-Search").on('click',function(){
        $("#h-input-search--mobile input").toggle();
    });
    $('#icon-menu').on('click',function(){
        $('#navbar-header').toggle();
    });
</script>
