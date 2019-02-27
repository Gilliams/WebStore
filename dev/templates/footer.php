<footer>
    <div class="px-10">
        <div class="row marg-LR" id="f-desktop">
            <div class="col-md-1 col-small--item-title">
                <a href="#">Accueil</a>
            </div>
            <div class="col-md-1 col-small">
                <ul>
                    <li class="col-small--item-title">Films</li>
                    <li class="col-small--item"><a href="../pages/6_nouveaux_films.php">Nouveautés</a></li>
                    <li class="col-small--item"><a href="../pages/1_promo_films.php">Promotions</a></li>
                    <li class="col-small--item"><a href="../pages/2_catalogue_films.php">Catalogue</a></li>
                </ul>
            </div>
            <div class="col-md-1 col-small">
                <ul>
                    <li class="col-small--item-title">Musiques</li>
                    <li class="col-small--item"><a href="../pages/7_nouvelles_musiques.php">Nouveautés</a></li>
                    <li class="col-small--item"><a href="../pages/8_promo_musique.php">Promotions</a></li>
                    <li class="col-small--item"><a href="../pages/3_catalogue_musique.php">Catalogue</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-small">
                <ul>
                    <li class="col-small--item-title">Webstore</li>
                    <li class="col-small--item"><a href="16_webstore.php">Qui sommes nous ?</a></li>
                    <li class="col-small--item"><a href="11_contact.php">Nous contacter</a></li>
                </ul>
            </div>
            <div class="col-md-3 align-self-end col-center">
                <div class="row col-center__row-middle">
                    <ul>
                        <li class="col-center__row-middle--item mb-3"><a href="#" class="footer__col-center__row-top--item">Déjà inscrit?</a></li>
                        <li class="col-center__row-middle--item"><a href="#">Se connecter</a></li>
                        <li class="col-center__row-middle--item"><a href="13_panier.php">Accéder au panier</a></li>
                    </ul>
                </div>
                <div class="row col-center__row-bottom">
                    <span class="col-center__row-bottom--item">&copy; SFP Communications - 2018</span>
                </div>
            </div>
            <div class="col-md-3 offset-md-1 col-right">
                <div class="row col-right__row-top">
                    <a href="#" id="facebook">
                        <span class=" icon icon-Facebook"><span class="path1"></span><span class="path2"></span></span>
                    </a>
                    <a href="#" id="instagram">
                        <img src="../assets/imgs/instagram.svg.png" alt="">
                    </a>
                    <a href="#" id="twitter">
                        <span class=" icon icon-Twitter"><span class="path1"></span><span class="path2"></span></span>
                    </a>
                </div>
                <div class="row col-right__row-bottom">
                    <a href="#">Mentions légales</a>
                    <a href="#" class="ml-4">Conditions générales</a>
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
                <div class="row col-center__row-middle">
                    <ul>
                        <li class="col-center__row-middle--item mb-1"><a href="#">Déjà inscrit?</a></li>
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
                    <a href="#" id="facebook">
                        <span class=" icon icon-Facebook"><span class="path1"></span><span class="path2"></span></span>
                    </a>
                    <a href="#" id="instagram">
                        <img src="../assets/imgs/instagram.svg.png" alt="">
                    </a>
                    <a href="#" id="twitter">
                        <span class=" icon icon-Twitter"><span class="path1"></span><span class="path2"></span></span>
                    </a>
                </div>
                <div class="row col-right__row-bottom">
                    <a href="#">Mentions légales</a>
                    <a href="#">Conditions générales</a>
                </div>
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

        $("#prix-film").hover(function(){
            $('#prix-film').append("<span class='icon icon-center-film icon-Addtocart'><span class='path1'></span><span class='path2'></span><span class='path3'></span></span>")
            $('#prix-film').mouseleave(function(){
                $('#prix-film').append("<div class='prix prix-film'><span>19€</span><span>99</span></div>")
            });
        })
        $("#prix-music").hover(function(){
            $('#prix-music').append("<span class='icon icon-center-music icon-Addtocart'><span class='path1'></span><span class='path2'></span><span class='path3'></span></span>")
            $('#prix-music').mouseleave(function(){
                $('#prix-music').append("<div class='prix prix-music'><span>19€</span><span>99</span></div>")
            });
        })
    </script>
</footer>
