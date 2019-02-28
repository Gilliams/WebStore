<?php
include('../templates/header.php');
?>
	<main class="commande">
		<div class="container-fluid">
			<?php include('../templates/breadcrumb.php');?>
			<div class="row justify-content-center">
				<h1 class="col-12 col-sm-10 col-md-8 col-lg-6">Récapitulatif de commande</h1>
			</div>
			<div class="row justify-content-center">
				<table class="col-8">
					<thead>
						<tr>
							<th class="nom" scope="col">Nom de l'article</th>
							<th class="type" scope="col">Type d'article</th>
							<th class="prix" scope="col">Prix</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="nom" scope="row">Promotion éléctro</th>
							<td class="type">Musique</td>
							<td class="prix">19€99</td>
						</tr>
						<tr>
							<th class="nom" scope="row">Promotion éléctro</th>
							<td class="type">Film</td>
							<td class="prix">9€99</td>
						</tr>
						<tr>
							<th class="nom" scope="row">Promotion éléctro</th>
							<td class="type">Film</td>
							<td class="prix">14€99</td>
						</tr>
						<tr class="total">
							<th scope="row" colspan="2">Total de la commande</th>
							<td class="prix">44€97</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="row justify-content-center">
				<h1 class="col-12 col-sm-10 col-md-8 col-lg-6">Paiement de la commande</h1>
			</div>
			<form>
				<div class="row justify-content-center">
					<div class="wrap col-12 col-sm-8 col-md-6 col-xl-4">
						<div class="row justify-content-between">
							<label>Moyen de paiement :</label>
							<div>
								<input type="radio" name="moyenPaiement" id="visa" value=0>
								<label for="visa"><span><p></p></span>Visa</label>
							</div>
							<div>
								<input type="radio" name="moyenPaiement" id="mastercard" value=1>
								<label for="mastercard"><span><p></p></span>Mastercard</label>
							</div>
						</div>
						<div class="row">
								<label for="numeroCB">Numéro de carte bancaire</label>
								<input type="text" name="numeroCB" id="numeroCB" class="col-12">
						</div>
						<div class="row justify-content-between">
							<div class="dateExp col-6">
								<label for="moisExp">Date d'expiration</label>
								<input type="text" name="moisExp" id="moisExp">
								<span>/</span>
								<input type="text" name="anneeExp">
							</div>
							<div class="crypto col-6">
								<label for="crypto">Cryptogramme visuel</label>
								<input type="text" name="crypto" id="crypto">
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="cgv col-12">
						<input type="checkbox" name="cgv" id="cgv">
						<label for="cgv"><span><p></p></span>Je reconnais avoir pris connaissance des <a href="">Conditions générales de vente</a> et je les accepte</label>
					</div>
				</div>
			</form>
			<div class="row justify-content-around">
				<div class="col-12 col-lg-10 col-xl-8 wrapButton">
					<a href="" class="valider button col-12 col-sm-8 col-md-5"><span class="icon icon-Valid"><span class="path1"></span><span class="path2"></span></span>Valider le paiement</a>
					<a href="13_panier.php" class="poursuivre button col-12 col-sm-8 col-md-5"><span class="icon icon-Poursuivre"><span class="path1"></span><span class="path2"></span></span>Retourner au panier</a>
				</div>
			</div>
		</div>
	</main>

	<?php
	include('../templates/footer.php');
	?>
</body>
</html>
