<?php include('../templates/header.php'); ?>

<section class="section-catalogue">
    <div class="row">
        <div class="col-md-6 offset-md-3 section-catalogue_contain">
            <div class="row align-items-center justify-content-center section-catalogue_contain-top--item">
                <h2>Catalogue - Films</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 section-catalogue_contain-left">
            <div class="row section-catalogue_contain-left--item">
                <h3>Recherche par filtres</h3>
            </div>
            <div class="row">
                <form class="section-catalogue_contain-left_form">
                    <fieldset class="section-catalogue_contain-left_form_field-genre">
                        <div class="row legend-open" id="genre">
                            <legend ><span class="icon icon-Filtres_recherche"></span>Genre</legend>
                        </div>
                        <div class="row categories" id="content-genre">
                            <div class="col-md-6">
                                <div class="row section-catalogue_contain-left_form_field-genre--item">
                                    <input type="checkbox" id="comedie" value="comedie" name="genre">
                                    <label for="comedie">Comédie</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-genre--item">
                                    <input type="checkbox" id="action" value="action" name="genre">
                                    <label for="action">Action</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-genre--item">
                                    <input type="checkbox" id="drame" value="drame" name="genre">
                                    <label for="drame">Drame</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-genre--item">
                                    <input type="checkbox" id="documentaire" value="documentaire" name="genre">
                                    <label for="documentaire">Documentaire</label>
                                </div>
                            </div>
                            <div class="col-md-6 section-catalogue_contain-left_form_field-genre_col2">
                                <div class="row section-catalogue_contain-left_form_field-genre--item">
                                    <input type="checkbox" id="court-metrage" value="court-metrage" name="genre">
                                    <label for="court-metrage">Court-métrage</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-genre--item">
                                    <input type="checkbox" id="suspense" value="Suspense" name="genre">
                                    <label for="suspense">Suspense</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-genre--item">
                                    <input type="checkbox" id="horreur" value="horreur" name="genre">
                                    <label for="horreur">Horreur</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-genre--item">
                                    <input type="checkbox" id="film-animation" value="film-animation" name="genre">
                                    <label for="film-animation">Film d'animation</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="nationnalite" class="section-catalogue_contain-left_form_field-nationnalite">
                        <div class="row legend-open" id="nationnalite">
                            <legend><span class="icon icon-Filtres_recherche"></span>Nationalite</legend>
                        </div>
                        <div class="row" id="content-nationnalite">
                            <div class="col-md-6">
                                <div class="row section-catalogue_contain-left_form_field-nationnalite--item">
                                    <input type="checkbox" id="bresilienne" value="bresilienne" name="nationnalite">
                                    <label for="bresilienne">Brésilienne</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-nationnalite--item">
                                    <input type="checkbox" id="indienne" value="indienne" name="nationnalite">
                                    <label for="indienne">Indienne</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-nationnalite--item">
                                    <input type="checkbox" id="autrichienne" value="autrichienne" name="nationnalite">
                                    <label for="autrichienne">Autrichienne</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-nationnalite--item">
                                    <input type="checkbox" id="coréenne" value="coréenne" name="nationnalite">
                                    <label for="coréenne">Coréenne</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-nationnalite--item">
                                    <input type="checkbox" id="italienne" value="italienne" name="nationnalite">
                                    <label for="italienne">Italienne</label>
                                </div>
                            </div>
                            <div class="col-md-6 section-catalogue_contain-left_form_field-nationnalite_col2">
                                <div class="row section-catalogue_contain-left_form_field-nationnalite--item">
                                    <input type="checkbox" id="francaise" value="francaise" name="nationnalite">
                                    <label for="francaise">Française</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-nationnalite--item">
                                    <input type="checkbox" id="russe" value="russe" name="nationnalite">
                                    <label for="russe">Russe</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-nationnalite--item">
                                    <input type="checkbox" id="britannique" value="britannique" name="nationnalite">
                                    <label for="britannique">Britannique</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-nationnalite--item">
                                    <input type="checkbox" id="iranienne" value="iranienne" name="nationnalite">
                                    <label for="iranienne">Iranienne</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-nationnalite--item">
                                    <input type="checkbox" id="americaine" value="americaine" name="nationnalite">
                                    <label for="americaine">Américaine</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="date-sortie" class="section-catalogue_contain-left_form_field-date-sortie">
                        <div class="row legend-open" id="date-sortie">
                            <legend><span class="icon icon-Filtres_recherche"></span>Année de sortie</legend>
                        </div>
                        <div class="row" id="content-date-sortie">
                            <div class="col-md-6">
                                <div class="row section-catalogue_contain-left_form_field-date-sortie--item">
                                    <input type="checkbox" id="a2010" value="2010" name="date-sortie">
                                    <label for="a2010">Années 2010</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-date-sortie--item">
                                    <input type="checkbox" id="a2000" value="a2000" name="date-sortie">
                                    <label for="a2000">Années 2000</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-date-sortie--item">
                                    <input type="checkbox" id="a1990" value="a1990" name="date-sortie">
                                    <label for="a1990">Années 1990</label>
                                </div>
                            </div>
                            <div class="col-md-6 section-catalogue_contain-left_form_field-date-sortie_col2">
                                <div class="row section-catalogue_contain-left_form_field-date-sortie--item">
                                    <input type="checkbox" id="a1980" value="a1980" name="date-sortie">
                                    <label for="a1980">Années 1980</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-date-sortie--item">
                                    <input type="checkbox" id="a1970" value="a1970" name="date-sortie">
                                    <label for="a1970">Années 1970</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-date-sortie--item">
                                    <input type="checkbox" id="a1960" value="a1960" name="date-sortie">
                                    <label for="a1960">Années 1960</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="langues" class="section-catalogue_contain-left_form_field-langues">
                        <div class="row legend-open" id="langues">
                            <legend><span class="icon icon-Filtres_recherche"></span>Langue</legend>
                        </div>
                        <div class="row" id="content-langues">
                            <div class="col-md-6">
                                <div class="row section-catalogue_contain-left_form_field-langues--item">
                                    <input type="checkbox" id="francais" value="francais" name="langues">
                                    <label for="francais">Français</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-langues--item">
                                    <input type="checkbox" id="italien" value="italien" name="langues">
                                    <label for="italien">Italien</label>
                                </div>
                                <!-- <div class="row"></div>
                                <div class="row"></div> -->
                            </div>
                            <div class="col-md-6 section-catalogue_contain-left_form_field-langues_col2">
                                <div class="row section-catalogue_contain-left_form_field-langues--item">
                                    <input type="checkbox" id="anglais" value="anglais" name="langues">
                                    <label for="anglais">Anglais</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-langues--item">
                                    <input type="checkbox" id="russ" value="russ" name="langues">
                                    <label for="russ">Russe</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="public" class="section-catalogue_contain-left_form_field-public">
                        <div class="row legend-open" id="public">
                            <legend><span class="icon icon-Filtres_recherche"></span>Public</legend>
                        </div>
                        <div class="row" id="content-public">
                            <div class="col-md-6">
                                <div class="row section-catalogue_contain-left_form_field-public--item">
                                    <input type="checkbox" id="amateur" value="amateur" name="public">
                                    <label for="amateur">Amateur</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-public--item">
                                    <input type="checkbox" id="moins-18" value="moins-18" name="public">
                                    <label for="moins-18">-18</label>
                                </div>
                                <!-- <div class="row"></div>
                                <div class="row"></div> -->
                            </div>
                            <div class="col-md-6 section-catalogue_contain-left_form_field-public_col2">
                                <div class="row section-catalogue_contain-left_form_field-public--item">
                                    <input type="checkbox" id="fan" value="fan" name="public">
                                    <label for="fan">Fan</label>
                                </div>
                                <!-- <div class="row"></div>
                                <div class="row"></div>
                                <div class="row"></div> -->
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="statut" class="section-catalogue_contain-left_form_field-statut">
                        <div class="row legend-open" id="statut">
                            <legend><span class="icon icon-Filtres_recherche"></span>Statut</legend>
                        </div>
                        <div class="row" id="content-statut">
                            <div class="col-md-6">
                                <div class="row section-catalogue_contain-left_form_field-statut--item">
                                    <input type="checkbox" id="disponible" value="disponible" name="statut">
                                    <label for="disponible">Disponible</label>
                                </div>
                            </div>
                            <div class="col-md-6 section-catalogue_contain-left_form_field-statut_col2">
                                <div class="row section-catalogue_contain-left_form_field-statut--item">
                                    <input type="checkbox" id="promotion" value="promotion" name="statut">
                                    <label for="promotion">Promotion</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="prix" class="section-catalogue_contain-left_form_field-prix">
                        <div class="row legend-open" id="prix">
                            <legend><span class="icon icon-Filtres_recherche"></span>Prix</legend>
                        </div>
                        <div class="row" id="content-prix">
                            <div class="col-md-6">
                                <div class="row section-catalogue_contain-left_form_field-prix--item">
                                    <input type="checkbox" id="moins-5" value="moins-5" name="prix">
                                    <label for="moins-5">Moins de 5€</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-prix--item">
                                    <input type="checkbox" id="de-10-15" value="de-10-15" name="prix">
                                    <label for="de-10-15">De 10€ à 15€</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-prix--item">
                                    <input type="checkbox" id="de-20-25" value="de-20-25" name="prix">
                                    <label for="de-20-25">De 20€ à 25€</label>
                                </div>
                            </div>
                            <div class="col-md-6 section-catalogue_contain-left_form_field-prix_col2">
                                <div class="row section-catalogue_contain-left_form_field-prix--item">
                                    <input type="checkbox" id="de-5-10" value="de-5-10" name="prix">
                                    <label for="de-5-10">De 5€ à 10€</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-prix--item">
                                    <input type="checkbox" id="de-15-20" value="de-15-20" name="prix">
                                    <label for="de-15-20">De 15€ à 20€</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-prix--item">
                                    <input type="checkbox" id="plus-25" value="plus-25" name="prix">
                                    <label for="plus-25">Plus de 25€</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="format" class="section-catalogue_contain-left_form_field-format">
                        <div class="row legend-open" id="format">
                            <legend><span class="icon icon-Filtres_recherche"></span>Format</legend>
                        </div>
                        <div class="row" id="content-format">
                            <div class="col-md-6">
                                <div class="row section-catalogue_contain-left_form_field-format--item">
                                    <input type="checkbox" id="dvd" value="dvd" name="format">
                                    <label for="dvd">DVD</label>
                                </div>
                            </div>
                            <div class="col-md-6 section-catalogue_contain-left_form_field-format_col2">
                                <div class="row section-catalogue_contain-left_form_field-format--item">
                                    <input type="checkbox" id="blu-ray" value="blu-ray" name="format">
                                    <label for="blu-ray">Blu-ray</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-lg-7 col-8 offset-lg-1 offset-3 section-catalogue_contain-right">
            <div class="row line">
                <div class="col-lg-4 col-8 contain">
                    <div class="item">
                        <img src="../assets/imgs/Films/4812.jpg" alt="">
                        <div class="contain-icons">
                            <a href="4_details_films.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-8 contain">
                    <div class="item">
                        <img src="../assets/imgs/Films/4812.jpg" alt="">
                        <div class="contain-icons">
                            <a href="4_details_films.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-8 contain">
                    <div class="item">
                        <img src="../assets/imgs/Films/4812.jpg" alt="">
                        <div class="contain-icons">
                            <a href="4_details_films.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row line">
                <div class="col-lg-4 col-8 contain">
                    <div class="item">
                        <img src="../assets/imgs/Films/GUY.jpg" alt="">
                        <div class="contain-icons">
                            <a href="4_details_films.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-8 contain">
                    <div class="item">
                        <img src="../assets/imgs/Films/GUY.jpg" alt="">
                        <div class="contain-icons">
                            <a href="4_details_films.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-8 contain">
                    <div class="item">
                        <img src="../assets/imgs/Films/GUY.jpg" alt="">
                        <div class="contain-icons">
                            <a href="4_details_films.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row line">
                <div class="col-lg-4 col-8 contain">
                    <div class="item">
                        <img src="../assets/imgs/Films/poster_zoom.jpg" alt="">
                        <div class="contain-icons">
                            <a href="4_details_films.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-8 contain">
                    <div class="item">
                        <img src="../assets/imgs/Films/poster_zoom.jpg" alt="">
                        <div class="contain-icons">
                            <a href="4_details_films.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-8 contain">
                    <div class="item">
                        <img src="../assets/imgs/Films/poster_zoom.jpg" alt="">
                        <div class="contain-icons">
                            <a href="4_details_films.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row line">
                <div class="col-lg-4 col-8 contain">
                    <div class="item">
                        <img src="../assets/imgs/Films/Gabriel_et_la_montagne.jpg" alt="">
                        <div class="contain-icons">
                            <a href="4_details_films.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-8 contain">
                    <div class="item">
                        <img src="../assets/imgs/Films/Gabriel_et_la_montagne.jpg" alt="">
                        <div class="contain-icons">
                            <a href="4_details_films.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-8 contain">
                    <div class="item">
                        <img src="../assets/imgs/Films/Gabriel_et_la_montagne.jpg" alt="">
                        <div class="contain-icons">
                            <a href="4_details_films.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row line">
                <div class="col-lg-4 col-8 contain">
                    <div class="item">
                        <img src="../assets/imgs/Films/4514291.jpg" alt="">
                        <div class="contain-icons">
                            <a href="4_details_films.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-8 contain">
                    <div class="item">
                        <img src="../assets/imgs/Films/4514291.jpg" alt="">
                        <div class="contain-icons">
                            <a href="4_details_films.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-8 contain">
                    <div class="item">
                        <img src="../assets/imgs/Films/4514291.jpg" alt="">
                        <div class="contain-icons">
                            <a href="4_details_films.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">

    $(".legend-open").on('click',function(){
        let id = $(this).attr("id");
        $(document).find('#content-'+id).toggle();
        $(this).find('legend span').toggleClass('icon-rotate');
    });
</script>
<?php include('../templates/footer.php'); ?>
