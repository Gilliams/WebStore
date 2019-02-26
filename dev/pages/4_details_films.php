<?php include('../templates/header.php'); ?>
<section class="section-details">
    <div class="row">
        <div class="col-lg-6 col-6 offset-3 offset-lg-3 section-catalogue_contain">
            <nav id="bread" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="2_catalogue_films.php">Films</a></li>
                <li class="breadcrumb-item active" aria-current="page">Details films</li>
              </ol>
            </nav>
            <div class="row align-items-center justify-content-center section-catalogue_contain-top--item">
                <h2>Fiche Détaillée</h2>
            </div>
        </div>
    </div>
    <div class="row align-items-center details">
        <div class="col-lg-2 col-3 offset-1 offset-lg-1">
            <img src="../assets/imgs/Films/4514291.jpg" alt="">
        </div>
        <div class="col-lg-7 col-6 offset-1 offset-lg-1 details-contain">
            <ul>
                <li>
                    <span>Titre : </span>Whiplash
                </li>
                <li>
                    <span>Année de sortie :</span>2014
                </li>
                <li>
                    <span>Réalisateur : </span>Damien Chazelle
                </li>
                <li><span>Acteurs : </span>Miles Teller, J.K Simmons, Paul Reisser, Melissa Benoist</li>
                <li><span>Genre : </span>Drame, Musical</li>
                <li><span>Nationalité : </span>Américain</li>
                <li><span>Langue : </span>Anglais</li>
                <li><span>Public : </span>Tous publics</li>
                <li><span>Durée : </span>1h45</li>
                <li><span>Format : </span>Full HD</li>
                <li><span>Taille : </span>2.4GB</li>
                <li><span>Synopsis : </span>Andrew, 19 ans, rêve de devenir l’un des meilleurs batteurs de jazz de sa génération. Mais la concurrence est rude au conservatoire de Manhattan où il s’entraîne avec acharnement. Il a pour objectif d’intégrer le fleuron des orchestres dirigé par Terence Fletcher, professeur féroce et intraitable. Lorsque celui-ci le repère enfin, Andrew se lance, sous sa direction, dans la quête de l’excellence...</li>
                <li><span>Statut : </span>Disponible</li>
                <li class="price-contain"><span>Prix : </span>14€<span class="price">99</span></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-6 offset-3 offset-lg-3 section-catalogue_contain">
            <a href="13_panier.php">
                <div class="row align-items-center justify-content-center section-catalogue_contain-top--item bold">
                    <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                    <h2>Ajouter au panier</h2>
                </div>
            </a>
        </div>
    </div>
    <video id="my-video" class="video-js" controls preload="auto" width="1059" height="549"
    poster="../assets/imgs/film_exemple.jpg" data-setup="{}">
      <source src="../assets/video/SilliconValley.mp4" type='video/mp4'>
      <source src="MY_VIDEO.webm" type='video/webm'>
      <p class="vjs-no-js">
        To view this video please enable JavaScript, and consider upgrading to a web browser that
        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
      </p>
    </video>
</section>
<?php include('../templates/footer.php'); ?>
