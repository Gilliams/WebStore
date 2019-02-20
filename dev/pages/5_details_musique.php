<?php include('../templates/header.php'); ?>
<section class="section-details">
    <div class="row">
        <div class="col-md-6 offset-md-3 section-catalogue_contain">
            <nav id="bread" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="3_catalogue_musique.php">Musiques</a></li>
                <li class="breadcrumb-item active" aria-current="page">Details musiques</li>
              </ol>
            </nav>
            <div class="row align-items-center justify-content-center section-catalogue_contain-top--item">
                <h2>Fiche Détaillée</h2>
            </div>
        </div>
    </div>
    <div class="row align-items-center details">
        <div class="col-md-2 offset-md-1">
            <img src="https://picsum.photos/300/300/?random" alt="">
        </div>
        <div class="col-md-7 offset-md-1 details-contain">
            <ul>
                <li>
                    <span>Titre : </span>Drive
                </li>
                <li>
                    <span>Année de sortie :</span>2014
                </li>
                <li>
                    <span>Compositeur(s) : </span>Cliff Martinez
                </li>
                <li><span>Genre : </span>Electro</li>
                <li><span>Format : </span>.flac</li>
                <li><span>Taille : </span>2.4GB</li>
                <li><span>Synopsis : </span>La musique originale de Drive est signée par le mythique Cliff Martinez, ancier batteur des Red hot chili peppers reconverti dans la musique de film. Sa partition est dans la couleur, inquiétante, éléctronique, sentimentale. Elle aurait pu être signée Tangerine dream !</li>
                <li><span>Statut : </span>Promotion</li>
                <div class="row">
                    <div class="col-md-4">
                        <li class="price-contain"><span>Prix individuel : </span>14€<span class="price">99</span></li>
                    </div>
                    <div class="col-md-8">
                        <li class="price-contain"><span>Prix Promotion Electro (4 articles) : </span>19€<span class="price">99</span></li>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3 section-catalogue_contain">
            <div class="row align-items-center justify-content-center section-catalogue_contain-top--item bold">
                <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                <h2>Ajouter au panier</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3 section-catalogue_contain">
            <div class="row align-items-center justify-content-center section-catalogue_contain-top--item bold">
                <h2>TRACKLIST</h2>
            </div>
        </div>
    </div>
    <div class="col-md-10 offset-md-1">
        <table class="table ">
            <tr>
                <th>N°</th>
                <th>Titre</th>
                <th>Interprète</th>
                <th>Prix</th>
                <th>Extrait</th>
                <th>Ajouter au panier</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Nightcall</td>
                <td>Kavinsky & Lovefoxx</td>
                <td>
                    <div class="price-contain">
                        0€<span class="price">99</span>
                    </div>
                </td>
                <td>
                    <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                </td>
                <td>
                    <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Tick of the Clock</td>
                <td>Chromatics</td>
                <td>
                    <div class="price-contain">
                        0€<span class="price">99</span>
                    </div>
                </td>
                <td>
                    <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                </td>
                <td>
                    <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Rubber Head</td>
                <td>Cliff Martinez</td>
                <td>
                    <div class="price-contain">
                        0€<span class="price">99</span>
                    </div>
                </td>
                <td>
                    <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                </td>
                <td>
                    <span class="icon icon-Addtocart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                </td>
            </tr>
        </table>
    </div>

</section>
<<?php include('../templates/footer.php'); ?>
