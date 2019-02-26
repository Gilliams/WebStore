<footer>
    <div class="row marg-LR" id="f-desktop">
        <div class="col-md-1 col-small--item-title">
            <a href="#">Accueil</a>
        </div>
        <div class="col-md-1 col-small">
            <ul>
                <li class="col-small--item-title"><a href="../pages/2_catalogue_films.php">Films</a></li>
                <li class="col-small--item"><a href="../pages/6_nouveaux_films.php">Nouveautés</a></li>
                <li class="col-small--item"><a href="../pages/1_promo_films.php">Promotions</a></li>
                <li class="col-small--item"><a href="../pages/2_catalogue_films.php">Catalogue</a></li>
            </ul>
        </div>
        <div class="col-md-1 col-small">
            <ul>
                <li class="col-small--item-title"><a href="../pages/3_catalogue_musique.php">Musique</a></li>
                <li class="col-small--item"><a href="../pages/7_nouvelles_musiques.php">Nouveautés</a></li>
                <li class="col-small--item"><a href="../pages/8_promo_musique.php">Promotions</a></li>
                <li class="col-small--item"><a href="../pages/3_catalogue_musique.php">Catalogue</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-small">
            <ul>
                <li class="col-small--item-title"><a href="#">Webstore</a></li>
                <li class="col-small--item"><a href="#">Qui sommes nous ?</a></li>
                <li class="col-small--item"><a href="#">Nous contacter</a></li>
            </ul>
        </div>
        <div class="col-md-3 align-self-end col-center">
            <div class="row col-center__row-top">
                <a href="#" class="footer__col-center__row-top--item">Déjà inscrit?</a>
            </div>
            <div class="row col-center__row-middle">
                <ul>
                    <li class="col-center__row-middle--item"><a href="#">Se connecter</a></li>
                    <li class="col-center__row-middle--item"><a href="#">Accéder au panier</a></li>
                </ul>
            </div>
            <div class="row col-center__row-bottom">
                <span class="col-center__row-bottom--item">&copy; SFP Communications - 2018</span>
            </div>
        </div>
        <div class="col-md-3 offset-md-1 col-right">
            <div class="row col-right__row-top">
                <span class=" icon icon-Facebook"><span class="path1"></span><span class="path2"></span></span>
                <span class=" icon icon-Instagram"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span>
                <span class=" icon icon-Twitter"><span class="path1"></span><span class="path2"></span></span>
            </div>
            <div class="row col-right__row-bottom">
                <a href="#">Mentions légales | Conditions générales</a>
            </div>
        </div>
    </div>
    <div class="row" id="f-mobile">
        <div class="col-sm-7 offset-sm-5 align-item-center col-small--item-title" id="accueil">
            <a href="#">Accueil</a>
        </div>
        <div class="col-sm-4 col-small">
            <ul>
                <li class="col-small--item-title"><a href="../pages/2_catalogue_films.php">Films</a></li>
                <li class="col-small--item"><a href="../pages/6_nouveaux_films.php">Nouveautés</a></li>
                <li class="col-small--item"><a href="../pages/1_promo_films.php">Promotions</a></li>
                <li class="col-small--item"><a href="../pages/2_catalogue_films.php">Catalogue</a></li>
            </ul>
        </div>
        <div class="col-sm-4 col-small">
            <ul>
                <li class="col-small--item-title"><a href="../pages/3_catalogue_musique.php">Musique</a></li>
                <li class="col-small--item"><a href="../pages/7_nouvelles_musiques.php">Nouveautés</a></li>
                <li class="col-small--item"><a href="../pages/8_promo_musique.php">Promotions</a></li>
                <li class="col-small--item"><a href="../pages/3_catalogue_musique.php">Catalogue</a></li>
            </ul>
        </div>
        <div class="col-sm-4 col-small">
            <ul>
                <li class="col-small--item-title"><a href="#">Webstore</a></li>
                <li class="col-small--item"><a href="#">Qui sommes nous ?</a></li>
                <li class="col-small--item"><a href="#">Nous contacter</a></li>
            </ul>
        </div>
        <div class="col-sm-6 align-self-end col-center">
            <div class="row col-center__row-top">
                <a href="#" class="footer__col-center__row-top--item">Déjà inscrit?</a>
            </div>
            <div class="row col-center__row-middle">
                <ul>
                    <li class="col-center__row-middle--item"><a href="#">Se connecter</a></li>
                    <li class="col-center__row-middle--item"><a href="#">Accéder au panier</a></li>
                </ul>
            </div>
            <div class="row col-center__row-bottom">
                <span class="col-center__row-bottom--item">&copy; SFP Communications - 2018</span>
            </div>
        </div>
        <div class="col-sm-6 col-right">
            <div class="row col-right__row-top">
                <span class=" icon icon-Facebook"><span class="path1"></span><span class="path2"></span></span>
                <span class=" icon icon-Instagram"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span>
                <span class=" icon icon-Twitter"><span class="path1"></span><span class="path2"></span></span>
            </div>
            <div class="row col-right__row-bottom">
                <a href="#">Mentions légales | Conditions générales</a>
            </div>
        </div>
    </div>
    <script src="https://vjs.zencdn.net/7.4.1/video.js"></script>
    <script>
        $('#icon-menu').on('click',function(){
            $('#navbar-header').toggle();
        });

        $(".legend-open").on('click',function(){
            let id = $(this).attr("id");
            $(document).find('#content-'+id).toggle();
            $(this).find('legend span').toggleClass('icon-rotate');
        });
    </script>
</footer>
