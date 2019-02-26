<?php include('../templates/header.php'); ?>

<section class="section-catalogue">
    <div class="row marg-LR">
        <div class="col-md-6 offset-md-3 section-catalogue_contain">
            <div class="row align-items-center justify-content-center section-catalogue_contain-top--item">
                <h2>Catalogue - Musique</h2>
            </div>
        </div>
    </div>
    <div class="row marg-LR">
        <div class="col-md-3 section-catalogue_contain-left filtre" >
            <div class="row section-catalogue_contain-left--item">
                <h3>Recherche par filtres</h3>
            </div>
            <div class="row">
                <form class="section-catalogue_contain-left_form">
                    <fieldset id="genre" class="section-catalogue_contain-left_form_field-genre">
                        <div class="row legend-open" id="genre">
                            <legend><span class="icon icon-Filtres_recherche"></span>Genre</legend>
                        </div>
                        <div class="row" id="content-genre">
                            <div class="col-md-6">
                                <div class="row section-catalogue_contain-left_form_field-genre--item">
                                    <input type="checkbox" id="rock" value="rock" name="genre">
                                    <label for="rock">Rock</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-genre--item">
                                    <input type="checkbox" id="pop" value="pop" name="genre">
                                    <label for="pop">Pop</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-genre--item">
                                    <input type="checkbox" id="classique" value="classique" name="genre">
                                    <label for="classique">Classique</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-genre--item">
                                    <input type="checkbox" id="electro" value="electro" name="genre">
                                    <label for="electro">Electro</label>
                                </div>
                            </div>
                            <div class="col-md-6 section-catalogue_contain-left_form_field-genre_col2">
                                <div class="row section-catalogue_contain-left_form_field-genre--item">
                                    <input type="checkbox" id="rap-rnb" value="rap-rnb" name="genre">
                                    <label for="rap-rnb">Rap / R'n'b</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-genre--item">
                                    <input type="checkbox" id="reggae" value="reggae" name="genre">
                                    <label for="reggae">Reggae</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-genre--item">
                                    <input type="checkbox" id="jazz" value="jazz" name="genre">
                                    <label for="jazz">Jazz</label>
                                </div>
                                <div class="row section-catalogue_contain-left_form_field-genre--item">
                                    <input type="checkbox" id="blues" value="blues" name="genre">
                                    <label for="blues">Blues</label>
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
                                    <input type="checkbox" id="de-5-10" value="de-5-10" name="prix">
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
                                    <input type="checkbox" id="mp4" value="mp4" name="format">
                                    <label for="mp4">MP4</label>
                                </div>
                            </div>
                            <div class="col-md-6 section-catalogue_contain-left_form_field-format_col2">
                                <div class="row section-catalogue_contain-left_form_field-format--item">
                                    <input type="checkbox" id="mp3" value="mp3" name="format">
                                    <label for="mp3">MP3</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-lg-7 col-8 offset-lg-1 offset-3 section-catalogue_contain-right">
            <div class="row line">
                <div class="col-lg-4 col-6 contain">
                    <div class="item">
                        <img src="../assets/imgs/Musique/ce-qui-nous-lie.jpg" alt="">
                        <div class="contain-icons">
                            <a href="5_details_musique.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 contain">
                    <div class="item">
                        <img src="../assets/imgs/Musique/ce-qui-nous-lie.jpg" alt="">
                        <div class="contain-icons">
                            <a href="5_details_musique.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 contain">
                    <div class="item">
                        <img src="../assets/imgs/Musique/ce-qui-nous-lie.jpg" alt="">
                        <div class="contain-icons">
                            <a href="5_details_musique.php">
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
                <div class="col-lg-4 col-6 contain">
                    <div class="item">
                        <img src="../assets/imgs/Musique/Le_Parrain_Bande_originale_du_film_Bande_Originale.jpg" alt="">
                        <div class="contain-icons">
                            <a href="5_details_musique.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 contain">
                    <div class="item">
                        <img src="../assets/imgs/Musique/Le_Parrain_Bande_originale_du_film_Bande_Originale.jpg" alt="">
                        <div class="contain-icons">
                            <a href="5_details_musique.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 contain">
                    <div class="item">
                        <img src="../assets/imgs/Musique/Le_Parrain_Bande_originale_du_film_Bande_Originale.jpg" alt="">
                        <div class="contain-icons">
                            <a href="5_details_musique.php">
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
                <div class="col-lg-4 col-6 contain">
                    <div class="item">
                        <img src="../assets/imgs/Musique/leon-la-bande-originale-01.jpg" alt="">
                        <div class="contain-icons">
                            <a href="5_details_musique.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 contain">
                    <div class="item">
                        <img src="../assets/imgs/Musique/leon-la-bande-originale-01.jpg" alt="">
                        <div class="contain-icons">
                            <a href="5_details_musique.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 contain">
                    <div class="item">
                        <img src="../assets/imgs/Musique/leon-la-bande-originale-01.jpg" alt="">
                        <div class="contain-icons">
                            <a href="5_details_musique.php">
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
                <div class="col-lg-4 col-6 contain">
                    <div class="item">
                        <img src="../assets/imgs/Musique/1128-Weinstein-Quentin-Tarantino-Loma-Vista-Announce-Django-Unchained-Soundtrack-1.jpeg" alt="">
                        <div class="contain-icons">
                            <a href="5_details_musique.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 contain">
                    <div class="item">
                        <img src="../assets/imgs/Musique/1128-Weinstein-Quentin-Tarantino-Loma-Vista-Announce-Django-Unchained-Soundtrack-1.jpeg" alt="">
                        <div class="contain-icons">
                            <a href="5_details_musique.php">
                                <span class="icon icon-Details"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                            <a href="13_panier.php">
                                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 contain">
                    <div class="item">
                        <img src="../assets/imgs/Musique/1128-Weinstein-Quentin-Tarantino-Loma-Vista-Announce-Django-Unchained-Soundtrack-1.jpeg" alt="">
                        <div class="contain-icons">
                            <a href="5_details_musique.php">
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

<?php include('../templates/footer.php'); ?>
